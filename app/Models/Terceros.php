<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terceros extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipoidentificacion_tercero',
        'numeroidentificacion_tercero',
        'tipo_tercero',
        'primernombre_tercero',
        'segundonombre_tercero',
        'primerapellido_tercero',
        'segundoapellido_tercero',
        'departamento_id',
        'municipio_id'
    ];
}
