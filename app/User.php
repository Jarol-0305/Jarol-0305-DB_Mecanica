<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table="users";
    protected $primaryKey="usu_id";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
        'usu_usuario','usu_apellido','name','usu_fecha_nacimiento','usu_cedula','usu_direccion','usu_telefono', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
