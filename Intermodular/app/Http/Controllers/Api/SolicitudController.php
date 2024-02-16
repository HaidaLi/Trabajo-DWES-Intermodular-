<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Resenya;
use App\Models\Solicitud;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resenya = Resenya::get();
        return $resenya;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $solicitud = new Solicitud();
        $solicitud->fecha = $request->fecha;
        $solicitud->save();
        return response()->json($solicitud,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Solicitud $solicitud)
    {
        return response()->json($solicitud,200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Solicitud $solicitud)
    {
        $solicitud->update($request->all());
        return response()->json($solicitud, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Solicitud $solicitud)
    {
        $solicitud->delete();
        return response()->json($solicitud);
    }
}
