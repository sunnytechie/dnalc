<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 3; $i++) {
            DB::table('Notifications')->insert([
                'image' => $faker->imageUrl(),
                'title' => $faker->sentence(),
                'content' => $faker->paragraph(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
