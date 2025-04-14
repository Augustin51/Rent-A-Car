<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class VehicleEquipmentSeeder extends Seeder
{
    public function run()
    {
        DB::table('vehicle_equipment')->insert([
            [ 'vehicle_id' => 1, 'equipment_id' => 1 ],
            [ 'vehicle_id' => 1, 'equipment_id' => 2 ],
            [ 'vehicle_id' => 2, 'equipment_id' => 1 ],
            [ 'vehicle_id' => 2, 'equipment_id' => 4 ],
            [ 'vehicle_id' => 3, 'equipment_id' => 2 ],
            [ 'vehicle_id' => 3, 'equipment_id' => 3 ],
            [ 'vehicle_id' => 4, 'equipment_id' => 1 ],
            [ 'vehicle_id' => 4, 'equipment_id' => 5 ],
            [ 'vehicle_id' => 5, 'equipment_id' => 3 ],
            [ 'vehicle_id' => 5, 'equipment_id' => 4 ],
            [ 'vehicle_id' => 6, 'equipment_id' => 1 ],
            [ 'vehicle_id' => 6, 'equipment_id' => 5 ],
            [ 'vehicle_id' => 7, 'equipment_id' => 2 ],
            [ 'vehicle_id' => 7, 'equipment_id' => 3 ],
            [ 'vehicle_id' => 8, 'equipment_id' => 1 ],
            [ 'vehicle_id' => 8, 'equipment_id' => 4 ],
            [ 'vehicle_id' => 8, 'equipment_id' => 5 ],
            [ 'vehicle_id' => 9, 'equipment_id' => 1 ],
            [ 'vehicle_id' => 9, 'equipment_id' => 2 ],
            [ 'vehicle_id' => 9, 'equipment_id' => 3 ],
        ]);
    }
}
