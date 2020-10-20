<?php

use Illuminate\Database\Seeder;

use App\Models\Fuente_activo;

class FuenteAfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Fuente_activo::create(['nombre_fuente' => 'MINSAL']);
    	Fuente_activo::create(['nombre_fuente' => 'USAID']);
    	Fuente_activo::create(['nombre_fuente' => 'Entidad 3']);
    	Fuente_activo::create(['nombre_fuente' => 'Entidad 4']);
    	Fuente_activo::create(['nombre_fuente' => 'Entidad 5']);
    	Fuente_activo::create(['nombre_fuente' => 'Entidad 6']);
    }
}
