<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Servicio;

class Tarifa extends Model
{
    protected $table      = 'sub_clases';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'servicio_id','tipoPaciente','precioCalculado','precioExcepcion','tarifa','observacion','nombreUsuario'
    ];
    public function servicio()
    {
        return $this->belongsTo(Servicio::class,'servicio_id');
    }
}
