<?php

namespace Database\Seeders;

use App\Models\Feature;
use Database\Factories\FeatureFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [
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
        foreach ($features as $feature) {
            Feature::create($feature);
        }


    }
}
