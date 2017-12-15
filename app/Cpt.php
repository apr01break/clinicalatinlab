<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Servicio;

class Cpt extends Model
{
    protected $table      = 'cpts';
    protected $primaryKey = 'id';
    public $timestamps    = false;
    protected $fillable   = [
        'descripcion'
    ];
    public function servicios()
    {
        return $this->hasMany(Servicio::class,'cpt_id');
    }
}
