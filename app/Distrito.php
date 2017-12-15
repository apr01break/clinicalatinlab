<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Provincia;
use clinicalatinlab\Persona;

class Distrito extends Model
{
    protected $table      = 'distritos';
    protected $primaryKey = 'id';
    public $timestamps    = false;
    protected $fillable   = [
        'nombre','provincia_id'
    ];
    public function provincia()
    {
        return $this->belongsTo(Provincia::class,'provincia_id');
    }
    public function personasPorLugarNacimiento()
    {
        return $this->hasMany(Persona::class,'lugarNacimiento_id');
    }
    public function personasPorResidencia()
    {
        return $this->hasMany(Persona::class,'residencia_id');
    }
}
