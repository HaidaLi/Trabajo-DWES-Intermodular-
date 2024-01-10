@extends('plantilla')
@section('titulo', 'Ficha empresa')
@section('contenido')

<ul>
    @forelse($empresas as $empresa)
   @if ($empresa->id == $id)
   <div class="container border d-flex row">
       <p style="font-size: 35px">Empresa ID:{{$empresa->id}}</p>
       <p style="font-size: 25px">Nombre empresa:{{$empresa->nombre}}</p>
    </div>
   @endif

   @empty
   <li>No se ha encontrado empresas</li>
   @endforelse
   </ul>
@endsection
