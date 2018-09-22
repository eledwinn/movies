@extends('layout')

@section('title', 'Crear nueva película')

@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{url('movies/create')}}">
    {!! csrf_field() !!}

<input type="text" name="code" value="{{old('code')}}" >
    <input type="description" name="description" value="{{old('description')}}" >

    <button type="submit">Crear película</button>
</form>
@endsection