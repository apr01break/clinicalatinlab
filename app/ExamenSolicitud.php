<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Examen;
use clinicalatinlab\Solicitud;
use clinicalatinlab\Trabajador;
use clinicalatinlab\Comprobante;

class ExamenSolicitud extends Model
{
    protected $table      = 'examenes_solicitud';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'examen_id','solicitud_id','trabajador_id','resultado','descripcion','unidad','rango','comentario'
        ,'comprobante_id','nombreUsuario'
    ];
    public function examen()
    {
        return $this->belongsTo(Examen::class,'examen_id');
    }
    public function solicitud()
    {
        return $this->belongsTo(Solicitud::class,'solicitud_id');
    }
    public function trabajador()
    {
        return $this->belongsTo(Trabajador::class,'trabajador_id');
    }
    public function comprobante()
    {
        return $this->belongsTo(Comprobante::class,'comprobante_id');
    }
}
