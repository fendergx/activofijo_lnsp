<?php

use Illuminate\Database\Seeder;

use App\Models\Color_af;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color_af::create(['color_af' => 'Blanco']);
        Color_af::create(['color_af' => 'Gris']);
        Color_af::create(['color_af' => 'Negro']);
        Color_af::create(['color_af' => 'Azul']);
        Color_af::create(['color_af' => 'Rojo']);
        Color_af::create(['color_af' => 'Morado']);
        Color_af::create(['color_af' => 'Amarillo']);
    }
}
