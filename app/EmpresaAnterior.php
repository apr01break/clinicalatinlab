<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\PacienteOcupacional;

class EmpresaAnterior extends Model
{
    protected $table      = 'empresas_anteriores';
    protected $primaryKey = 'id';
    public $timestamps    = false;
    protected $fillable   = [
        'paciente_ocupacional_id','nombre','areaTrabajo','ocupacion','fechaInicio','fechaFin'
        ,'exposicion','epp'
    ];
    public function pacienteOcupacional()
    {
        return $this->belongsTo(PacienteOcupacional::class,'paciente_ocupacional_id');
    }
}
