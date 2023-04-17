<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * This table is made to store total price based on type laundry, duration, and type cloth each kilos
     */
    public function up(): void
    {
        Schema::create('total_prices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('type_laundry_id')->unsigned();
            $table->bigInteger('duration_id')->unsigned();
            $table->bigInteger('type_cloth_id')->unsigned();
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('total_prices');
    }
};
