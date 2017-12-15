<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Muestra;
use clinicalatinlab\Servicio;

class MuestraServicio extends Model
{
    protected $table      = 'muestras_servicios';
    protected $primaryKey = 'id';
    public $timestamps    = false;
    protected $fillable   = [
        'servicio_id','muestra_id'
    ];
    public function servicio()
    {
        return $this->belongsTo(Servicio::class,'servicio_id');
    }
    public function muestra()
    {
        return $this->belongsTo(Muestra::class,'muestra_id');
    }
}
