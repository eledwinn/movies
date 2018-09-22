<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateMovieController extends Controller
{
    public function index() {

        if (request()->has('empty')) {
            $movies = [];
        }
        else {
            $movies = ['Hulk','La Monja','Vengadores','Al filo del mañana'];
        }
        return view('create-movie', compact('movies'));
    }
}
