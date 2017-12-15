<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Trabajador;
use clinicalatinlab\RazonFinanciera;
use clinicalatinlab\DescuentoTrabajador;
use clinicalatinlab\IncentivoTrabajador;

class Sueldo extends Model
{
    protected $table      = 'solicitudes';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'trabajador_id','razon_financiera_id','montoBase','cantidadServicios','montoTotalPorServicios'
        ,'estadoDePago','fecha','nombreUsuario'
    ];
    public function trabajador()
    {
        return $this->belongsTo(Trabajador::class,'trabajador_id');
    }
    public function razonFinanciera()
    {
        return $this->belongsTo(RazonFinanciera::class,'razon_financiera_id');
    }
    public function descuentosTrabajador()
    {
        return $this->hasMany(DescuentoTrabajador::class,'sueldo_id');
    }
    public function incentivosTrabajador()
    {
        return $this->hasMany(IncentivoTrabajador::class,'sueldo_id');
    }
}
