<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feature>
 */
class FeatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            [
                'name' => 'Game Room',
                'icon' => 'img/play.svg'
            ],
            [
                'name' => 'Tv Room',
                'icon' => 'img/television.svg'
            ],
            [
                'name' => 'Squash Court',
                'icon' => 'img/television.svg'

            ],
            [
                'name' => 'Party Room',
                'icon' => 'img/squash.svg'
            ],
            [
                'name' => 'Hot Tub',
                'icon' => 'img/jacuzzi.svg'
            ],
            [
                'name' => 'Roof Garden',
                'icon' => 'img/gardening.svg'

            ],
            [
                'name' => 'Bbq Area',
                'icon' => 'img/barbecue.svg'
            ],
            [
                'name' => 'Swimming Pool',
                'icon' => 'img/swimming-pool.svg'
            ],
            [
                'name' => 'Sauna',
                'icon' => 'img/sauna.svg'
            ],
            [
                'name' => 'Dog Wash',
                'icon' => 'img/grooming.svg'
            ]
        ];
    }
}
