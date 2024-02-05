<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{

    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            Post::create([
                'title' => $faker->sentence($nbWords = rand(3, 11), $variableNbWords = true),
                'image' => "/image/blogInfo/card" . rand(1, 3) . ".webp",
                'body' => $faker->text($maxNbChars = rand(400, 2000)),
                'status' => ['active', 'deactive'][rand(0, 1)],
                'category_id' => rand(1, 3),
                'admin_id' => 1
            ]);
        }
    }
}
