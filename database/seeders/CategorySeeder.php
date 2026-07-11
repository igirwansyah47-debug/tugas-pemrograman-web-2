<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Action',
            'description' => 'Film aksi dan pertarungan',
            'status' => 'Active'
        ]);

        Category::create([
            'name' => 'Horror',
            'description' => 'Film horor dan supranatural',
            'status' => 'Active'
        ]);

        Category::create([
            'name' => 'Sci-Fi',
            'description' => 'Film science fiction',
            'status' => 'Active'
        ]);

        Category::create([
            'name' => 'Drama',
            'description' => 'Film drama kehidupan',
            'status' => 'Active'
        ]);

        Category::create([
            'name' => 'Animation',
            'description' => 'Film animasi keluarga',
            'status' => 'Active'
        ]);
    }
}