<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    protected $fillable = ['asunto', 'motivo', 'trabajo', 'equipo', 'descripcion', 'estado', 'id_tecnico'];

    protected $attributes = ['descripcion' => 'Sin descripcion técnica', 'estado' =>'No resuelta', 'id_tecnico' => 0];

    
}
