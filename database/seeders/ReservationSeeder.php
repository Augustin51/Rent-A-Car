<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ReservationSeeder extends Seeder
{
    public function run()
    {
        DB::table('reservation')->insert([
            ['email' => 'alice@example.com', 'vehicle_id' => 1, 'start_date' => '2025-04-20', 'end_date' => '2025-04-23', 'total_price' => 120.00],
            ['email' => 'bob@example.com', 'vehicle_id' => 1, 'start_date' => '2025-05-10', 'end_date' => '2025-05-13', 'total_price' => 120.00],
            ['email' => 'charlie@example.com', 'vehicle_id' => 2, 'start_date' => '2025-04-25', 'end_date' => '2025-04-30', 'total_price' => 325.00],
            ['email' => 'diane@example.com', 'vehicle_id' => 2, 'start_date' => '2025-06-01', 'end_date' => '2025-06-05', 'total_price' => 260.00],
            // Ajoute le reste des réservations ici...
        ]);
    }
}
