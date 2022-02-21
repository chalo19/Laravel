<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alta_Baja extends Model
{
    public $timestamps=false;

    use HasFactory;
    protected $fillable = [
        'Nombre',
        'Rut',
        'Empresa',
        'Cargo',
        'Fecha_Ingreso',
        'Alta/Baja',
        'Cant_Dias_Carga'
    ];
}
