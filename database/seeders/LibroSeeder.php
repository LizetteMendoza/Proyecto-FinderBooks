<?php

namespace Database\Seeders;

use App\Models\Libro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('libros')->insert([
            'user_id' => 1,
            'titulo' => '100 años de soledad', 
            'autor' => 'Gabriel Garcia Marquez',
            'year' => 1967,
            'genero_id' => '1',
            'puntaje' => 9,
            'comentario' => 'interesante, emotiva e inspiradora',
            'created_at' => now(),
            'updated_at' => now()
        ]);*/

        Libro::factory()->times(5)->create();
    }
}
