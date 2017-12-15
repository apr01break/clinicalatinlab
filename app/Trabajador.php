<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Usuario;
use clinicalatinlab\Area;
use clinicalatinlab\Sueldo;
use clinicalatinlab\Persona;
use clinicalatinlab\RolTrabajador;
use clinicalatinlab\TipoTrabajador;
use clinicalatinlab\ExamenSolicitud;

class Trabajador extends Model
{
    protected $table      = 'trabajadores';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'persona_id','area_id','usuario_id','tipo_trabajador_id','estado','nombreUsuario'
    ];
    public function tipoTrabajador()
    {
        return $this->belongsTo(TipoTrabajador::class,'tipo_trabajador_id');
    }
    public function usuario()
    {
        return $this->belongsTo(Usuario::class,'usuario_id');
    }
    public function persona()
    {
        return $this->belongsTo(Persona::class,'persona_id');
    }
    public function area()
    {
        return $this->belongsTo(Area::class,'area_id');
    }
    public function rolesTrabajador()
    {
        return $this->hasMany(RolTrabajador::class,'trabajador_id');
    }
    public function sueldos()
    {
        return $this->hasMany(Sueldo::class,'trabajador_id');
    }
    public function examenesSolicitud()
    {
        return $this->hasMany(ExamenSolicitud::class,'trabajador_id');
    }
}
