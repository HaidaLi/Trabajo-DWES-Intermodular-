<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\RolController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsuarioController;
use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\FormularioController;
use App\Http\Controllers\Api\PreguntaController;
use App\Http\Controllers\Api\ResenyaController;
use App\Http\Controllers\Api\EmpresaController;
use App\Http\Controllers\Api\ServicioController;
use App\Models\Centro;
use App\Http\Controllers\Api\CentroController;
use App\Http\Controllers\Api\CicloController;
use App\Http\Controllers\Api\SolicitudController;
use App\Http\Controllers\Api\TokenController;

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

Route::apiResource('token', TokenController::class);
Route::apiResource('ciclos', CicloController::class);
Route::apiResource('centros', CentroController::class);
Route::apiResource('empresas', EmpresaController::class);
Route::apiResource('solicitudes', SolicitudController::class);
Route::apiResource('resenyas', ResenyaController::class);



Route::prefix('auth')->group(function(){
    Route::post('login', [LoginController::class, 'login']);
    Route::post('register', [LoginController::class, 'register']);
    Route::post('logout', [LoginController::class, 'logout']);

});
