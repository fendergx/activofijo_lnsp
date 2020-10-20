<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        //llamadas en orden
        $this->call(CoordinacionesSeeder::class);
        $this->call(AreasSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(UsuariosSeeder::class);


        //seeders fijos
        $this->call(RegionesSeeder::class);
        $this->call(DepartamentoSeeder::class);

        
        //seeders temporales
        $this->call(EstadoAfSeeder::class);
        $this->call(FuenteAfSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(FirmaExtSeeder::class);
        $this->call(UbicacionSeeder::class);
        $this->call(TipoReporteSeeder::class);
        $this->call(EstadoSolicitudSeeder::class);

        $this->call(ClienteSeeder::class);
        $this->call(PersonaResponsableSeeder::class);
        $this->call(ReactivoSeeder::class);
        
        $this->call(ActivoFijoSeeder::class);
        $this->call(SolicitudSeeder::class);

    }
}
