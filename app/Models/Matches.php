<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [ 
        "idMatch",
        "idTorneo",
        "nombre",
        "EquipoCasa",
        "EquipoVisitante",
        "EquipoGanador",
        "fecha",
        "horaInicial",
        "horaFinal",
        "estatus",
    ];
}
