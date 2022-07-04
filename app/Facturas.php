<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturas extends Model
{
    public $timestamps=false;
    protected $table='facturas';
    protected $primaryKey='fac_id';
    protected $fillable = [
    'fac_id','fac_fecha','fac_estado','fac_observaciones','fac_tipo_pago','cli_id',
    ];
}