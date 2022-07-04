<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    public $timestamps=false;
    protected $table="vehiculo";
    protected $primaryKey="veh_id";
    protected $fillable=['veh_modelo','veh_marca','veh_color','veh_matricula','veh_fecha','cli_id'];
}
