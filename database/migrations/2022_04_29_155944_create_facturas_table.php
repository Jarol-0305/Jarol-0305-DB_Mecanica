<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id('fac_id');
            $table->foreignId('cli_id')->references('cli_id')->on('clientes');
            $table->date('fac_fecha');            
            $table->string('fac_tipo_pago');///Trasferencia Efectivo Tarjeta
            $table->integer('fac_estado')->default(1); ///1Activo,0Anulado
            $table->string('fac_observaciones')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura');
    }
}
