<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Category;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'category_id' => 1,
            'title' => 'Avengers: Endgame',
            'genre' => 'Action',
            'year' => 2019,
            'director' => 'Anthony Russo',
            'duration' => 181
        ]);

        Movie::create([
            'category_id' => 1,
            'title' => 'John Wick',
            'genre' => 'Action',
            'year' => 2014,
            'director' => 'Chad Stahelski',
            'duration' => 101
        ]);

        Movie::create([
            'category_id' => 2,
            'title' => 'The Conjuring',
            'genre' => 'Horror',
            'year' => 2013,
            'director' => 'James Wan',
            'duration' => 112
        ]);

        Movie::create([
            'category_id' => 2,
            'title' => 'Insidious',
            'genre' => 'Horror',
            'year' => 2010,
            'director' => 'James Wan',
            'duration' => 103
        ]);

        Movie::create([
            'category_id' => 3,
            'title' => 'Interstellar',
            'genre' => 'Sci-Fi',
            'year' => 2014,
            'director' => 'Christopher Nolan',
            'duration' => 169
        ]);

        Movie::create([
            'category_id' => 3,
            'title' => 'Inception',
            'genre' => 'Sci-Fi',
            'year' => 2010,
            'director' => 'Christopher Nolan',
            'duration' => 148
        ]);

        Movie::create([
            'category_id' => 4,
            'title' => 'Titanic',
            'genre' => 'Drama',
            'year' => 1997,
            'director' => 'James Cameron',
            'duration' => 195
        ]);

        Movie::create([
            'category_id' => 4,
            'title' => 'The Pursuit of Happyness',
            'genre' => 'Drama',
            'year' => 2006,
            'director' => 'Gabriele Muccino',
            'duration' => 117
        ]);

        Movie::create([
            'category_id' => 5,
            'title' => 'Toy Story',
            'genre' => 'Animation',
            'year' => 1995,
            'director' => 'John Lasseter',
            'duration' => 81
        ]);

        Movie::create([
            'category_id' => 5,
            'title' => 'Frozen',
            'genre' => 'Animation',
            'year' => 2013,
            'director' => 'Chris Buck',
            'duration' => 102
        ]);
    }
}