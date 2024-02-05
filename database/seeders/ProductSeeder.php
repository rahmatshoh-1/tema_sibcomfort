<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            Product::create([
                'name' => $faker->sentence($nbWords = rand(3, 11), $variableNbWords = true),
                'image' => "/image/" . rand(1, 4) . ".webp",
                'body' => $faker->text($maxNbChars = rand(400, 2000)),
                'title' => ['акция 60%', 'новинка'][rand(0, 1)],
                'type' => ['pogonazh', 'pilomaterial'][rand(0, 1)],
                'status' => ['active', 'deactive'][rand(0, 1)],
            ]);
        }
    }
}
