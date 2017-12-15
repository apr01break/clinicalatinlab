<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Examen;

class ValorNormal extends Model
{
    protected $table      = 'valores_normales';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'examen_id','minimo','maximo','edad','nombreUsuario'
    ];
    public function examen()
    {
        return $this->belongsTo(Examen::class,'examen_id');
    }
}
