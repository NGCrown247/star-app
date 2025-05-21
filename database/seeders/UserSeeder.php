<?php

namespace Database\Seeders;

use App\Enums\PlanType;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        for ($i = 0; $i < 5; $i++) {
            User::create([
                'full_name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'phone_number' => fake()->phoneNumber(),
                'address'=> fake()->address(),
                'status' => fake()->randomElement(['active', 'inactive']),
                'role' => 'user',
                'plan_tier' => PlanType::TIER_ONE,
                'password' => Hash::make('password'),
            ]);
        }
    }
}
