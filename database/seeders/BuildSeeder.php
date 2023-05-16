<?php

namespace Database\Seeders;

use App\Models\Build;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuildSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Build::factory()->count(4)->hasImages(4)->hascover(['tag' => 'cover'])->haspromotion(['tag' => 'promotion'])->create();
    }
}
