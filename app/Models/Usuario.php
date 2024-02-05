<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;


class Usuario extends Model
{
    use HasFactory;
    use HasRoles;

    protected $table = "usuarios";

    protected $fillable = [
        'nombre_user',
        'cedula_user',
        'num_telefono',
        'direccion_user'
    ];

}
