<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Solicitud;

class Medico extends Model
{
    protected $table      = 'medicos';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'nombre','estado','nombreUsuario'
    ];
    public function solicitudes()
    {
        return $this->belongsTo(Solicitud::class,'medico_id');
    }
}
