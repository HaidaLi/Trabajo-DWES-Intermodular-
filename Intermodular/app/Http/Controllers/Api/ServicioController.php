<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServicioCollection;
use App\Http\Resources\ServicioResource;
use App\Models\Servicio;
use App\Models\Usuario;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicios = Servicio::all();
        return  (new ServicioCollection($servicios))->response()->setStatusCode(200);
    // return response()->json($servicios)->setStatusCode(200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $servicio = new Servicio();
        $servicio->nombre = $request->nombre;
        $servicio->descripcion = $request->descripcion;
        $servicio->save();
        return response()->json($servicio, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Servicio $servicio)
    {
        return  (new ServicioResource($servicio))->response()->setStatusCode(200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Servicio $servicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servicio $servicio)
    {
        //
    }
}
