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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('type');
            $table->string('size');
            $table->text("amenities"); // array of amenities
            $table->text('pictures'); // array of pictures
            // main picture for room
            $table->integer('capacity'); // array [adults, children]
            $table->string('status'); // ['available', 'booked', 'maintenance']
            // Price
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
