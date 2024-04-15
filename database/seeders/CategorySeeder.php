<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
//use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $categories = [
            'Ukrainian meals',
            'Ukrainian traditions',
            'Recipes',
            'Deserts',
            'Pierogies',
            'Salo',
        ];

        foreach ($categories as $category) {
            Category::create([
                'title' => $category,
                'description' => fake()->paragraph(2),
            ]);
        }
    }
}
