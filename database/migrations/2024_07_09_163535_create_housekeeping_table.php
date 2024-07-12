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
        // housekeepers
        Schema::create('housekeeping', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('room_id');
            $table->date('date');
            $table->string('status');
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('housekeeping');
    }
};
