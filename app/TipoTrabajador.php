<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Trabajador;

class TipoTrabajador extends Model
{
    protected $table      = 'tipos_trabajador';
    protected $primaryKey = 'id';
    public $timestamps    = false;
    protected $fillable   = [
        'nombre','estado'
    ];
    public function trabajadores()
    {
        return $this->hasMany(Trabajador::class,'tipo_trabajador_id');
    }
}
