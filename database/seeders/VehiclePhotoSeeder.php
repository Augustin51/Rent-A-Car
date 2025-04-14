<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class VehiclePhotoSeeder extends Seeder
{
    public function run()
    {
        DB::table('vehicle_photo')->insert([
            ['vehicle_id' => 1, 'image_url' => 'images/toyota_corolla_1.jpg', 'display_order' => 0],
            ['vehicle_id' => 2, 'image_url' => 'images/honda_odyssey_1.jpg', 'display_order' => 0],
            ['vehicle_id' => 3, 'image_url' => 'images/jeep_wrangler_1.jpg', 'display_order' => 0],
            ['vehicle_id' => 4, 'image_url' => 'images/mazda_cx5_1.jpg', 'display_order' => 0],
            ['vehicle_id' => 5, 'image_url' => 'images/ford_f150_1.jpg', 'display_order' => 0],
            ['vehicle_id' => 6, 'image_url' => 'images/bmw_4series_cab_1.jpg', 'display_order' => 0],
            ['vehicle_id' => 7, 'image_url' => 'images/hyundai_tucson_1.jpg', 'display_order' => 0],
            ['vehicle_id' => 8, 'image_url' => 'images/mercedes_eclass_1.jpg', 'display_order' => 0],
            ['vehicle_id' => 9, 'image_url' => 'images/vw_multivan_1.jpg', 'display_order' => 0],
        ]);
    }
}
