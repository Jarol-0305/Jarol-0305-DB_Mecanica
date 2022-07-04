<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehiculo')->insert([
        'veh_modelo'=>'Minivan',
        'veh_marca'=>'Toyota',
        'veh_color'=>'Rojo',
        'veh_matricula'=>'AAC-0123',
        'veh_fecha'=>'2005-06-20',
        'cli_id'=>'1',
        ]);
        DB::table('vehiculo')->insert([
        'veh_modelo'=>'Pickup',
        'veh_marca'=>'Toyota',
        'veh_color'=>'Plomo',
        'veh_matricula'=>'AAC-059',
        'veh_fecha'=>'2005-04-11',
        'cli_id'=>'2',
        ]);        
    }
}
