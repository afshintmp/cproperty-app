<?php

namespace Database\Seeders;

use App\Models\Plan;
use App\Models\User;
use Database\Factories\SuperAdminFactory;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class InitialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lorm_txt = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.';
        $roles = [
            ['name' => 'admin'],
            ['name' => 'developer'],
            ['name' => 'realtor'],
        ];
        $admins = [
            [
                'name' => 'ramin.admin',
                'password' => Hash::make('SuperAdminPassword'),
                'email' => 'superadminramin@gmail.com',
                'email_verified_at' => now(),
                'remember_token' => Str::random(10)
            ],
            [
                'name' => 'afshin.admin',
                'password' => Hash::make('SuperAdminPassword'),
                'email' => 'superadminafshin@gmail.com',
                'email_verified_at' => now(),
                'remember_token' => Str::random(10)
            ]
        ];
        $developer =
            ['name' => 'developer',
                'password' => Hash::make('developer'),
                'email' => 'developer@gmail.com',
                'email_verified_at' => now(),
                'remember_token' => Str::random(10)
            ];


        $plans = [
            [
                'title' => 'Enhanced',
                'uniqe_name' => 'enhanced',
                'tag' => '',
                'time_credit' => 3,
                'description' => $lorm_txt,
                'price' => 250,

            ],
            [
                'title' => 'Enhanced',
                'uniqe_name' => 'annual-enhanced',
                'tag' => 'Annual',
                'time_credit' => 12,
                'description' => $lorm_txt,
                'price' => 250,

            ],
            ['title' => 'Starter',
                'uniqe_name' => 'starter',
                'description' => $lorm_txt,
                'price' => 70,
                'tag' => '',
                'time_credit' => 3,
            ],
            ['title' => 'Starter',
                'uniqe_name' => 'annual-starter',
                'description' => $lorm_txt,
                'price' => 70,
                'tag' => 'Annual',
                'time_credit' => 12,
            ]

        ];
        $pages_content = [
            ['name' => 'plan',
                'title' => 'Get a Premium Account',
                'content' => $lorm_txt]
        ];
        foreach ($pages_content as $content) {
            DB::table('page_content')->insert($content);
        }
        foreach ($roles as $role) {
            DB::table('roles')->insert($role);
        }
        foreach ($admins as $admin) {
            $user = User::create($admin)->giveRolesTo('admin');
        }
        User::create($developer)->giveRolesTo('developer');
        foreach ($plans as $plan) {
            Plan::create($plan);
        }


    }
}
