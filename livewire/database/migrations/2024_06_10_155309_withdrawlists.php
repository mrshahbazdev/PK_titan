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
        Schema::create('withdrawlists', function (Blueprint $table) {
            $table->id();
            $table->integer('userId')->nullable();
            $table->integer('orderAmount')->nullable();
            $table->string('username')->nullable();
            $table->string('name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('bankCard')->nullable();
            $table->string('bankName')->nullable();
            $table->integer('oprate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdrawlist');
    }
};
