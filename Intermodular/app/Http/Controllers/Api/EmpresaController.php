<?php

namespace App\Http\Controllers\Api;
use Faker\Factory as Faker;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Http\Resources\EmpresaCollection;
use App\Http\Resources\EmpresaResource;

class EmpresaController extends Controller
{

    protected $faker;

    public function __construct()
    {
        $this->faker = Faker::create();
    }
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


        $latitud = $this->faker->latitude;
        $longitud = $this->faker->longitude;

        $calleAleatoria = $this->faker->streetAddress;

        $empresa->nombre = $request->nombre;
        $empresa->imagen = "https://loremflickr.com/640/480/business";
        $empresa->telefono = $request->telefono;
        $empresa->descripcion = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit assumenda alias est?";
        $empresa->nota_alumno = 50;
        $empresa->nota_profesor = 66;
        $empresa->correo = $request->correo;
        $empresa->password = bcrypt($request->password);
        $empresa->coordenadas =  "-32.915118, -113.937618";
        $empresa->cif = $request->cif;
        $empresa->calle = $calleAleatoria;
        $empresa->provincia = $request->provincia;
        $empresa->poblacion = $request->poblacion;
        $empresa->horario = "19:35:31";
        $empresa->turno = "L-D";
        $empresa->entrada = "04:35";
        $empresa->salida = "18:30";
        $empresa->vacantes = $request->vacantes;
        $empresa->categorias = $request->categoria;

        $empresa->save();

        return response()->json($empresa, 201);



    }

    /**
     * Display the specified resource.
     */
    public function show(Empresa $empresa)
    {
        return response()->json(new EmpresaResource($empresa), 200);
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
