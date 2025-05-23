<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class VehicleSeeder extends Seeder
{
    public function run()
    {
        DB::table('vehicle')->insert([
            ['brand' => 'Toyota', 'model' => 'Corolla', 'year' => 2021, 'price_per_day' => 40.00, 'doors' => 4, 'fuel_type' => 'gasoline', 'air_conditioning' => true, 'seats' => 5, 'transmission' => 'automatic', 'vehicle_type_id' => 1],
            ['brand' => 'Honda', 'model' => 'Odyssey', 'year' => 2022, 'price_per_day' => 65.00, 'doors' => 5, 'fuel_type' => 'gasoline', 'air_conditioning' => false, 'seats' => 7, 'transmission' => 'automatic', 'vehicle_type_id' => 2],
            ['brand' => 'Jeep', 'model' => 'Wrangler', 'year' => 2023, 'price_per_day' => 80.00, 'doors' => 3, 'fuel_type' => 'diesel', 'air_conditioning' => true, 'seats' => 5, 'transmission' => 'manual', 'vehicle_type_id' => 3],
            ['brand' => 'Mazda', 'model' => 'CX-5', 'year' => 2022, 'price_per_day' => 55.00, 'doors' => 5, 'fuel_type' => 'gasoline', 'air_conditioning' => false, 'seats' => 5, 'transmission' => 'automatic', 'vehicle_type_id' => 4],
            ['brand' => 'Ford', 'model' => 'F-150', 'year' => 2021, 'price_per_day' => 75.00, 'doors' => 4, 'fuel_type' => 'diesel', 'air_conditioning' => false, 'seats' => 5, 'transmission' => 'automatic', 'vehicle_type_id' => 5],
            ['brand' => 'BMW', 'model' => '4 Series Cabriolet', 'year' => 2023, 'price_per_day' => 95.00, 'doors' => 2, 'fuel_type' => 'gasoline', 'air_conditioning' => true, 'seats' => 4, 'transmission' => 'automatic', 'vehicle_type_id' => 6],
            ['brand' => 'Hyundai', 'model' => 'Tucson', 'year' => 2022, 'price_per_day' => 50.00, 'doors' => 5, 'fuel_type' => 'hybrid', 'air_conditioning' => true, 'seats' => 5, 'transmission' => 'automatic', 'vehicle_type_id' => 4],
            ['brand' => 'Mercedes', 'model' => 'E-Class', 'year' => 2023, 'price_per_day' => 90.00, 'doors' => 4, 'fuel_type' => 'diesel', 'air_conditioning' => true, 'seats' => 5, 'transmission' => 'automatic', 'vehicle_type_id' => 1],
            ['brand' => 'Volkswagen', 'model' => 'Multivan', 'year' => 2021, 'price_per_day' => 70.00, 'doors' => 5, 'fuel_type' => 'gasoline', 'air_conditioning' => false, 'seats' => 7, 'transmission' => 'automatic', 'vehicle_type_id' => 2],
        ]);
    }
}
