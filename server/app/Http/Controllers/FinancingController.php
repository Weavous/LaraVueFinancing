<?php

namespace App\Http\Controllers;

use App\Models\Financing;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class FinancingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        return response()->json(Financing::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): JsonResponse
    {
        $resource = Financing::find($id);

        if ($resource instanceof Financing) {
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
        $resource = Financing::find($id);

        if ($resource instanceof Financing) {
            $resource->delete();

            return response()->json([], 204);
        }

        return response()->json([], 400);
    }
}
