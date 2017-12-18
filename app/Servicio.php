<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Cpt;
use clinicalatinlab\Area;
use clinicalatinlab\Tarifa;
use clinicalatinlab\SubClase;
use clinicalatinlab\TipoAydDiag;
use clinicalatinlab\UnidadMedida;
use clinicalatinlab\Examen;

class Servicio extends Model
{
    protected $table      = 'servicios';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'descripcion','breveTarifa','sub_clase_id','unidad_medida_id','area_id','importeBase','veterinaria'
        ,'categSocial','categTemporal','tarifaLibre','estadoAtencion','igv','tipo_ayd_diag_id','cpt_id'
        ,'observacion','precioCalculadoParticular','precioCalculadoConvenio'
        ,'precioExcepcionParticular','precioExcepcionConvenio','tarifaParticular','tarifaConvenio'
        ,'observacionParticular','observacionConvenio','estado','nombreUsuario'
    ];
    public function subclase()
    {
        return $this->belongsTo(SubClase::class,'sub_clase_id');
    }
    public function area()
    {
        return $this->belongsTo(Area::class,'area_id');
    }
    public function tipoAydDiag()
    {
        return $this->belongsTo(TipoAydDiag::class,'tipo_ayd_diag_id');
    }
    public function cpt()
    {
        return $this->belongsTo(Cpt::class,'cpt_id');
    }
    public function unidadMedida()
    {
        return $this->belongsTo(UnidadMedida::class,'unidad_medida_id');
    }
    public function examen()
    {
        return $this->hasOne(Examen::class,'servicio_id');
    }
}
