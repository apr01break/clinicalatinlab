<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Muestra;
use clinicalatinlab\ExamenSolicitud;

class MuestraExamenSolicitud extends Model
{
    protected $table      = 'muestras_examen_solicitud';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'examen_solicitud_id','muestra_id','estado','nombreUsuario'
    ];
    public function examenSolicitud()
    {
        return $this->belongsTo(ExamenSolicitud::class,'examen_solicitud_id');
    }
    public function muestra()
    {
        return $this->belongsTo(Muestra::class,'muestra_id');
    }
}
