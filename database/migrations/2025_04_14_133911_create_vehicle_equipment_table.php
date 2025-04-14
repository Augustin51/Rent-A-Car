<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleEquipmentTable extends Migration
{
    public function up(): void
    {
        Schema::create('vehicle_equipment', function (Blueprint $table) {
            $table->foreignId('vehicle_id')->constrained('vehicles')->onDelete('cascade');
            $table->foreignId('equipment_id')->constrained('equipment')->onDelete('cascade');
            $table->primary(['vehicle_id', 'equipment_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehicle_equipment');
    }
}
