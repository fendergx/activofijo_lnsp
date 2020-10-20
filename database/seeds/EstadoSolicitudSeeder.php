<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class EstadoSolicitudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//usando inserción directa en base de datos
    	DB::table('estado_solicitudes_af')->insert(['estado_sol' => 'Pendiente']);
    	DB::table('estado_solicitudes_af')->insert(['estado_sol' => 'En proceso']);

    }
}
