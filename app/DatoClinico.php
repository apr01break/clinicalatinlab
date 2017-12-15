<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\PacienteOcupacional;

class DatoClinico extends Model
{
    protected $table      = 'datos_clinicos';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'paciente_ocupacional_id','tipoEvaluacion1','tipoEvaluacion2','fechaEvaluacion','edad','talla','peso'
        ,'imc','perAbd','frecResp','frecCard','pa','temperatura','visLejosOdSc','visLejosOdCc','visLejosOiSc'
        ,'visLejosOiCc','visCercaOdSc','visCercaOdCc','visCercaOiSc','visCercaOiCc','nombreUsuario'
    ];
    public function pacienteOcupacional()
    {
        return $this->belongsTo(PacienteOcupacional::class,'paciente_ocupacional_id');
    }
}
