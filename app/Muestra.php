<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\MuestraExamenSolicitud;

class Muestra extends Model
{
    protected $table      = 'muestras';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'nombre','nombreUsuario'
    ];
    public function muestrasExamenesSolicitud()
    {
        return $this->hasMany(MuestraExamenSolicitud::class,'muestra_id');
    }
}
