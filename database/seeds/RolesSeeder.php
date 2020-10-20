<?php

use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create(['nombre_rol' => 'Administrador Informático',]);
        Rol::create(['nombre_rol' => 'Encargado de Activo Fijo',]);
        Rol::create(['nombre_rol' => 'Encargado de Preparaduría',]);
        Rol::create(['nombre_rol' => 'Jefe de Laboratorio',]);
        Rol::create(['nombre_rol' => 'Jefe de Área',]);
        Rol::create(['nombre_rol' => 'Usuario',]);
    }
}
