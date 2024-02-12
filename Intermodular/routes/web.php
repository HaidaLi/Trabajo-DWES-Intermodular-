<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('posts.index');
// });
Route::get('/empresas/nuevoEmpresa', [EmpresaController::class, 'nuevoEmpresa'])->name('nuevoEmpresa');

Route::get('/empresas/editarPost/{id}', [EmpresaController::class, 'editarEmpresa'])->name('posts.editarEmpresa');

Route::resource('posts', EmpresaController::class);
