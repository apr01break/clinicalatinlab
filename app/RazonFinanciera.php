<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Sueldo;
use clinicalatinlab\Balance;

class RazonFinanciera extends Model
{
    protected $table      = 'razones_financieras';
    protected $primaryKey = 'id';
    public $timestamps    = false;
    protected $fillable   = [
        'nombre','tipo'
    ];
    public function sueldos()
    {
        return $this->hasMany(Sueldo::class,'razon_financiera_id');
    }
    public function balances()
    {
        return $this->hasMany(Balance::class,'razon_financiera_id');
    }
}
