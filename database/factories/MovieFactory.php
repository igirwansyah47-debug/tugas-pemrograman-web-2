<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [

            'category_id' => Category::factory(),

            'title' => fake()->sentence(2),

            'genre' => fake()->randomElement([
                'Action',
                'Comedy',
                'Drama',
                'Horror'
            ]),

            'year' => fake()->numberBetween(2000, 2025),

            'director' => fake()->name(),

            'duration' => fake()->numberBetween(90, 180),
        ];
    }
}