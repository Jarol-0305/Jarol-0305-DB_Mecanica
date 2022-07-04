<?php

use Illuminate\Database\Seeder;

class MecanicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mecanicos')->insert([
        'mec_apellido'=>'Espin',
        'name'=>'Mika',
        'mec_fecha_nacimiento'=>'2005-03-03',
        'mec_cedula'=>'1705688945',
        'email'=>'mika@vn.com',
        'mec_direccion'=>'Nueva Aurora',
        'mec_telefono'=>'0945785926'
        ]);
        DB::table('mecanicos')->insert([
        'mec_apellido'=>'Samaniego',
        'name'=>'Mario',
        'mec_fecha_nacimiento'=>'2005-03-04',
        'mec_cedula'=>'1704895948',
        'email'=>'mario@vn.com',
        'mec_direccion'=>'Nueva Aurora',
        'mec_telefono'=>'0945687812'
        ]);
    }
}
