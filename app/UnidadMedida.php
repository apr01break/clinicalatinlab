<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Servicio;
use clinicalatinlab\Producto;

class UnidadMedida extends Model
{
    protected $table      = 'unidades_medida';
    protected $primaryKey = 'id';
    public $timestamps    = false;
    protected $fillable   = [
        'codigo','descripcion'
    ];
    public function servicios()
    {
        return $this->hasMany(Servicio::class,'unidad_medida_id');
    }
    public function productos()
    {
        return $this->hasMany(Producto::class,'unidad_medida_id');
    }
}
