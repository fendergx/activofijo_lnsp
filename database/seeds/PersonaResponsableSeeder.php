<?php

use Illuminate\Database\Seeder;

use App\Models\Persona_reponsable;

class PersonaResponsableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Persona_reponsable::create([
        	'nombre_persona' => 'Dany','apellido_persona' => 'Blanco',
        	'dui' => '12345678-9','id_cliente' => '1',
        ]);

        Persona_reponsable::create([
        	'nombre_persona' => 'Tulio','apellido_persona' => 'Triviño',
        	'dui' => '64978512-9','id_cliente' => '1',
        ]);

        Persona_reponsable::create([
        	'nombre_persona' => 'Carlos','apellido_persona' => 'Marvel',
        	'dui' => '64978512-1','id_cliente' => '1',
        ]);

        Persona_reponsable::create([
        	'nombre_persona' => 'Juan Carlos','apellido_persona' => 'Bodoque',
        	'dui' => '64978512-8','id_cliente' => '1',
        ]);
    }
}
