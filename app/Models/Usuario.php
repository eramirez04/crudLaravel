<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = "usuarios";

    protected $fillable = [
        'nombre_user',
        'cedula_user',
        'num_telefono',
        'direccion_user'
    ];

}
