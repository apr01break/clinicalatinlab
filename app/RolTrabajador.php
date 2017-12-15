<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Rol;
use clinicalatinlab\Trabajador;

class RolTrabajador extends Model
{
    protected $table      = 'roles_trabajador';
    protected $primaryKey = 'id';
    public $timestamps    = false;
    protected $fillable   = [
        'trabajador_id','rol_id'
    ];
    public function rol()
    {
        return $this->belongsTo(Rol::class,'rol_id');
    }
    public function trabajador()
    {
        return $this->belongsTo(Trabajador::class,'trabajador_id');
    }
}
