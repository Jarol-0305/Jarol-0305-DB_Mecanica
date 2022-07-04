<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mecanicos extends Model
{
    public $timestamps=false;
    protected $table="mecanicos";
    protected $primaryKey="mec_id";
    protected $fillable = ['mec_apellido','name','mec_fecha_nacimiento','mec_cedula','email','mec_direccion','mec_telefono'];
}
