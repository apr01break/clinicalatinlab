<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Distrito;
use clinicalatinlab\Paciente;
use clinicalatinlab\Trabajador;

class Persona extends Model
{
    protected $table      = 'personas';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'prNombre','sgNombre','aPaterno','aMaterno','fechaNacimiento','lugarNacimiento_id','sexo','tipoDocum'
        ,'nroDocum','direccion','nroDirecc','intDirecc','mzaDirecc','lotDirecc','nroTelefono','nroCelular'
        ,'nroTrabajo','discapacitado','tipoLocali','nombLocali','residencia_id','estado','nombreUsuario'
    ];
    public function lugarNacimiento()
    {
        return $this->belongsTo(Distrito::class,'lugarNacimiento_id');
    }
    public function residencia()
    {
        return $this->belongsTo(Distrito::class,'residencia_id');
    }
    public function paciente()
    {
        return $this->hasOne(Paciente::class,'persona_id');
    }
    public function trabajador()
    {
        return $this->hasOne(Trabajador::class,'persona_id');
    }
}
