<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugadores extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'idJugador',
        'idEquipo',
        'idTipo',
        'jersey',
        'nombre',
        'bateo',
        'lanzamiento',
        'nacimiento',
        'estatus',
        'AB',
        'H',
        'twoB',
        'threeB',
        'HR'
    ];
}
