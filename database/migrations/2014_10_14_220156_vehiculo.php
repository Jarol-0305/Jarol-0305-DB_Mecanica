<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vehiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculo', function (Blueprint $table) {
            $table->id('veh_id');
            $table->string('veh_modelo');
            $table->string('veh_marca');
            $table->string('veh_color');
            $table->string('veh_matricula')->unique();
            $table->datetime('veh_fecha');
            $table->foreignId('cli_id')->references('cli_id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculo');
    }
}
