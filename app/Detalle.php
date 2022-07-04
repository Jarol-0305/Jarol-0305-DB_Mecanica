<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    public $timestamps=false;
    protected $table='factura_detalle';
    protected $primaryKey='fad_id';

    protected $fillable=[
    'fac_id','veh_id','rep_id',
    ];
}
