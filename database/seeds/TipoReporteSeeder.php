<?php

use Illuminate\Database\Seeder;

use App\Models\TipoReporte;

class TipoReporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoReporte::create(['nombre_tipo_rep' => 'Movimiento A','puede_sol'=>'1']);
        TipoReporte::create(['nombre_tipo_rep' => 'Movimiento B','puede_sol'=>'1']);
        TipoReporte::create(['nombre_tipo_rep' => 'Movimiento C','puede_sol'=>'1']);
        TipoReporte::create(['nombre_tipo_rep' => 'Movimiento D','puede_sol'=>'1']);
        TipoReporte::create(['nombre_tipo_rep' => 'Orden de salida']);
        TipoReporte::create(['nombre_tipo_rep' => 'Entrega de equipo']);
    }
}
