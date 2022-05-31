<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [ 
        'idMatch',
        'TorneoName',
        'idTorneo',
        'CasaName',
        'EquipoCasa',
        'VisitanteName',
        'EquipoVisitante',
        'EquipoGanador',
        'fecha',
        'horario',
        'estatus',
    ];
}
