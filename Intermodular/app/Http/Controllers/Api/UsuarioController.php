<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsuarioRequest;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\Usuario;
use Illuminate\Http\Request;


class UsuarioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum',  [
            'except' => ['index', 'show']
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Usuario::all();
        $users = Usuario::with('centro', 'empresa', 'roles')->get();
        return (new UserCollection($users))->response()->setStatusCode(200);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(UsuarioRequest $request)
    {
        $fields = $request->all();
        $fields['password'] = bcrypt($fields['password']);

        $user = Usuario::create($fields);
        $user->roles()->sync($request->input('roles'));
        $userResource = new UserResource($user);

        return response()->json([
            'usuario' => $userResource,
            'roles' => $userResource->roles()->pluck('nombre')->toArray()
        ], 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        $usuario->load('empresa');
        $usuario->load('roles');
        return (new UserResource($usuario))->response()->setStatusCode(200);
        //return response()->json($usuario, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        $usuario->nombre = $request->nombre;
        $usuario->password = $request->password;
        $usuario->login = $request->login;
        $usuario->dni = $request->dni;
        $usuario->save();
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
