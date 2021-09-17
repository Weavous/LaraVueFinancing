<?php

namespace App\Http\Controllers;

use App\Models\Type;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        return response()->json(Type::all());
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

        $resource = Type::create(
            $validator->safe()->only(['name'])
        );

        return response()->json($resource, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): JsonResponse
    {
        $resource = Type::find($id);

        if ($resource instanceof Type) {
            return response()->json($resource);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id): JsonResponse
    {
        $resource = Type::find($id);

        if ($resource instanceof Type) {
            $resource->delete();

            return response()->json([], 204);
        }

        return response()->json([], 400);
    }

    private function validator(Request $request): \Illuminate\Validation\Validator
    {
        $only = $request->only('name');

        $validator = Validator::make($only, [
            'name' => 'required|regex:/^[A-Za-z\s]*$/i',
        ]);

        return $validator;
    }
}
