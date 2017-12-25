<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\UnidadMedida;

class Producto extends Model
{
    protected $table      = 'productos';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'nombre','codigo','descripcion','unidad_medida_id','fechaProduccion','fechaVencimiento'
        ,'fechaInicio','fechaFin','estado','nombreUsuario'
    ];
    public function unidadMedida()
    {
        return $this->belongsTo(UnidadMedida::class,'unidad_medida_id');
    }
}
