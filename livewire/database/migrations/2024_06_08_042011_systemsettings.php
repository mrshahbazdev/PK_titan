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
        Schema::create('systemsettings', function (Blueprint $table) {
            $table->id();
            $table->string('siteTitle')->nullable();
            $table->string('siteLogo')->nullable();
            $table->integer('level1commission')->nullable();
            $table->integer('level2commission')->nullable();
            $table->integer('level3commission')->nullable();
            $table->integer('level4commission')->nullable();
            $table->integer('level5commission')->nullable();
            $table->integer('gift')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('systemsettings');
    }
};
