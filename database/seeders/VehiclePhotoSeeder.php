<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class VehiclePhotoSeeder extends Seeder
{
    public function run()
    {
        DB::table('vehicle_photo')->insert([
            ['vehicle_id' => 1, 'image_url' => 'images/vehicles/toyota_corolla_1.png', 'display_order' => 0],
            ['vehicle_id' => 1, 'image_url' => 'images/vehicles/toyota_corolla_2.png', 'display_order' => 1],
            ['vehicle_id' => 1, 'image_url' => 'images/vehicles/toyota_corolla_3.png', 'display_order' => 2],
            ['vehicle_id' => 1, 'image_url' => 'images/vehicles/toyota_corolla_4.png', 'display_order' => 3],

            ['vehicle_id' => 2, 'image_url' => 'images/vehicles/honda_odyssey_1.png', 'display_order' => 0],
            ['vehicle_id' => 2, 'image_url' => 'images/vehicles/honda_odyssey_2.png', 'display_order' => 1],
            ['vehicle_id' => 2, 'image_url' => 'images/vehicles/honda_odyssey_3.png', 'display_order' => 2],
            ['vehicle_id' => 2, 'image_url' => 'images/vehicles/honda_odyssey_4.png', 'display_order' => 3],

            ['vehicle_id' => 3, 'image_url' => 'images/vehicles/jeep_wrangler_1.png', 'display_order' => 0],
            ['vehicle_id' => 3, 'image_url' => 'images/vehicles/jeep_wrangler_2.png', 'display_order' => 1],
            ['vehicle_id' => 3, 'image_url' => 'images/vehicles/jeep_wrangler_3.png', 'display_order' => 2],
            ['vehicle_id' => 3, 'image_url' => 'images/vehicles/jeep_wrangler_4.png', 'display_order' => 3],

            ['vehicle_id' => 4, 'image_url' => 'images/vehicles/mazda_cx5_1.png', 'display_order' => 0],
            ['vehicle_id' => 4, 'image_url' => 'images/vehicles/mazda_cx5_2.png', 'display_order' => 1],
            ['vehicle_id' => 4, 'image_url' => 'images/vehicles/mazda_cx5_3.png', 'display_order' => 2],
            ['vehicle_id' => 4, 'image_url' => 'images/vehicles/mazda_cx5_4.png', 'display_order' => 3],

            ['vehicle_id' => 5, 'image_url' => 'images/vehicles/ford_f150_1.png', 'display_order' => 0],
            ['vehicle_id' => 5, 'image_url' => 'images/vehicles/ford_f150_2.png', 'display_order' => 1],
            ['vehicle_id' => 5, 'image_url' => 'images/vehicles/ford_f150_3.png', 'display_order' => 2],
            ['vehicle_id' => 5, 'image_url' => 'images/vehicles/ford_f150_4.png', 'display_order' => 3],

            ['vehicle_id' => 6, 'image_url' => 'images/vehicles/bmw_4series_cab_1.png', 'display_order' => 0],
            ['vehicle_id' => 6, 'image_url' => 'images/vehicles/bmw_4series_cab_2.png', 'display_order' => 1],
            ['vehicle_id' => 6, 'image_url' => 'images/vehicles/bmw_4series_cab_3.png', 'display_order' => 2],
            ['vehicle_id' => 6, 'image_url' => 'images/vehicles/bmw_4series_cab_4.png', 'display_order' => 3],

            ['vehicle_id' => 7, 'image_url' => 'images/vehicles/hyundai_tucson_1.png', 'display_order' => 0],
            ['vehicle_id' => 7, 'image_url' => 'images/vehicles/hyundai_tucson_2.png', 'display_order' => 1],
            ['vehicle_id' => 7, 'image_url' => 'images/vehicles/hyundai_tucson_3.png', 'display_order' => 2],
            ['vehicle_id' => 7, 'image_url' => 'images/vehicles/hyundai_tucson_4.png', 'display_order' => 3],

            ['vehicle_id' => 8, 'image_url' => 'images/vehicles/mercedes_eclass_1.png', 'display_order' => 0],
            ['vehicle_id' => 8, 'image_url' => 'images/vehicles/mercedes_eclass_2.png', 'display_order' => 1],
            ['vehicle_id' => 8, 'image_url' => 'images/vehicles/mercedes_eclass_3.png', 'display_order' => 2],
            ['vehicle_id' => 8, 'image_url' => 'images/vehicles/mercedes_eclass_4.png', 'display_order' => 3],

            ['vehicle_id' => 9, 'image_url' => 'images/vehicles/vw_multivan_1.png', 'display_order' => 0],
            ['vehicle_id' => 9, 'image_url' => 'images/vehicles/vw_multivan_2.png', 'display_order' => 1],
            ['vehicle_id' => 9, 'image_url' => 'images/vehicles/vw_multivan_3.png', 'display_order' => 2],
            ['vehicle_id' => 9, 'image_url' => 'images/vehicles/vw_multivan_4.png', 'display_order' => 3],
        ]);
    }
}
