<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plays extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [  "jugada", "MatchAnotationID"];
}
