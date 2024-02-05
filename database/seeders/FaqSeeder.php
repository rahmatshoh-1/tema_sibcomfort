<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            Faq::create([
                'label' => $faker->sentence($nbWords = rand(3, 11), $variableNbWords = true),
                'body' => $faker->text($maxNbChars = rand(100, 200)),
                'page' => ['frame.house', 'molded.house', 'brus', 'module', 'manual.cutting', 'lumber'][random_int(0, 5)],
            ]);
        }
    }
}
