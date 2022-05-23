<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'idTorneo',
        'nombre',
        'Categoria',
        'Genero',
        'Tipo',
        'Ciudad',
        'Lugar',
        'administradores',
        'participantes',
        'estatus',
    ];
}
