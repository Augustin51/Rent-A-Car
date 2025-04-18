<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateReservationTable extends Migration
{
    public function up(): void
    {
        DB::statement('SET foreign_key_checks = 0;');

        Schema::create('reservation', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->foreignId('vehicle_id')->constrained('vehicles')->onDelete('cascade');
            $table->date('start_date');
            $table->date('end_date');
            $table->decimal('total_price', 10, 2);
            $table->timestamp('created_at')->useCurrent();

        });

        DB::statement('SET foreign_key_checks = 1;');
    }

    public function down(): void
    {
        DB::statement('SET foreign_key_checks = 0;');

        Schema::dropIfExists('reservation');

        DB::statement('SET foreign_key_checks = 1;');
    }
}
