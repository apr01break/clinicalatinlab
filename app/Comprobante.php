<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Area;
use clinicalatinlab\ExamenSolicitud;

class Comprobante extends Model
{
    protected $table      = 'comprobantes';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'area_id','verificaHc','fechaHsp','condPago','numero','serie','tipo','igv','pagoCon'
        ,'vuelto','neto'
    ];
    public function area()
    {
        return $this->belongsTo(Area::class,'area_id');
    }
    public function examenesSolicitud()
    {
        return $this->hasMany(ExamenSolicitud::class,'comprobante_id');
    }
}
