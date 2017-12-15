<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Servicio;

class TipoAydDiag extends Model
{
    protected $table      = 'tipo_ayd_diags';
    protected $primaryKey = 'id';
    public $timestamps    = false;
    protected $fillable   = [
        'nombre'
    ];
    public function servicios()
    {
        return $this->hasMany(Servicio::class,'tipo_ayd_diag_id');
    }
}
