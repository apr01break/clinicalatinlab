<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Medico;
use clinicalatinlab\Paciente;
use clinicalatinlab\Comprobante;
use clinicalatinlab\ExamenSolicitud;

class Solicitud extends Model
{
    protected $table      = 'solicitudes';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'paciente_id','medico_id','estado','nombreUsuario'
    ];
    public function medico()
    {
        return $this->belongsTo(Medico::class,'medico_id');
    }
    public function paciente()
    {
        return $this->belongsTo(Paciente::class,'paciente_id');
    }
    public function examenesSolicitud()
    {
        return $this->hasMany(ExamenSolicitud::class,'solicitud_id');
    }
    public function comprobante()
    {
        return $this->hasOne(Comprobante::class,'solicitud_id');
    }
}
