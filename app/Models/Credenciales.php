<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credenciales extends Model
{   //Esto es un ejemplo de como debe de quedar
    
    use HasFactory;
    protected $fillable = [ 'Nombre','Apellidos','ID_Equipo'];

}
