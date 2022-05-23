<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        "idJugador",
        "idEquipo",
        "idTipo",
        "imagen",
        "nombre",
        "bateo",
        "lanzamiento",
        "edad",
        "estatura",
        "peso",
        "estatus",
    ];
    
}
