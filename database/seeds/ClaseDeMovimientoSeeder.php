<?php

use Illuminate\Database\Seeder;
use App\Models\ClaseMovimiento;

class ClaseDeMovimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *php artisan make:seeder AreasSeeder
     * @return void
     */
    public function run()
    {
        ClaseMovimiento::create(['clase_movimiento' => 'Traslado definitivo']);
        ClaseMovimiento::create(['clase_movimiento' => 'Préstamo']);
        ClaseMovimiento::create(['clase_movimiento' => 'Otro']);
    }
}
