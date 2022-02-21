<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'Rut',
        'Nombre',
        'Apellido_Paterno',
        'Apellido_Materno',
        'Empresa',
        'Dias',
        'Monto_Diario',
        'Monto_Final'
    ];
}
