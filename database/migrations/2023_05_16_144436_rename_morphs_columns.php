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
        Schema::table('images', function (Blueprint $table) {
            $table->dropColumn('photoable_id');
            $table->dropColumn('photoable_type');
            $table->morphs('imageable');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropColumn('imageable_id');
            $table->dropColumn('imageable_type');
            $table->morphs('photoable');
        });
    }
};
