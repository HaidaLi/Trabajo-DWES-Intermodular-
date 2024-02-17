<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UsuarioRequest;
use App\Http\Resources\UserResource;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Psy\Readline\Hoa\Console;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum')->only('logout');
    }
    public function login(LoginRequest $request)
    {
        $fields = $request->all();
        $usuario = Usuario::where('login', $request->login, $fields['login'])->first();
        if (!$usuario || !Hash::check($request->password, $usuario->password)) {
            return response()->json(['error' => 'Credenciales no válidas'], 401);
        } else {
            $userResource = new UserResource($usuario);
            return response()->json([
                'usuario' => $userResource,
                'token' =>
                    $usuario->createToken($usuario->login)->plainTextToken
            ], 200);
        }
    }

    public function register(UsuarioRequest $request)
    {
        $fields = $request->all();
        $fields['password'] = bcrypt($fields['password']);
        $user = Usuario::create($fields);
        $user->roles()->sync($request->input('roles'));
        $userResource = new UserResource($user);
        $token = $user->createToken('appToken')->plainTextToken;

        return response()->json([
            'usuario' => $userResource,
            'token' => $token,
            'roles' => $userResource->roles()->pluck('nombre')->toArray()
        ], 200);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['mensaje' => 'logout'], 200);
    }
}
