<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('builds', function (Blueprint $table) {
            $table->char('deposit', 100);
            $table->char('assignment', 100);
            $table->char('tower', 100);
            $table->char('type', 100);
            $table->char('pet', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('builds', function (Blueprint $table) {
            $table->dropColumn('deposit');
            $table->dropColumn('assignment');
            $table->dropColumn('tower');
            $table->dropColumn('type');
            $table->dropColumn('pet');
        });
    }
};
