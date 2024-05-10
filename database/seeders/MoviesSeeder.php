<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movies;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
            [
                'title' => 'Forrest Gump',
                'release_date' => '1994-07-06',
                'director' => 'Robert Zemeckis',
                'duration' => 142,
                'overall_rating' => 8.8,
            ],
            [
                'title' => 'Inception',
                'release_date' => '2010-07-16',
                'director' => 'Christopher Nolan',
                'duration' => 148,
                'overall_rating' => 8.8,
            ],
            [
                'title' => 'The Lord of the Rings: The Return of the King',
                'release_date' => '2003-12-17',
                'director' => 'Peter Jackson',
                'duration' => 201,
                'overall_rating' => 8.9,
            ],
            [
                'title' => 'The Lion King',
                'release_date' => '1994-06-24',
                'director' => 'Roger Allers, Rob Minkoff',
                'duration' => 88,
                'overall_rating' => 8.5,
            ],
            [
                'title' => 'Schindler\'s List',
                'release_date' => '1993-12-15',
                'director' => 'Steven Spielberg',
                'duration' => 195,
                'overall_rating' => 8.9,
            ],
            [
                'title' => 'Gladiator',
                'release_date' => '2000-05-05',
                'director' => 'Ridley Scott',
                'duration' => 155,
                'overall_rating' => 8.5,
            ],
            [
                'title' => 'Saving Private Ryan',
                'release_date' => '1998-07-24',
                'director' => 'Steven Spielberg',
                'duration' => 169,
                'overall_rating' => 8.6,
            ],
        ];



        foreach ($movies as $movie) {
            Movies::create($movie);
        }
    }
}
