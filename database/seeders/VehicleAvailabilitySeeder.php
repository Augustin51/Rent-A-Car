<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class VehicleAvailabilitySeeder extends Seeder
{
    public function run()
    {
        DB::table('vehicle_availability')->insert([
            // Disponibilités pour les véhicules
            ['vehicle_id' => 1, 'start_date' => '2025-04-01', 'end_date' => '2025-04-10', 'is_available' => true],
            ['vehicle_id' => 1, 'start_date' => '2025-04-20', 'end_date' => '2025-04-23', 'is_available' => true],
            ['vehicle_id' => 2, 'start_date' => '2025-04-25', 'end_date' => '2025-04-30', 'is_available' => true],
            ['vehicle_id' => 2, 'start_date' => '2025-06-01', 'end_date' => '2025-06-05', 'is_available' => true],
            ['vehicle_id' => 3, 'start_date' => '2025-05-03', 'end_date' => '2025-05-06', 'is_available' => true],
            ['vehicle_id' => 3, 'start_date' => '2025-06-10', 'end_date' => '2025-06-12', 'is_available' => true],
            ['vehicle_id' => 4, 'start_date' => '2025-04-22', 'end_date' => '2025-04-24', 'is_available' => true],
            ['vehicle_id' => 4, 'start_date' => '2025-05-12', 'end_date' => '2025-05-14', 'is_available' => true],
            ['vehicle_id' => 5, 'start_date' => '2025-04-28', 'end_date' => '2025-05-02', 'is_available' => true],
            ['vehicle_id' => 5, 'start_date' => '2025-06-03', 'end_date' => '2025-06-07', 'is_available' => true],
            ['vehicle_id' => 6, 'start_date' => '2025-05-15', 'end_date' => '2025-05-17', 'is_available' => true],
            ['vehicle_id' => 6, 'start_date' => '2025-06-01', 'end_date' => '2025-06-04', 'is_available' => true],
            ['vehicle_id' => 7, 'start_date' => '2025-04-18', 'end_date' => '2025-04-21', 'is_available' => true],
            ['vehicle_id' => 7, 'start_date' => '2025-05-22', 'end_date' => '2025-05-25', 'is_available' => true],
            ['vehicle_id' => 8, 'start_date' => '2025-04-27', 'end_date' => '2025-04-30', 'is_available' => true],
            ['vehicle_id' => 8, 'start_date' => '2025-05-15', 'end_date' => '2025-05-18', 'is_available' => true],
            ['vehicle_id' => 9, 'start_date' => '2025-04-15', 'end_date' => '2025-04-18', 'is_available' => true],
            ['vehicle_id' => 9, 'start_date' => '2025-05-20', 'end_date' => '2025-05-23', 'is_available' => true],
        ]);
    }
}
