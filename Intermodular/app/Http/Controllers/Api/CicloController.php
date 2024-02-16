<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ciclo;
use Illuminate\Http\Request;

class CicloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ciclos = Ciclo::get();
        return response()->json($ciclos, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ciclo = new Ciclo();
        $ciclo->nombre = $request->nombre;
        $ciclo->save();
        return response()->json($ciclo, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ciclo $ciclo)
    {
        return response()->json($ciclo, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ciclo $ciclo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ciclo $ciclo)
    {
        $ciclo->delete();
        return response()->json(null, 204);
    }
}
