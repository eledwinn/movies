<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    //
    public function index () {
        return Movie::all();
    }

    public function store (Request $request) {
        $data = $request->validate([
            'code' => 'required|unique:movies,code',
            'name' => 'required',
            'description' => 'required'
        ], [
            'code.required' => 'El campo código es requerido',
            'code.unique' => 'El código especificado ya existe',
            'name.required' => 'El campo nombre es requerido',
            'description.required' => 'El campo descripción es requerido'
        ]);

        $movie = Movie::create([
            'code' => $data['code'],
            'name' => $data['name'],
            'description' => $data['description']
        ]);

        return $movie;
    }

    public function show (Movie $movie) {
        return $movie;
    }

    public function update (Request $reguest, Movie $movie) {

    }

    public function search ($filter) {
        return Movie::where('name', 'LIKE', '%'.$filter.'%')
                    ->orWhere('description', 'LIKE', '%'.$filter.'%')
                    ->orWhere('code', 'LIKE', '%'.$filter.'%')->get();
    }
}
