<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVehicleEquipmentTable extends Migration
{
    public function up(): void
    {
        DB::statement('SET foreign_key_checks = 0;');

        Schema::create('vehicle_equipment', function (Blueprint $table) {
            $table->foreignId('vehicle_id')->constrained('vehicles')->onDelete('cascade');
            $table->foreignId('equipment_id')->constrained('equipment')->onDelete('cascade');
            $table->primary(['vehicle_id', 'equipment_id']);
        });

        DB::statement('SET foreign_key_checks = 1;');
    }

    public function down(): void
    {
        DB::statement('SET foreign_key_checks = 0;');

        Schema::dropIfExists('vehicle_equipment');

        DB::statement('SET foreign_key_checks = 1;');
    }
}
