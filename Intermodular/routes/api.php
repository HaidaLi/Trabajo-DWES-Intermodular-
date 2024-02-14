<?php

use App\Http\Controllers\Api\RolController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsuarioController;
use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\EmpresaController;
use App\Http\Controllers\Api\ServicioController;
use App\Models\Centro;
use App\Http\Controllers\Api\CentroController;
use App\Http\Controllers\Api\CicloController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('usuarios', UsuarioController::class);

Route::apiResource('categorias', CategoriaController::class);

Route::apiResource('roles', RolController::class);

Route::apiResource('empresas', EmpresaController::class);

Route::apiResource('centros', CentroController::class);

Route::apiResource('ciclos', CicloController::class);


