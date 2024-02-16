<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Formulario;
use App\Models\Token;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formulario = Formulario::get();
        return $formulario;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formulario = new Formulario();
        $formulario->nombre = $request->nombre;
        $formulario->descripcion = $request->descripcion;
        $formulario->tipo = $request->tipo;
        $formulario->token()->associate(Token::findOrFail($request->idToken));
        $formulario->save();
        return response()->json($formulario,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Formulario $formulario)
    {
        return response()->json($formulario,200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formulario $formulario)
    {
        $formulario->delete();
        return response()->json($formulario);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formulario $formulario)
    {
        $formulario->delete();
        return response()->json($formulario);
    }
}
