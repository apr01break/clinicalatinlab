<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\DescuentoTrabajador;

class Descuento extends Model
{
    protected $table      = 'descuentos';
    protected $primaryKey = 'id';
    public $timestamps    = false;
    protected $fillable   = [
        'nombre','estado'
    ];
    public function descuentosTrabajador()
    {
        return $this->hasMany(DescuentoTrabajador::class,'descuento_id');
    }
}
