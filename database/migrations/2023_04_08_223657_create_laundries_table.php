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
        Schema::create('laundries', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('customer_id')->unsigned();
            $table->bigInteger('duration_id')->unsigned();
            $table->bigInteger('type_laundry_id')->unsigned();
            $table->date('date_start');
            $table->date('date_finish');
            $table->integer('price');
            $table->integer('discount');
            $table->integer('total_price');
            $table->integer('total_pay');
            $table->boolean('status_taken')->default(0);
            $table->boolean('status_pay')->default(0);
            $table->string('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laundries');
    }
};
