<?php

namespace clinicalatinlab;

use Illuminate\Database\Eloquent\Model;
use clinicalatinlab\Area;
use clinicalatinlab\Solicitud;

class Comprobante extends Model
{
    protected $table      = 'comprobantes';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'solicitud_id','area_id','verificaHc','fechaHsp','condPago','numero','serie','tipo','igv','pagoCon'
        ,'vuelto','neto'
    ];
    public function solicitud()
    {
        return $this->belongsTo(Solicitud::class,'solicitud_id');
    }
    public function area()
    {
        return $this->belongsTo(Area::class,'area_id');
    }
}
