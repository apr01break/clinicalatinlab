<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Distrito;
use clinicalatinlab\Paciente;
use clinicalatinlab\PacienteOcupacional;

class Empresa extends Model
{
    protected $table      = 'empresas';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'nombre','abreviatura','veterinaria','giroNegocio','ruc','contacto','grupo','atencion','fechaConsti'
        ,'fechaAniver','cargo','direccion','distrito_id','email','telefono','anexo','fax','homePage','observacion'
        ,'estado','nombreUsuario'
    ];
    public function distrito()
    {
        return $this->belongsTo(Distrito::class,'distrito_id');
    }
    public function pacientes()
    {
        return $this->hasMany(Paciente::class,'empresa_id');
    }
    public function pacientesOcupacionales()
    {
        return $this->hasMany(PacienteOcupacional::class,'empresa_id');
    }
}
