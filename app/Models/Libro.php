<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
