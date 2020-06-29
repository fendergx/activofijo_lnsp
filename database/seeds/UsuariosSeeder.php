<?php

use Illuminate\Database\Seeder;
use App\User;
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
        User::create(['nombre_usuario' => 'karen.penate',
        	'password' => Hash::make('karen'),
        	'nombres' => 'Karen Elvira',
        	'apellidos' => 'Peñate Avil',
        	'id_rol' => '1',
        	'id_coord' => null,
        	'id_area' => null,
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
        	'id_rol' => '6',
        	'id_coord' => '1',
        	'id_area' => '1',
        ]);
    }
}
