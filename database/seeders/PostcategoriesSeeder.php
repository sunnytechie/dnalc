<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostcategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i = 0; $i < 2; $i++) {
            $user = new \App\Models\Postcategory();
            $user->title = (rand(0, 1) == 1) ? 'Politics' : 'Sports';
            $user->save();
        }

    }
}
