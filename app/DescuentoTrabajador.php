<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Sueldo;
use clinicalatinlab\Descuento;

class DescuentoTrabajador extends Model
{
    protected $table      = 'descuentos_trabajador';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'sueldo_id','descuento_id','montoDescuento','estado','nombreUsuario'
    ];
    public function sueldo()
    {
        return $this->belongsTo(Sueldo::class,'sueldo_id');
    }
    public function descuento()
    {
        return $this->belongsTo(Descuento::class,'descuento_id');
    }
}
