<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\RazonFinanciera;

class Balance extends Model
{
    protected $table      = 'balances';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'razon_financiera_id','monto','observacion','nombreUsuario'
    ];
    public function razonFinanciera()
    {
        return $this->belongsTo(RazonFinanciera::class,'razon_financiera_id');
    }
}
