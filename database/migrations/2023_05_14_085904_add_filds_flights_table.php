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
        Schema::table('builds', function (Blueprint $table) {
            $table->char('location', 100);
            $table->date('completion_date');
            $table->text('description')->nullable();
            $table->text('promotion_text')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('builds', function (Blueprint $table) {
            $table->dropColumn('location');
            $table->dropColumn('completion_date');
            $table->dropColumn('description');
            $table->dropColumn('promotion_text');
        });
    }
};
