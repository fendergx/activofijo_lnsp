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
        // $this->call(UserSeeder::class);
        //llamadas en orden
        $this->call(CoordinacionesSeeder::class);
        $this->call(AreasSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(UsuariosSeeder::class);
    }
}
