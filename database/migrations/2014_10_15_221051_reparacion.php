<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reparacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reparacion', function (Blueprint $table) {
            $table->id('rep_id');
            $table->datetime('rep_fecha'); 
            $table->string('rep_descripcion');
            $table->float('rep_costo');
            $table->foreignId('veh_id')->references('veh_id')->on('vehiculo');
            $table->foreignId('mec_id')->references('mec_id')->on('mecanicos');
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
