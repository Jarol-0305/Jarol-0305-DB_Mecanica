<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_detalle', function (Blueprint $table) {
            $table->id('fad_id');
            $table->foreignId('fac_id')->references('fac_id')->on('facturas');
            $table->foreignId('veh_id')->references('veh_id')->on('vehiculo');
            $table->foreignId('rep_id')->references('rep_id')->on('reparacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura_detalle');
    }
}
