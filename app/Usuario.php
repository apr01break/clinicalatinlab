<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Trabajador;

class Usuario extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'name','email','password','nombreUsuario'
    ];
    public function trabajador()
    {
        return $this->hasOne(Trabajador::class,'usuario_id');
    }
}
