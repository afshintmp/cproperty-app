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
        Schema::rename('feature_build', 'build_feature');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('build_feature', 'feature_build');

    }
};
