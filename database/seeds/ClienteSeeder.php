<?php

use Illuminate\Database\Seeder;

use App\Models\Cliente_preparaduria;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente_preparaduria::create(['nombre_cliente' => 'Cliente de prueba 1','id_dep' => '1']);
        Cliente_preparaduria::create(['nombre_cliente' => 'Cliente de prueba 2','id_dep' => '2']);
        Cliente_preparaduria::create(['nombre_cliente' => 'Cliente de prueba 3','id_dep' => '3']);
        Cliente_preparaduria::create(['nombre_cliente' => 'Cliente de prueba 4','id_dep' => '4']);
        Cliente_preparaduria::create(['nombre_cliente' => 'Cliente de prueba 5','id_dep' => '5']);
        Cliente_preparaduria::create(['nombre_cliente' => 'Cliente de prueba 6','id_dep' => '6']);
        Cliente_preparaduria::create(['nombre_cliente' => 'Cliente de prueba 7','id_dep' => '7']);
        Cliente_preparaduria::create(['nombre_cliente' => 'Cliente de prueba 8','id_dep' => '8']);
        Cliente_preparaduria::create(['nombre_cliente' => 'Cliente de prueba 9','id_dep' => '9']);
        Cliente_preparaduria::create(['nombre_cliente' => 'Cliente de prueba 10','id_dep' => '10']);
        Cliente_preparaduria::create(['nombre_cliente' => 'Cliente de prueba 11','id_dep' => '11']);
        Cliente_preparaduria::create(['nombre_cliente' => 'Cliente de prueba 12','id_dep' => '12']);
        Cliente_preparaduria::create(['nombre_cliente' => 'Cliente de prueba 13','id_dep' => '13']);
        Cliente_preparaduria::create(['nombre_cliente' => 'Cliente de prueba 14','id_dep' => '14']);
    }
}
