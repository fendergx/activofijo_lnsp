<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
/*Ejemplo de implementación con la sentencia DB (no guarda created_at y updated_At*/ 

class CoordinacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coordinaciones')->insert(['nombre_coord' => 'Laboratorio de Alimentos y Toxicología',]);
        DB::table('coordinaciones')->insert(['nombre_coord' => 'Laboratorio de Salud y Medio Ambiente',]);
        DB::table('coordinaciones')->insert(['nombre_coord' => 'Laboratorio de Vigilancia en Salud',]);
    }
}
