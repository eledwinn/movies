@extends('layout')

@section('content')

<div class="mt-3">
Subir imagen para {{ $movie->name }}
</div>

<form method="POST" action="/movie-photos/{{ $movie->id }}" enctype="multipart/form-data">
     
    <div class="mt-3">
        <input type="hidden" name="code" value="{{ $movie->code }}" >
    </div>
    {{ csrf_field() }}
    <div class="form-group">
        <label class="custom-file">
            <input type="file" name="photo">
            <span class="custom-file-control"></span>
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Subir imagen</button>
</form>
@endsection