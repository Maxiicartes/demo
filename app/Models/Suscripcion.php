<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model
{
    use HasFactory;

    protected $table = 'suscripcion';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'version',
        'fecha_instalacion',
        'fecha_ultima_actualizacion',
        'fecha_expiracion',
        'responsable',
        'unidad'
    ];
}
