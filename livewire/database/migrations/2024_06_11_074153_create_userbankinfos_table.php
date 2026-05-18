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
        Schema::create('userbankinfos', function (Blueprint $table) {
            $table->id();
            $table->integer('userId')->nullable();
            $table->string('name')->nullable();
            $table->string('bankName')->nullable();
            $table->string('cardNumber')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userbankinfos');
    }
};
