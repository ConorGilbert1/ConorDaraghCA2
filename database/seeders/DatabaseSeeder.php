<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Movies; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $movies = [
            [
                'title' => 'The Shawshank Redemption',
                'release_date' => '1994-09-23',
                'director' => 'Frank Darabont',
                'duration' => 142,
                'overall_rating' => 9.3,
            ],
            [
                'title' => 'The Godfather',
                'release_date' => '1972-03-24',
                'director' => 'Francis Ford Coppola',
                'duration' => 175,
                'overall_rating' => 9.2,
            ],
            [
                'title' => 'The Dark Knight',
                'release_date' => '2008-07-18',
                'director' => 'Christopher Nolan',
                'duration' => 152,
                'overall_rating' => 9.0,
            ],
            [
                'title' => 'Pulp Fiction',
                'release_date' => '1994-10-14',
                'director' => 'Quentin Tarantino',
                'duration' => 154,
                'overall_rating' => 8.9,
            ],
            [
                'title' => 'The Matrix',
                'release_date' => '1999-03-31',
                'director' => 'The Wachowskis',
                'duration' => 136,
                'overall_rating' => 8.7,
            ],
        ];

        // Loop through the $movies array and create a record for each movie
        foreach ($movies as $movie) {
            Movies::create($movie);
        }
    }
}