<?php

use Illuminate\Database\Seeder;

use App\Models\Ubicacion_af;

class UbicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Ubicacion_af::create(['ubicacion_af' => 'Ubicacion 1']);
    	Ubicacion_af::create(['ubicacion_af' => 'Centro de cómputo']);
    	Ubicacion_af::create(['ubicacion_af' => 'Ubicacion 3']);
    	Ubicacion_af::create(['ubicacion_af' => 'Ubicación 4']);
    	Ubicacion_af::create(['ubicacion_af' => 'Ubicación 5']);
    	Ubicacion_af::create(['ubicacion_af' => 'Ubicación 6']);
    	Ubicacion_af::create(['ubicacion_af' => 'Ubicación 7']);
    }
}
