<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pregunta;
use Illuminate\Http\Request;

class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $preguntas = Pregunta::get();
        return $preguntas;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pregunta = new Pregunta();
        $pregunta->titulo = $request->titulo;
        $pregunta->tipo = $request->tipo;
        $pregunta->orden = $request->orden;
        $pregunta->save();
        return response()->json($pregunta,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pregunta $pregunta)
    {
        return response()->json($pregunta,200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pregunta $pregunta)
    {
        $pregunta->delete();
        return response()->json($pregunta);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pregunta $pregunta)
    {
        $pregunta->delete();
        return response()->json($pregunta);
    }
}
