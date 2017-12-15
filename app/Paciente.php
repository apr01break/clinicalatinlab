<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Empresa;
use clinicalatinlab\Persona;
use clinicalatinlab\Solicitud;

class Paciente extends Model
{
    protected $table      = 'pacientes';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'persona_id','empresa_id','numeroHistoria','tipoFinanciador','veterinaria','observacion'
        ,'estado','nombreUsuario'
    ];
    public function persona()
    {
        return $this->belongsTo(Persona::class,'persona_id');
    }
    public function empresa()
    {
        return $this->belongsTo(Empresa::class,'empresa_id');
    }
    public function solicitudes()
    {
        return $this->belongsTo(Solicitud::class,'paciente_id');
    }
    //FALTA
}
