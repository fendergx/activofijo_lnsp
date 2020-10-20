<?php

use Illuminate\Database\Seeder;

use App\Models\FirmasExt;

class FirmaExtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	FirmasExt::create(['cargo_firm' => 'Cargo','titulo_firm'=>'Dr.',
            'nombre_firm_p'=>'Juan Carlos','apellido_firm_p'=>'Villalta'
        ]);
    	FirmasExt::create(['cargo_firm' => 'Cargo nuevo','titulo_firm'=>'Msc.',
            'nombre_firm_p'=>'Karla','apellido_firm_p'=>'González'
        ]);
    }
}
