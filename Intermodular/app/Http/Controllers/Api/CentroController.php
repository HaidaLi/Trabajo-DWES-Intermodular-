<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Centro;
use Illuminate\Http\Request;
use App\Http\Resources\CentroCollection;
use App\Http\Resources\CentroResource;

class CentroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $centros = Centro::get();
        return (new CentroCollection($centros))->response()->setStatusCode(200);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $centro = new Centro();

        $centro->nombre = $request->nombre;
        $centro->email = $request->email;
        $centro->password = bcrypt($request->password);
        $centro->direccion = $request->direccion;
        $centro->telefono = $request->telefono;
        $centro->poblacion = $request->poblacion;
        $centro->provincia = $request->provincia;
        $centro->save();

        return response()->json($centro, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Centro $centro)
    {
        return response()->json(new CentroResource($centro), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Centro $centro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Centro $centro)
    {
        $centro->delete();
        return response()->json(null, 204);

    }
}
