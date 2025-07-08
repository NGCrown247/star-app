<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

      Plan::create([
        'image' => null,
        'plan_title' => 'Tier 1',
        'plan_price' => 0,
        'plan_earn_daily' => '90',
        'Benefit_header' => 'Benefits',
        'watch_video' => 'Watch Videos',
        'play_music' => 'Play Music',
        'read_article' => 'Read Article',

        'task_point'=> 1,
        'plan_tier'=>1,
        'created_by' => 1,
        'created_at' => now(),
        'updated_at' => now(),
      ]);

      Plan::create([
        'image' => null,
        'plan_title' => 'Tier 2',
        'plan_price' => '10000',
        'plan_earn_daily' => '400',
        'Benefit_header' => 'Benefits',
        'watch_video' => 'Watch Videos',
        'play_music' => 'Play Music',
        'read_article' => 'Read Article',

        'task_point'=> 2,
        'created_by' => 1,
        'plan_tier'=>2,
        'created_at' => now(),
        'updated_at' => now(),
      ]);

      Plan::create([
        'image' => null,
        'plan_title' => 'Tier 3',
        'plan_price' => '25000',
        'plan_earn_daily' => '900',
        'Benefit_header' => 'Benefits',
        'watch_video' => 'Watch Videos',
        'play_music' => 'Play Music',
        'read_article' => 'Read Article',

        'task_point'=> 3,
        'plan_tier'=>3,
        'created_by' => 1,
        'created_at' => now(),
        'updated_at' => now(),
      ]);
    }
}
