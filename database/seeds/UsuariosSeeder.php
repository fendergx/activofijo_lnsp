<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Http\Controllers\EncryptAES;

//para hash del password
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	User::create(['nombre_usuario' => 'admin',
    		'password' => Hash::make('admin'),
    		'nombres' => 'Administrador de ',
    		'apellidos' => 'Sistema',
    		'id_rol' => '1',
    	]);

    	User::create(['nombre_usuario' => 'admin.activo',
    		'password' => Hash::make('admin'),
    		'nombres' => 'Administrador',
    		'apellidos' => 'AF',
    		'id_rol' => '2',
    	]);

    	User::create(['nombre_usuario' => 'admin.preparaduria',
    		'password' => Hash::make('admin'),
    		'nombres' => 'Administrador',
    		'apellidos' => 'Preparaduría',
    		'id_rol' => '3',
    	]);

    	User::create(['nombre_usuario' => 'coordinador',
    		'password' => Hash::make('admin'),
    		'nombres' => 'Jefe de',
    		'apellidos' => 'Coordinación',
    		'id_rol' => '4',
    		'id_coord' => '1',
    	]);

    	User::create(['nombre_usuario' => 'jefe.area',
    		'password' => Hash::make('admin'),
    		'nombres' => 'Jefe de',
    		'apellidos' => 'Area',
    		'id_rol' => '5',
    		'id_coord' => '1',
    		'id_area' => '1',
    	]);

    	User::create(['nombre_usuario' => 'usuario',
    		'password' => Hash::make('admin'),
    		'nombres' => 'usuario',
    		'apellidos' => 'AF',
    		'id_rol' => '6',
    		'id_coord' => '1',
    		'id_area' => '1',
    	]);

    	User::create(['nombre_usuario' => 'karen.penate',
    		'password' => Hash::make('karen'),
    		'nombres' => 'Karen Elvira',
    		'apellidos' => 'Peñate Aviles',
    		'id_rol' => '1',

    	]);

    	User::create(['nombre_usuario' => 'fernando.aguilar',
    		'password' => Hash::make('jose.com'),
    		'nombres' => 'José Fernando',
    		'apellidos' => 'Aguilar Rodríguez',
    		'id_rol' => '1',

    	]);

    	User::create(['nombre_usuario' => 'martell.xiomara',
    		'password' => Hash::make('martell.xiomara'),
    		'nombres' => 'Xiomara Cecilia',
    		'apellidos' => 'Martell',
    		'id_rol' => '2',
    	]);

    	User::create(['nombre_usuario' => 'omar.orellana',
    		'password' => Hash::make('omar'),
    		'nombres' => 'Omar Enrique',
    		'apellidos' => 'Cruz Orellana',
    		'id_rol' => '2',
    	]);

    	User::create(['nombre_usuario' => 'javier.menendez',
    		'password' => Hash::make('javier'),
    		'nombres' => 'Javier',
    		'apellidos' => 'Menendez',
    		'id_rol' => '3',
    	]);

    	User::create(['nombre_usuario' => 'david.jimenez',
    		'password' => Hash::make('david'),
    		'nombres' => 'José David',
    		'apellidos' => 'Jiménez',
    		'id_rol' => '4',
    		'id_coord' => '1',
    	]);

    	User::create([
    		'nombre_usuario' => 'manuel.chacon',
    		'password' => Hash::make('manuel'),
    		'nombres' => 'José Manuel',
    		'apellidos' => 'Chacón',
    		'id_rol' => '5',
    		'id_coord' => '1',
    		'id_area' => '1',
    	]);


    	User::create(['nombre_usuario' => 'francisco.gomez',
    		'password' => Hash::make('francisco'),
    		'nombres' => 'Francisco',
    		'apellidos' => 'Gómez',
    		'cargo' => 'tester',
    		'id_rol' => '6',
    		'id_coord' => '1',
    		'id_area' => '1',
    	]);
    }
}
