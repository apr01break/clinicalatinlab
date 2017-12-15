<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\ExamenSolicitud;
use clinicalatinlab\Servicio;

class Examen extends Model
{
    protected $table      = 'examenes';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'servicio_id','descripcion','estado','nombreUsuario'
    ];
    public function servicio()
    {
        return $this->belongsTo(Servicio::class,'servicio_id');
    }
    public function examenesSolicitud()
    {
        return $this->hasMany(ExamenSolicitud::class,'examen_id');
    }
}
