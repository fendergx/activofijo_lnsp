<?php

use Illuminate\Database\Seeder;

use App\Models\Reactivo;

class ReactivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reactivo::create([
        	'nombre_reactivo' => 'Reactivo 1',
        	'precio_reactivo' => 0.50,
        	'presentacion' => 'Frasco',
        	'unidad_base' => 500,
        	'unidad_medida' => 'ml',
        ]);
        Reactivo::create([
        	'nombre_reactivo' => 'Reactivo 2',
        	'precio_reactivo' => 0.50,
        	'presentacion' => 'Líquido',
        	'unidad_base' => 500,
        	'unidad_medida' => 'ml',
        ]);
        Reactivo::create([
        	'nombre_reactivo' => 'Reactivo 3',
        	'precio_reactivo' => 0.50,
        	'presentacion' => 'Ampolleta',
        	'unidad_base' => 500,
        	'unidad_medida' => 'ml',
        ]);
        Reactivo::create([
        	'nombre_reactivo' => 'Reactivo 4',
        	'precio_reactivo' => 1,
        	'presentacion' => 'Frasco',
        	'unidad_base' => 500,
        	'unidad_medida' => 'ml',
        ]);
        Reactivo::create([
        	'nombre_reactivo' => 'Reactivo 5',
        	'precio_reactivo' => 1.25,
        	'presentacion' => 'Frasco',
        	'unidad_base' => 700,
        	'unidad_medida' => 'g',
        ]);

    }
}
