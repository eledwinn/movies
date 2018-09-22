@extends('layout')

@section('title', 'Crear nueva película')

@section('content')
    <ul>
        @forelse ($movies as $movie)
        <li>{{ $movie }}</li>
        @empty
            <li>No hay usuarios registrados</li>
        @endforelse
    </ul>
@endsection