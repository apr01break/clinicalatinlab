<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\PacienteServicioOcupacional;

class ServicioOcupacional extends Model
{
    protected $table      = 'servicios_ocupacionales';
    protected $primaryKey = 'id';
    public $timestamps    = false;
    protected $fillable   = [
        'nombre'
    ];
    public function pacientesServiciosOcupacionales()
    {
        return $this->hasMany(PacienteServicioOcupacional::class,'servicio_ocupacional_id');
    }
}
