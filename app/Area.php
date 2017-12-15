<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Servicio;
use clinicalatinlab\Trabajador;
use clinicalatinlab\Comprobante;

class Area extends Model
{
    protected $table      = 'areas';
    protected $primaryKey = 'id';
    public $timestamps    = false;
    protected $fillable   = [
        'descripcion','breve','tipoServicio','estado'
    ];
    public function servicios()
    {
        return $this->hasMany(Servicio::class,'area_id');
    }
    public function trabajadores()
    {
        return $this->hasMany(Trabajador::class,'area_id');
    }
    public function comprobantes()
    {
        return $this->hasMany(Comprobante::class,'area_id');
    }
}
