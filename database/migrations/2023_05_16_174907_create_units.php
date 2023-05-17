<?php

use App\Models\Build;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Build::class);
            $table->char('name', 100);
            $table->char('floor_plan', 100);
            $table->bigInteger('bedroom')->nullable();
            $table->bigInteger('bathroom')->nullable();
            $table->bigInteger('size')->nullable();
            $table->bigInteger('floors')->nullable();
            $table->char('price', 100);
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
