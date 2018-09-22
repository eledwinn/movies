@extends('layout')

@section('title', 'Listado de peliculas')

@section('content')
    <div class="flex-center position-ref full-height">
    <a class="btn btn-primary" href="{{route('movies.new')}}">+ Crear pelicula</a>
        <ul>
            @forelse ($movies as $movie)
            <li>{{ $movie->description }} ({{ $movie->code }})</li>
            @empty
                <li>No hay usuarios registrados</li>
            @endforelse
        </ul>
    </div>
@endsection