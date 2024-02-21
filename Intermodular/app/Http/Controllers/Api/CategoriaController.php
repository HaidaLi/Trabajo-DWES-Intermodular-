<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoriaCollection;
use App\Http\Resources\CategoriaResource;
use App\Models\Categoria;
use App\Models\Servicio;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::get();
        return (new CategoriaCollection($categorias))->response()->setStatusCode(200);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'servicios' => 'array',
        ]);

        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->save();
        if ($request->has('servicios')) {
            foreach ($request->servicios as $servicioId) {
                $servicio = Servicio::find($servicioId);
                if ($servicio) {
                    $categoria->servicios()->attach($servicioId);
                }
            }
        }
        return response()->json([
            'categoria' => new CategoriaResource($categoria),
            'servicios' => $categoria->servicios()->pluck('nombre')->toArray()
        ], 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {

        return (new CategoriaResource($categoria))->response()->setStatusCode(200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->save();
        return response()->json($categoria, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return response()->json(null, 204);

    }
}
