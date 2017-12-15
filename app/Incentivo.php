<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\IncentivoTrabajador;

class Incentivo extends Model
{
    protected $table      = 'incentivos';
    protected $primaryKey = 'id';
    public $timestamps    = false;
    protected $fillable   = [
        'nombre','estado'
    ];
    public function incentivosTrabajador()
    {
        return $this->hasMany(IncentivoTrabajador::class,'incentivo_id');
    }
}
