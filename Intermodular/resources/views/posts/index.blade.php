@extends('plantilla')

@section('titulo', 'Indice')
@section('contenido')
    <h1>Empresas:</h1>
    <div class="container row">
        <ul class="container d-flex flex-wrap">
            @forelse ($empresas as $empresa)

            <li class="border p-5 col-lg-2 list-unstyled">
            {{$empresa->nombre}}
            <a href="{{ route('posts.show', [$empresa->id])}}"><button class="">Detalles</button>
            </a>

            <form action="{{ route('posts.destroy', $empresa) }}" method="POST">
                &nbsp;&nbsp;
                @method('DELETE')
                @csrf
                <button>Borrar</button>
                </form>
                <form action="{{ route('posts.editarEmpresa', $empresa)}}" method="GET">
                    @method('POST')
                    @csrf
                    <button>Editar</button>
                </form>
            </li>

        @empty
            <li>No se ha encontrado empresas</li>

        @endforelse
        </ul>
        {{$empresas->links()}}

    </div>


@endsection
