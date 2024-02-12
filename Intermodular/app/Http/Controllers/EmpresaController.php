<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empresas = Empresa::orderBy('nombre','asc')
        ->paginate(5);
        return view('posts.index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $empresas = Empresa::orderBy('nombre','asc')
        ->paginate(5);
        return view('posts.show',compact('id','empresas'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Empresa::findOrFail($id)->delete();
        $empresas = Empresa::orderBy('nombre','asc')
        ->paginate(5);
        return view('posts.index', compact('empresas'));
    }

    public function nuevoEmpresa()
    {
        $nombre = "Nombre " . rand(1, 20);
        $descripcion = "Descripcion " . rand(1, 20);
        $email = '';
        $empresa = new Empresa([
            'nombre' => $nombre,
            'descripción' => $descripcion,
            'email' => $email
        ]);
        $empresa->save();

        return redirect()->route('posts.index');
    }
    public function editarEmpresa($id) {
        $empresaEditado = Empresa::find($id);
        $empresaEditado->nombre = "Nombre " . rand(21,40);
        $empresaEditado->descripcion = "Descripción " . rand(21,40);
        $empresaEditado->save();

        return redirect()->route('posts.index');
    }
}
