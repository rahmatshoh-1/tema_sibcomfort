<?php

namespace Database\Seeders;

use App\Models\BuildType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuildTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BuildType::insert([
            ['name' => 'Дом'],
            ['name' => 'Баня'],
        ]);
    }
}
