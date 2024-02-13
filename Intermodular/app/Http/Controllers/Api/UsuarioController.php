<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsuarioRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;


class UsuarioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum', [
            'except' => ['index', 'show']
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::get();
        return response()->json($usuarios, 200);
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->dni = $request->dni;
        $usuario->login = $request->login;
        $usuario->password = bcrypt($request->password);
        $usuario->nombre = $request->nombre;
        $usuario->save();

        return response()->json($usuario, 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        return response()->json($usuario, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UsuarioRequest $request, Usuario $usuario)
    {
        $usuario->update($request->all());
        return response()->json($usuario, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return response()->json(null, 204);
    }
}
