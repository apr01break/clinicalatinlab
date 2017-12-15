<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Provincia;

class Departamento extends Model
{
    protected $table      = 'departamentos';
    protected $primaryKey = 'id';
    public $timestamps    = false;
    protected $fillable   = [
        'nombre'
    ];
    public function provincias()
    {
        return $this->hasMany(Provincia::class,'departamento_id');
    }
}
