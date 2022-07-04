<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersSeeder::class);
         $this->call(ClientesSeeder::class);
         $this->call(MecanicosSeeder::class);
         $this->call(VehiculoSeeder::class);
         $this->call(ReparacionSeeder::class);
    }
}
