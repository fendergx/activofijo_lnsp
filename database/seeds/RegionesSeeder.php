<?php

use Illuminate\Database\Seeder;

use App\Models\Region;

class RegionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Region::create(['region' => 'Occidental']);
    	Region::create(['region' => 'Central']);
    	Region::create(['region' => 'Paracentral']);
    	Region::create(['region' => 'Oriental']);
    }
}
