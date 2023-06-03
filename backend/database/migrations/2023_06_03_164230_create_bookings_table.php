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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->unsignedBigInteger('ticket_id');
            $table->unsignedBigInteger('language_id')->nullable();
            $table->time('start_time')->nullable();
            $table->date('booking_date');
            $table->timestamps();
        
            $table->foreign('ticket_id')->references('id')->on('tickets');
            $table->foreign('language_id')->references('id')->on('languages');
        });              
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
