<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        DB::statement('SET foreign_key_checks = 0;');

        $this->call([
            VehicleSeeder::class,
            VehicleTypeSeeder::class,
            EquipmentSeeder::class,
            VehiclePhotoSeeder::class,
            VehicleEquipmentSeeder::class,
            ReservationSeeder::class,
        ]);

        DB::statement('SET foreign_key_checks = 1;');
    }

}
