<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mecanicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mecanicos', function (Blueprint $table) {
            $table->id('mec_id');
            $table->string('mec_apellido');
            $table->string('name');
            $table->date('mec_fecha_nacimiento');
            $table->string('mec_cedula')->unique();
            $table->string('email')->unique();
            $table->string('mec_direccion');
            $table->string('mec_telefono');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mecanicos');
    }
}
