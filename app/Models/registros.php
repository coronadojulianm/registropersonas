<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registros extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'cedula',
        'numTelefono',
        'Direccion'
    ];
}
