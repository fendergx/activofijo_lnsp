<?php

use Illuminate\Database\Seeder;

use App\Models\SolicitudAF;

class SolicitudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Para prueba
    	SolicitudAF::create([
    		'fecha_solicitud' => '2020-10-10',
    		'id_estado_sol' => '1',
    		'id_tipo_rep' => '1',
    		'id_estado_sol' => '1',
    		'id_usuario' => '1',
            'id_af' => '1',
    	]);

    }
}
