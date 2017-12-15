<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\SubClase;

class Clase extends Model
{
    protected $table      = 'clases';
    protected $primaryKey = 'id';
    public $timestamps    = false;
    protected $fillable   = [
        'nombre'
    ];
    public function subclases()
    {
        return $this->hasMany(SubClase::class,'clase_id');
    }
}
