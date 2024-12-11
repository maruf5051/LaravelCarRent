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
        Schema::table('deleted_cars', function (Blueprint $table) {
            $table->timestamps(); // Adds `created_at` and `updated_at`
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('deleted_cars', function (Blueprint $table) {
            //
            $table->dropTimestamps();
        });
    }
};