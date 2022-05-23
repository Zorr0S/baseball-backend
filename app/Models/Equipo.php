<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'idEquipo',
        'idAdmin',
        'nombre',
        'logo',
        'estatus',
    ];
}
