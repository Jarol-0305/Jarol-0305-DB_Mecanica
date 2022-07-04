<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reparacion extends Model
{
    public $timestamps=false;
    protected $table="reparacion";
    protected $primaryKey="rep_id";
    protected $fillable = ['rep_descripcion','rep_fecha','rep_costo','veh_id','mec_id'];
}
