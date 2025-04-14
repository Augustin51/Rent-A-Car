<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVehicleTypeTable extends Migration
{
    public function up(): void
    {
        DB::statement('SET foreign_key_checks = 0;');

        Schema::create('vehicle_type', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->unique();
        });

        DB::statement('SET foreign_key_checks = 1;');
    }

    public function down(): void
    {
        DB::statement('SET foreign_key_checks = 0;');

        Schema::dropIfExists('vehicle_type');

        DB::statement('SET foreign_key_checks = 1;');
    }
}
