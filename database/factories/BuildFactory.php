<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BuildFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'location' => fake()->city(),
            'completion_date' => fake()->date(),
            'description' => fake()->text(),
            'promotion_text' => fake()->text(),
            'slug' => fake()->slug()
        ];
    }
}
