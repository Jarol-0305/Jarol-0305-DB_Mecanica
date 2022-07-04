<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('cli_id');
            $table->string('cli_apellido');
            $table->string('cli_nombre');
            $table->string('email')->unique();
            $table->string('cli_cedula')->unique();
            $table->string('cli_telefono');
            $table->string('cli_direccion');
            $table->integer('cli_estado')->default(1); //1Activo,0Anulado
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
