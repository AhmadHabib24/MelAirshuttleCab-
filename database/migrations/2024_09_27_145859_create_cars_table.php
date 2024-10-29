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
        Schema::create('cars', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('car_name'); // Car name
            $table->string('car_model'); // Car model
            $table->decimal('initial_charge', 8, 2); // Initial charge
            $table->decimal('per_mil_km', 8, 2); // Cost per mile/km
            $table->decimal('per_stopped_traffic', 8, 2); // Cost per stopped traffic
            $table->integer('passengers'); // Number of passengers
            $table->string('car_category'); // Car category
            $table->string('car_image')->nullable(); // Car image path
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
