<?php

use Illuminate\Database\Seeder;

use App\Models\ActivoFijo;



class ActivoFijoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ActivoFijo::create([
        	'codigo_af' => '0001',
        	'nombre_af' => 'Activo 1',
        	'marca_af' => 'Marca',
        	'modelo_af' => 'Modelo',
        	'serie_af' => 'AFFFF01',
        	'fecha_adq_af' => '2020-10-10',
        	'valor_adq_af' => 1000,
        	'valor_actual_af' => 999.99,
        	'descripcion_af' => 'Descripción',
        	'id_ubicacion' => '1',
        	'id_estado' => '1',
        	'id_color' => '1',
        	'id_fuente' => '1',
        	'persona_responsable' => '1',
            'id_coord' => '1',
            'id_area' => '1',
        ]);

        ActivoFijo::create([
        	'codigo_af' => '0002',
        	'nombre_af' => 'Activo 2',
        	'marca_af' => 'Marca',
        	'modelo_af' => 'Modelo',
        	'serie_af' => 'AFFFF02',
        	'fecha_adq_af' => '2020-10-11',
        	'valor_adq_af' => 1000,
        	'valor_actual_af' => 999.99,
        	'descripcion_af' => 'Descripción',
        	'id_ubicacion' => '2',
        	'id_estado' => '2',
        	'id_color' => '2',
        	'id_fuente' => '2',
        	'persona_responsable' => '2',
            'id_coord' => '1',
            'id_area' => '2',
        ]);
    }
}
