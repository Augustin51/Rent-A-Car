<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleAvailabilitiesTable extends Migration
{
    public function up(): void
    {
        Schema::create('vehicle_availabilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_id')->constrained('vehicles')->onDelete('cascade');
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('is_available')->default(true);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehicle_availabilities');
    }
}
