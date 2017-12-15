<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\PacienteOcupacional;
use clinicalatinlab\ServicioOcupacional;

class PacienteServicioOcupacional extends Model
{
    protected $table      = 'pacientes_servicios_ocupacionales';
    protected $primaryKey = 'id';
    public $timestamps    = false;
    protected $fillable   = [
        'paciente_ocupacional_id','servicio_ocupacional_id'
    ];
    public function pacienteOcupacional()
    {
        return $this->belongsTo(PacienteOcupacional::class,'paciente_ocupacional_id');
    }
    public function servicioOcupacional()
    {
        return $this->belongsTo(ServicioOcupacional::class,'servicio_ocupacional_id');
    }
}
