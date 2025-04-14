<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class EquipmentSeeder extends Seeder
{
    public function run()
    {
        DB::table('equipment')->insert([
            ['name' => 'GPS'],
            ['name' => 'Bluetooth'],
            ['name' => 'Sièges chauffants'],
            ['name' => 'Caméra de recul'],
            ['name' => 'Toit ouvrant'],
        ]);
    }
}
