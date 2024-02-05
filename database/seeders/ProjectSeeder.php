<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            Project::create([
                'name' => $faker->sentence($nbWords = rand(3, 11), $variableNbWords = true),
                'image_top' => "/image/" . rand(1, 4) . ".webp",
                'image_middle' => "/image/" . rand(1, 4) . ".webp",
                'image_bottom' => "/image/" . rand(1, 4) . ".webp",
                'body' => $faker->text($maxNbChars = rand(400, 2000)),
                'status' => ['active', 'deactive'][rand(0, 1)],
                'type' => ['building', 'ready'][rand(0, 1)],
                'size_from' => rand(100, 999),
                'size_to' => rand(100, 999),
                'floor' => rand(1, 20),
                'category_id' => rand(1, 4),
                'build_type_id' => rand(1, 2),
            ]);
        }
    }
}
