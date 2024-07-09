<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    use HasFactory;

    protected $table = 'mantenimiento';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'nombre_producto',
        'foto_antes',
        'foto_despues',
        'motivo',
        'fecha_ultima_actualizacion',
        'fecha_mantenimiento',
        'responsable',
        'unidad',
        'tecnico_nombre',
        'tecnico_rut',
        'empresa',
        'tipo_visita'

    ];

}
