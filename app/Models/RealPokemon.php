<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealPokemon extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','ataque','defensa','sexo','tipo','descripción'];
}
