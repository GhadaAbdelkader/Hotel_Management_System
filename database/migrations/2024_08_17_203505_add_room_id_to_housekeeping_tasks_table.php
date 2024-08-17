<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('housekeeping_tasks', function (Blueprint $table) {
//            $table->unsignedBigInteger('room_id');
//            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
            $table->foreignId('room_id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    public function down(): void
    {
        Schema::table('housekeeping_tasks', function (Blueprint $table) {
            //
        });
    }
};
