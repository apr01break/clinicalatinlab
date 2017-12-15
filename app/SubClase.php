<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Clase;
use clinicalatinlab\Servicio;

class SubClase extends Model
{
    protected $table      = 'sub_clases';
    protected $primaryKey = 'id';
    public $timestamps    = false;
    protected $fillable   = [
        'nombre','clase_id'
    ];
    public function clase()
    {
        return $this->belongsTo(Clase::class,'clase_id');
    }
    public function servicios()
    {
        return $this->hasMany(Servicio::class,'sub_clase_id');
    }
}
