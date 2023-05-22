<?php

namespace Database\Factories;

use App\Models\Build;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Unit>
 */
class UnitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'build_id' => fake()->numberBetween(1, Build::count()),
            'name' => fake()->randomNumber(1),
            'floor_plan' => fake()->randomElement(['A', 'B', 'C', 'D']) . fake()->randomNumber(1),
            'bedroom' => fake()->randomNumber(1),
            'bathroom' => fake()->randomNumber(1),
            'size' => fake()->randomNumber(3),
            'floors' => fake()->randomNumber(3),
            'price' => fake()->randomNumber(7),
        ];
    }

}
