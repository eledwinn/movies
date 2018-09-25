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
            'code'=> 'MOV001',
            'name'=> 'Trilogía de El hobbit',
            'description'=> 'La trilogía de El hobbit, adaptación cinematográfica basada en la novela homónima, comprende tres películas épicas de fantasía, acción y aventuras: El hobbit: un viaje inesperado, El hobbit: la desolación de Smaug y El hobbit.​'
        ]);

        Movie::create([
            'code'=> 'MOV002',
            'name'=> 'Avengers: Infinity War',
            'description'=> 'Los superhéroes se alían para vencer al poderoso Thanos, el peor enemigo al que se han enfrentado. Si Thanos logra reunir las seis gemas del infinito: poder, tiempo, alma, realidad, mente y espacio, nadie podrá detenerlo.'
        ]);

        Movie::create([
            'code'=> 'MOV003',
            'name'=> 'La monja',
            'description'=> 'Una monja se suicida en una abadía rumana y El Vaticano envía a un sacerdote y una novicia a investigar lo sucedido. Lo que ambos encuentran allá es un secreto perverso que les enfrentará cara a cara con el mal en su esencia más pura.'
        ]);
    }
}
