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
            ['email' => 'ethan@example.com', 'vehicle_id' => 3, 'start_date' => '2025-05-03', 'end_date' => '2025-05-06', 'total_price' => 240.00],
            ['email' => 'fay@example.com', 'vehicle_id' => 3, 'start_date' => '2025-06-10', 'end_date' => '2025-06-12', 'total_price' => 160.00],
            ['email' => 'george@example.com', 'vehicle_id' => 4, 'start_date' => '2025-04-22', 'end_date' => '2025-04-24', 'total_price' => 110.00],
            ['email' => 'hannah@example.com', 'vehicle_id' => 4, 'start_date' => '2025-05-12', 'end_date' => '2025-05-14', 'total_price' => 110.00],
            ['email' => 'ian@example.com', 'vehicle_id' => 5, 'start_date' => '2025-04-28', 'end_date' => '2025-05-02', 'total_price' => 300.00],
            ['email' => 'julia@example.com', 'vehicle_id' => 5, 'start_date' => '2025-06-03', 'end_date' => '2025-06-07', 'total_price' => 300.00],
            ['email' => 'karl@example.com', 'vehicle_id' => 6, 'start_date' => '2025-05-15', 'end_date' => '2025-05-17', 'total_price' => 190.00],
            ['email' => 'lara@example.com', 'vehicle_id' => 6, 'start_date' => '2025-06-01', 'end_date' => '2025-06-04', 'total_price' => 285.00],
            ['email' => 'matt@example.com', 'vehicle_id' => 7, 'start_date' => '2025-04-18', 'end_date' => '2025-04-21', 'total_price' => 150.00],
            ['email' => 'nina@example.com', 'vehicle_id' => 7, 'start_date' => '2025-05-22', 'end_date' => '2025-05-25', 'total_price' => 150.00],
            ['email' => 'oliver@example.com', 'vehicle_id' => 8, 'start_date' => '2025-04-27', 'end_date' => '2025-04-30', 'total_price' => 270.00],
            ['email' => 'penny@example.com', 'vehicle_id' => 8, 'start_date' => '2025-05-15', 'end_date' => '2025-05-18', 'total_price' => 270.00],
            ['email' => 'quentin@example.com', 'vehicle_id' => 9, 'start_date' => '2025-04-15', 'end_date' => '2025-04-18', 'total_price' => 210.00],
            ['email' => 'rita@example.com', 'vehicle_id' => 9, 'start_date' => '2025-05-20', 'end_date' => '2025-05-23', 'total_price' => 210.00],
        ]);
    }
}
