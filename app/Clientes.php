<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    public $timestamps=false;
    protected $table="clientes";
    protected $primaryKey="cli_id";
    protected $fillable=['cli_apellido','cli_nombre','cli_estado','cli_nombre','email','cli_cedula','cli_telefono','cli_direccion'];
}
