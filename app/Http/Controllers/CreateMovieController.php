<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
class CreateMovieController extends Controller
{
    public function index() {

        return view('create-movie');
    }

    public function create () {

        $data = request()->validate([
            'code' => 'required|unique:movies,code',
            'description' => 'required'
        ], [
            'code.required' => 'El campo código es requerido',
            'code.unique' => 'El código especificado ya existe',
            'description.required' => 'El campo descripción es requerido'
        ]);

        Movie::create([
            'code' => $data['code'],
            'description' => $data['description']
        ]);

        return redirect()->route('home');
    }
}
