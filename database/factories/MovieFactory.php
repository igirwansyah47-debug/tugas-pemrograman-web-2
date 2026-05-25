<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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