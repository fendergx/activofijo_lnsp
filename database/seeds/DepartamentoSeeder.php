<?php

use Illuminate\Database\Seeder;

use App\Models\Departamento;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departamento::create(['nombre_dep' => 'Ahuachapán','id_region' => '1']);
        Departamento::create(['nombre_dep' => 'Cabañas','id_region' => '3']);
        Departamento::create(['nombre_dep' => 'Chalatenango','id_region' => '2']);
        Departamento::create(['nombre_dep' => 'Cuscatlán','id_region' => '2']);
        Departamento::create(['nombre_dep' => 'La Libertad','id_region' => '2']);
        Departamento::create(['nombre_dep' => 'La Paz','id_region' => '3']);
        Departamento::create(['nombre_dep' => 'La Unión','id_region' => '4']);
        Departamento::create(['nombre_dep' => 'Morazán','id_region' => '4']);
        Departamento::create(['nombre_dep' => 'San Miguel','id_region' => '4']);
        Departamento::create(['nombre_dep' => 'San Salvador','id_region' => '2']);
        Departamento::create(['nombre_dep' => 'San Vicente','id_region' => '3']);
        Departamento::create(['nombre_dep' => 'Santa Ana','id_region' => '1']);
        Departamento::create(['nombre_dep' => 'Sonsonate','id_region' => '1']);
        Departamento::create(['nombre_dep' => 'Usulután','id_region' => '4']);

    }
}
