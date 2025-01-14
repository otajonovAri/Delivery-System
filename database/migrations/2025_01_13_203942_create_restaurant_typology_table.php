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
        Schema::create('restaurant_typology', function (Blueprint $table) {
            $table->unsignedBigInteger('restaurant_id');
            $table->foreign('restaurant_id')->references('id')->on('restaurants')->cascadeOnDelete();
            $table->unsignedBigInteger('typology_id');
            $table->foreign('typology_id')->references('id')->on('typologies')->cascadeOnDelete();

            $table->primary(['restaurant_id', 'typology_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurant_typology');
    }
};
