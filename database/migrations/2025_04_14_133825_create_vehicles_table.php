<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 100);
            $table->string('model', 100);
            $table->integer('year');
            $table->decimal('price_per_day', 10, 2);
            $table->string('image_url', 255)->nullable();
            $table->integer('doors')->nullable();
            $table->enum('fuel_type', ['essence', 'diesel', 'électrique', 'hybride']);
            $table->boolean('air_conditioning')->default(false);
            $table->integer('seats')->nullable();
            $table->enum('transmission', ['automatique', 'manuelle']);
            $table->foreignId('vehicle_type_id')->nullable()->constrained('vehicle_types')->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
}
