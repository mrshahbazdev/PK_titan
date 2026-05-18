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
         Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique()->nullable();
            $table->integer('ph')->nullable();
            $table->integer('balance')->nullable();
            $table->integer('topUp')->nullable();
            $table->integer('avalibleDailyOrders')->nullable();
            $table->integer('takeTodayOrders')->nullable();
            $table->integer('todaycommission')->nullable();
            $table->integer('credibility')->nullable();
            $table->integer('status')->nullable();
            $table->integer('memberLevel')->nullable();
            $table->integer('frozenAmout')->nullable();
            $table->integer('grabOrder')->nullable();
            $table->integer('orderStatus')->nullable();
            $table->integer('withdrawalStatus')->nullable();
            $table->integer('memberAgent')->nullable();
            $table->string('inviteCode')->nullable();
            $table->string('qrImage')->nullable();
            $table->string('myCode')->unique()->nullable();
            $table->string('paymentPassword')->nullable();
            $table->string('password')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
