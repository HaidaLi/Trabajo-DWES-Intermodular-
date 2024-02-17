<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Http\Resources\EmpresaCollection;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empresas = Empresa::get();
        return (new EmpresaCollection($empresas))->response()->setStatusCode(200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empresa = new Empresa();

        $empresa->nombre = $request->nombre;
        $empresa->descripcion = $request->descripcion;
        $empresa->notas = $request->notas;
        $empresa->email = $request->email;
        $empresa->password = bcrypt($request->password);
        $empresa->direccion = $request->direccion;
        $empresa->coordenadas = $request->coordenadas;
        $empresa->cif = $request->cif;
        $empresa->provincia = $request->provincia;
        $empresa->poblacion = $request->poblacion;
        $empresa->horario = $request->horario;
        $empresa->dias_trabajo = $request->dias_trabajo;
        $empresa->puestos_disponibles = $request->puestos_disponibles;
        $empresa->categorias = $request->categorias;

        $empresa->save();

        return response()->json($empresa, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Empresa $empresa)
    {
        return response()->json($empresa, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empresa $empresa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empresa $empresa)
    {
        $empresa->delete();
        return response()->json(null, 204);

    }
}
