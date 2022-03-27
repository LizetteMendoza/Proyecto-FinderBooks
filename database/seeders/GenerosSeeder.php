<?php

namespace Database\Seeders;

use App\Models\Genero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genero::create(['genero'=>'Novela']);
        Genero::create(['genero'=>'Académico']);
        Genero::create(['genero'=>'Cuento']);
        Genero::create(['genero'=>'Economía']);
        Genero::create(['genero'=>'Social']);
        Genero::create(['genero'=>'Fantasia']);
        Genero::create(['genero'=>'Comics']);
        Genero::create(['genero'=>'Filosofía']);
        Genero::create(['genero'=>'Política']);
        Genero::create(['genero'=>'Ciencia y tecnología']);
        
    }
}
