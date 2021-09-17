<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

use App\Http\Resources\VehicleResource;

use Illuminate\Support\Facades\Validator;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        return response()->json(
            VehicleResource::collection(Vehicle::all())
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): JsonResponse
    {
        $validator = $this->validator($request);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $resource = Vehicle::create(
            $validator->safe()->only(['name', 'price', 'brand_id', 'type_id'])
        );

        return response()->json(new VehicleResource($resource), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): JsonResponse
    {
        $resource = Vehicle::find($id);

        if ($resource instanceof Vehicle) {
            return response()->json(
                new VehicleResource($resource)
            );
        }

        return response()->json([], 204);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = $this->validator($request);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $resource = Vehicle::find($id);

        if (($resource instanceof Vehicle) === false) {
            return response()->json($validator->errors(), 400);
        }

        $resource->update(
            $validator->safe()->only(['name', 'price', 'brand_id', 'type_id'])
        );

        return response()->json(new VehicleResource($resource), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id): JsonResponse
    {
        $resource = Vehicle::find($id);

        if ($resource instanceof Vehicle) {
            $resource->delete();

            return response()->json([], 204);
        }

        return response()->json([], 400);
    }

    private function validator(Request $request): \Illuminate\Validation\Validator
    {
        $only = $request->only('name', 'price', 'brand_id', 'type_id');

        $validator = Validator::make($only, [
            'name' => 'required|regex:/^[A-Za-z\s]*$/i',
            'price' => 'required|int',
            'type_id' => 'required|exists:types,id',
            'brand_id' => 'required|exists:brands,id'
        ]);

        return $validator;
    }
}
