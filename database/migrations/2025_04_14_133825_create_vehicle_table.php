<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVehicleTable extends Migration
{
    public function up(): void
    {
        DB::statement('SET foreign_key_checks = 0;');

        Schema::create('vehicle', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 100);
            $table->string('model', 100);
            $table->integer('year');
            $table->decimal('price_per_day', 10, 2);
            $table->integer('doors')->nullable();
            $table->enum('fuel_type', ['gasoline', 'diesel', 'electric', 'hybrid']);
            $table->boolean('air_conditioning')->default(false);
            $table->integer('seats')->nullable();
            $table->enum('transmission', ['automatic', 'manual']);
            $table->foreignId('vehicle_type_id')->nullable()->constrained('vehicle_types')->nullOnDelete();
        });

        DB::statement('SET foreign_key_checks = 1;');
    }

    public function down(): void
    {
        DB::statement('SET foreign_key_checks = 0;');

        Schema::dropIfExists('vehicle');

        DB::statement('SET foreign_key_checks = 1;');
    }
}
