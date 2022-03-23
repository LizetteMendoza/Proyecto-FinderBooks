<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;
    public $timestamps = false; //Evita que intente crear las columnas de created y udpated

    public function libros(){
        return $this->belongsToMany(Libro::class);
    }
}
