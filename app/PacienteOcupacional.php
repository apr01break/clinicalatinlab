<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Paciente;
use clinicalatinlab\DatoClinico;
use clinicalatinlab\EmpresaAnterior;
use clinicalatinlab\PacienteServicioOcupacional;
use clinicalatinlab\Empresa;

class PacienteOcupacional extends Model
{
    protected $table      = 'pacientes_ocupacionales';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'paciente_id','empresa_id','ocupacion','tipoEvaluacion1','tipoEvaluacion2','fechaEvaluacion','residenciaOcupacion','tiempoResidencia','seguro','email'
        ,'estadoCivil','gradoInstruccion','nroHijosVivos','nroDependientes','nombreUsuario'
    ];
    public function paciente()
    {
        return $this->belongsTo(Paciente::class,'paciente_id');
    }
    public function empresa()
    {
        return $this->belongsTo(Empresa::class,'empresa_id');
    }
    public function empresasAnteriores()
    {
        return $this->hasMany(EmpresaAnterior::class,'paciente_ocupacional_id');
    }
    public function pacientesServiciosOcupacionales()
    {
        return $this->hasMany(PacienteServicioOcupacional::class,'paciente_ocupacional_id');
    }
    public function datosClinicos()
    {
        return $this->hasMany(DatoClinico::class,'paciente_ocupacional_id');
    }
}
