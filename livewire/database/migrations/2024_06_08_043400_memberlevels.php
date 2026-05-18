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
        Schema::create('memberlevels', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('img')->nullable();
            $table->float('ordersGrabbed')->nullable();
            $table->float('commissionRate')->nullable();
            $table->float('commissionPercentageOrder')->nullable();
            $table->float('minimumBalanceLimit')->nullable();
            $table->float('orderReciveLimit')->nullable();
            $table->float('withdrawLimit')->nullable();
            $table->float('minimumWithdrawLimit')->nullable();
            $table->float('maxWithdrawLimit')->nullable();
            $table->float('withdrawFee')->nullable();
            $table->integer('level')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberlevels');
    }
};
