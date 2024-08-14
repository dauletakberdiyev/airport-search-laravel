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
        Schema::create('airports', function (Blueprint $table) {
            $table->string('code')->primary()->unique();
            $table->string('city_en');
            $table->string('city_ru')->nullable();
            $table->string('airport_en')->nullable();
            $table->string('airport_ru')->nullable();
            $table->string('area')->nullable();
            $table->string('country')->nullable();
            $table->string('timezone')->nullable();
            $table->float('lat')->nullable();
            $table->float('lng')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airports');
    }
};
