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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');  // Foreign key for users (BIGINT)
            $table->unsignedBigInteger('car_id');   // Foreign key for cars (BIGINT)
            $table->date('start_date');             // Start date of the booking (DATE)
            $table->date('end_date');               // End date of the booking (DATE)
            $table->decimal('total_cost', 8, 2);    // Total cost of the booking (DECIMAL)


            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')
            ->cascadeOnUpdate()
            ->restrictOnDelete();
            $table->foreign('car_id')->references('id')->on('cars')
            ->cascadeOnUpdate()
            ->restrictOnDelete();
            
            $table->timestamp('create_at')->useCurrent();
            $table->timestamp('update_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
