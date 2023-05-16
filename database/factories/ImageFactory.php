<?php

namespace Database\Factories;

use App\Models\Build;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        $imageable = $this->imageable();

        return [
            'name' => fake()->name(),
            'alt_text' => fake()->name(),
            'slug' => fake()->imageUrl(640, 480, 'animals', true),
            'imageable_type' => $imageable,
            'imageable_id' => $imageable::factory(),
            'tag' => ''
        ];

    }

    private function imageable()
    {

        return fake()->randomElement([
            Build::class
        ]);

    }
}
