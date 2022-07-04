<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
        'cli_apellido'=>'Lara',
        'cli_nombre'=>'Washington',
        'email'=>'washo@vn.com',
        'cli_cedula'=>'1702659848',
        'cli_telefono'=>'0956487956',
        'cli_direccion'=>'Nueva Aurora',
        ]);
        DB::table('clientes')->insert([
        'cli_apellido'=>'Lopez',
        'cli_nombre'=>'Brandon',
        'email'=>'brandon@vn.com',
        'cli_cedula'=>'1702987845',
        'cli_telefono'=>'0956487265',
        'cli_direccion'=>'Nueva Aurora',
        ]);
    }
}
