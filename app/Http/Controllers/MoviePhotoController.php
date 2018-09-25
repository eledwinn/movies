<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Illuminate\Support\Facades\Storage;

class MoviePhotoController extends Controller
{
    
    public function index ($id) {
        $movie = Movie::where('id', $id)->firstOrFail();
        $error = null;

        // dd(compact('movieId'));
        return view('movie-photos', compact('movie', 'error'));
    }

    // app/Http/Controllers/PhotoController.php
    public function store(Request $request, $id)
    {
        $code = $request->input('code');
        $movie = Movie::where('code', $code)->firstOrFail();
        
        
        if (!$request->file('photo')) {
            $error = "Debe seleccionar una imagen";
            return view('movie-photos', compact('movie', 'error'));
        }

        $time = date('YmdHis');

        $extension = $request->file('photo')->extension();

        $fullFileName = "movie{$code}{$time}." . $extension;
       
        $path = $request->file('photo')->storeAs('/images', $fullFileName);

        $movie->url = $movie->url . '|' . $fullFileName;
        $movie->save();
        
        return redirect('/');
    }
}
