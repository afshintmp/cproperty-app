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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignIdFor(\App\Models\Phase::class);
            $table->foreignIdFor(\App\Models\Build::class);
            $table->bigInteger('floor');
            $table->bigInteger('price')->nullable();
            $table->string('face');
            $table->bigInteger('size');
            $table->string('parking');
            $table->string('storage');
            $table->bigInteger('bedroom');
            $table->bigInteger('bathroom');
            $table->bigInteger('garden')->nullable();
            $table->bigInteger('balcony')->nullable();
            $table->string('flex');
            $table->string('dens');
            $table->string('floor_plan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
