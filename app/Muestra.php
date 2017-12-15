<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\MuestraServicio;

class Muestra extends Model
{
    protected $table      = 'muestras';
    protected $primaryKey = 'id';
    public $timestamps    = false;
    protected $fillable   = [
        'nombre'
    ];
    public function muestrasServicios()
    {
        return $this->hasMany(MuestraServicio::class,'muestra_id');
    }
}
