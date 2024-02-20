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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('street_address');
            $table->string('street_city');
            $table->string('street_state');
            $table->boolean('for_purchase');
            $table->integer('price'); //between 250,000 - 9,000,000
            $table->integer('bed'); //between 1 - 5
            $table->integer('bath'); //between 1 - 3
            $table->integer('sqft'); //between 500 - 5,000
            $table->integer('stories'); //between 1 - 3
            $table->boolean('dishwasher'); 
            $table->boolean('disposal');
            $table->boolean('washer');
            $table->boolean('dryer');
            $table->boolean('fridge');
            $table->boolean('heat_cooling');
            $table->boolean('fireplace');
            $table->boolean('garage');
            $table->integer('year_built'); //between 1890 - 2024
            $table->integer('year_renovated'); //after year biult up to 2024
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
