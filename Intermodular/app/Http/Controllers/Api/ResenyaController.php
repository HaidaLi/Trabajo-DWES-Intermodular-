<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FormularioPregunta;
use App\Models\Resenya;
use Illuminate\Http\Request;

class ResenyaController extends Controller
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
        $resenya = new Resenya();
        $resenya->fecha = $request->fecha;
        $resenya->formulario_preguntas()->associate(Resenya::findOrFail($request->formulario_preguntas_id));
        $resenya->save();
        return response()->json($resenya,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Resenya $resenya)
    {
        return response()->json($resenya,200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resenya $resenya)
    {
        $resenya->update($request->all());
        return response()->json($resenya, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resenya $resenya)
    {
        $resenya->delete();
        return response()->json($resenya);
    }
}
