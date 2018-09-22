<?php

use \App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->truncate();

        Movie::create([
            'code'=> 'CODIGO',
            'description'=> 'PELICULA DESC'
        ]);

        Movie::create([
            'code'=> 'CODIGO1',
            'description'=> 'PELICULA DESC'
        ]);

        Movie::create([
            'code'=> 'CODIGO2',
            'description'=> 'PELICULA DESC'
        ]);
    }
}
