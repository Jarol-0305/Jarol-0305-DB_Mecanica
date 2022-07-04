<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('usu_id');
            $table->string('usu_usuario');
            $table->string('usu_apellido');
            $table->string('name');
            $table->date('usu_fecha_nacimiento');
            $table->string('usu_cedula')->unique();
            $table->string('email')->unique();
            $table->string('usu_direccion');
            $table->string('usu_telefono');
            $table->string('password');
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
