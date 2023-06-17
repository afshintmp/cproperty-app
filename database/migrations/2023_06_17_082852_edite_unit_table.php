<?php

use App\Models\Phase;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('units', function (Blueprint $table) {
            $table->foreignIdFor(Phase::class);
            $table->bigInteger('floor');
            $table->string('face');
            $table->string('storage');
            $table->string('parking');
            $table->bigInteger('garden');
            $table->string('dens');
            $table->string('flex');
            $table->bigInteger(' Balcony');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('units', function (Blueprint $table) {

        });
    }
};
