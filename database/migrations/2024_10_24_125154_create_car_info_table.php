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
        Schema::create('car_info', function (Blueprint $table) {
            $table->id();
            $table->string('img1');
            $table->string('img2');
            $table->string('img3');
            $table->longText('des')->nullable();
            $table->string('color');
            $table->string('size');

            $table->unsignedBigInteger('car_id')->unique();
            $table->foreign('car_id')->references('id')->on('cars')
            ->restrictOnDelete()
            ->cascadeOnUpdate();
            

            $table->timestamp('create_at')->useCurrent();
            $table->timestamp('update_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_info');
    }
};
