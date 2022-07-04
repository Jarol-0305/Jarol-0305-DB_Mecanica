<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'usu_usuario'=>'Jstiv',
        'usu_apellido'=>'Ordoñez',
        'name'=>'Jarol',
        'usu_fecha_nacimiento'=>'2005-03-03',
        'usu_cedula'=>'2200090369',
        'email'=>'jarol005.03@gmail.com',
        'usu_direccion'=>'Entrada al beaterio',
        'usu_telefono'=>'0962574739',
        'password'=>bcrypt('12345678'),
        'created_at'=>date('Y-m-d H:i')
        ]);
    }
}