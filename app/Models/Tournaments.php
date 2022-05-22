<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournaments extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ["idCategoria", "idGenero", "idTipo", "idCiudad", "administradores", "estatus", "participantes"];


}
