<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Libro extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $fillable = ['user_id','titulo','autor','year','puntaje','comentario'];

    public function generos(){
        return $this->belongsToMany(Genero::class);
    }

    
    //Asigna el Nombre del libro en mayuscula la primera letra y las demmás minusculas
    protected function titulo(): Attribute{

        return Attribute::make(
            //get: fn ($value) => strtoupper($value),
            set: fn ($value) => ucfirst(strtolower($value)),
        );
    }


}
