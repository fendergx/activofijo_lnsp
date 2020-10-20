<?php

use Illuminate\Database\Seeder;

use App\Models\Estado_af;

class EstadoAfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Estado_af::create(['estado_af' => 'Bueno']);
    	Estado_af::create(['estado_af' => 'Defectuoso']);
    	Estado_af::create(['estado_af' => 'Malo']);
    }
}
