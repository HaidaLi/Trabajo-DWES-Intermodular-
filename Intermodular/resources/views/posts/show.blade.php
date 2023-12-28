@extends('plantilla')
@section('titulo', 'Ficha posts')
@section('contenido')

    <h1 class="offset-1 text-primary">Ficha de la tarjeta con id: {{ $post->id }}</h1>

    <p>{{ $post->titulo }}</p>

    <p>Fecha de creación: {{ $post->created_at->format('d/m/Y') }}
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <button class="btn btn-primary" type="submit">Borrar</button>
    </form>
    </p>

@endsection
