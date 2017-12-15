<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Distrito;
use clinicalatinlab\Departamento;

class Provincia extends Model
{
    protected $table      = 'provincias';
    protected $primaryKey = 'id';
    public $timestamps    = false;
    protected $fillable   = [
        'nombre','departamento_id'
    ];
    public function distritos()
    {
        return $this->hasMany(Distrito::class,'provincia_id');
    }
    public function departamento()
    {
        return $this->belongsTo(Departamento::class,'departamento_id');
    }
}
