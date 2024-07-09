<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mantenciones extends Model
{
    use HasFactory;

    protected $table = 'mantenciones';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'id_mantenimiento',
        'motivo',
        'fecha_mantenimiento',
        'responsable',
        'tecnico_nombre',
        'tecnico_rut',
        'empresa',
        'tipo_visita'
    ];
}
