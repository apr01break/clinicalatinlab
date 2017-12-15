<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\RolTrabajador;

class Rol extends Model
{
    protected $table      = 'roles';
    protected $primaryKey = 'id';
    public $timestamps    = false;
    protected $fillable   = [
        'nombre','estado'
    ];
    public function rolesTrabajador()
    {
        return $this->hasMany(RolTrabajador::class,'rol_id');
    }
}
