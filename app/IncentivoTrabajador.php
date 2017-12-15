<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Sueldo;
use clinicalatinlab\Incentivo;

class IncentivoTrabajador extends Model
{
    protected $table      = 'incentivos_trabajador';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'sueldo_id','incentivo_id','montoDescuento','estado','nombreUsuario'
    ];
    public function sueldo()
    {
        return $this->belongsTo(Sueldo::class,'sueldo_id');
    }
    public function descuento()
    {
        return $this->belongsTo(Incentivo::class,'incentivo_id');
    }
}
