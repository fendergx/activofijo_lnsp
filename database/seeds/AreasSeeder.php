<?php

use Illuminate\Database\Seeder;
use App\Models\Area;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *php artisan make:seeder AreasSeeder
     * @return void
     */
    public function run()
    {
        Area::create(['nombre_area' => 'Gestión de la Calidad','id_coord' => '1']);
        Area::create(['nombre_area' => 'Microbiología de alimentos','id_coord' => '1']);
        Area::create(['nombre_area' => 'Cromatografica','id_coord' => '1']);
        Area::create(['nombre_area' => 'Fisicoquímico de aguas','id_coord' => '1']);
        Area::create(['nombre_area' => 'Metales','id_coord' => '1']);
        Area::create(['nombre_area' => 'Gestión de la Calidad','id_coord' => '2']);
        Area::create(['nombre_area' => 'Gestión de la Calidad','id_coord' => '3']);
        Area::create(['nombre_area' => 'Malaria - Leishmania','id_coord' => '3']);
        Area::create(['nombre_area' => 'Preparaduría y Bioquímica','id_coord' => '3']);
        Area::create(['nombre_area' => 'Recepción de muestras','id_coord' => '3']);
        Area::create(['nombre_area' => 'Serología de sífilis','id_coord' => '3']);
        Area::create(['nombre_area' => 'Bacteriología','id_coord' => '3']);
        Area::create(['nombre_area' => 'Virología y Biología molecular','id_coord' => '3']);
        Area::create(['nombre_area' => 'VIH','id_coord' => '3']);
        Area::create(['nombre_area' => 'Tuberculosis','id_coord' => '3']);

    }
}
