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
        Schema::table('units', function (Blueprint $table) {
            $table->dropColumn('face');
            $table->dropColumn('size');
            $table->dropColumn('parking');
            $table->dropColumn('storage');
            $table->dropColumn('bedroom');
            $table->dropColumn('bathroom');
            $table->dropColumn('garden');
            $table->dropColumn('balcony');
            $table->dropColumn('flex');
            $table->dropColumn('dens');
            $table->string('start_size')->nullable();
            $table->string('end_size')->nullable();

            $table->string('start_parking')->nullable();
            $table->string('end_parking')->nullable();

            $table->string('start_storage')->nullable();
            $table->string('end_storage')->nullable();

            $table->string('start_bedroom')->nullable();
            $table->string('end_bedroom')->nullable();


            $table->string('start_bathroom')->nullable();
            $table->string('end_bathroom')->nullable();

            $table->string('start_garden')->nullable();
            $table->string('end_garden')->nullable();

            $table->string('start_balcony')->nullable();
            $table->string('end_balcony')->nullable();

            $table->string('start_flex')->nullable();
            $table->string('end_flex')->nullable();


            $table->string('start_dens')->nullable();
            $table->string('end_dens')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('units', function (Blueprint $table) {
            //
        });
    }
};
