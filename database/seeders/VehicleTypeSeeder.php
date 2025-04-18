<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class VehicleTypeSeeder extends Seeder
{
    public function run()
    {
        DB::table('vehicle_type')->insert([
            ['name' => 'sedan'],
            ['name' => 'minivan'],
            ['name' => 'suv'],
            ['name' => 'crossover'],
            ['name' => 'pickup'],
            ['name' => 'convertible'],
        ]);
    }
}
