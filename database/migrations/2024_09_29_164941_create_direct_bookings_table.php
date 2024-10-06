<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('direct_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('car_name');
            $table->string('car_model');
            $table->decimal('initial_charge', 10, 2);
            $table->decimal('per_mil_km', 10, 2);
            $table->decimal('per_stopped_traffic', 10, 2);
            $table->integer('passengers');
            $table->string('email'); // New field for email
            $table->string('phone'); // New field for phone
            $table->string('name'); // New field for name
            $table->string('starting_dest'); // New field for starting destination
            $table->string('ending_dest'); // New field for ending destination
            $table->date('ride_date'); // New field for ride date
            $table->time('ride_time'); // New field for ride time
            $table->text('message')->nullable(); // New field for message
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direct_bookings');
    }
};
