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
                'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPZKaH89Gz3qldT4autrckeGwbE6L0Wca_SzgAR5X8ww&s'
            ],
            [
                'title' => 'The Godfather',
                'release_date' => '1972-03-24',
                'director' => 'Francis Ford Coppola',
                'duration' => 175,
                'overall_rating' => 9.2,
                'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlxzJYB-agG7aeOLNd0ds4ER1f43tu1EbWCQ&s'
            ],
            [
                'title' => 'The Dark Knight',
                'release_date' => '2008-07-18',
                'director' => 'Christopher Nolan',
                'duration' => 152,
                'overall_rating' => 9.0,
                'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpFRq5mjbpjTtcOj8_xLsGU2phwsJUeTWD0g&s'
            ],
            [
                'title' => 'Pulp Fiction',
                'release_date' => '1994-10-14',
                'director' => 'Quentin Tarantino',
                'duration' => 154,
                'overall_rating' => 8.9,
                'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuDbr20aqqdma05P7DhLUU1mScoNn0BbO0zA&s'
            ],
            [
                'title' => 'The Matrix',
                'release_date' => '1999-03-31',
                'director' => 'The Wachowskis',
                'duration' => 136,
                'overall_rating' => 8.7,
                'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFDNep3kOtOcRhsKxJ91mdkxUs25o2XxA7DmHI8Hfxx9NCEYcpFK2457lPgoZY118qp2k&usqp=CAU'
            ],
            [
                'title' => 'Forrest Gump',
                'release_date' => '1994-07-06',
                'director' => 'Robert Zemeckis',
                'duration' => 142,
                'overall_rating' => 8.8,
                'image_path' => 'https://lh5.googleusercontent.com/proxy/4int_K6SjtXTvuhsLnfyTArrZh8taTrGupNOtImQGkdWZ_G-Tb5tOiE6dxptD9U4zPjUqkSm0t5ZXE_XBv37UuUjiEj9g9r-NxmasGY'
            ],
            [
                'title' => 'Inception',
                'release_date' => '2010-07-16',
                'director' => 'Christopher Nolan',
                'duration' => 148,
                'overall_rating' => 8.8,
                'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-6sCmXY-Kjv9IJoFff10oTbIOndGZGXBl1g&s'
            ],
            [
                'title' => 'The Lord of the Rings: The Return of the King',
                'release_date' => '2003-12-17',
                'director' => 'Peter Jackson',
                'duration' => 201,
                'overall_rating' => 8.9,
                'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT22y9QI-eCxEOqbKfMvksq1cJGpMm2JtmSmg&s'
            ],
            [
                'title' => 'The Lion King',
                'release_date' => '1994-06-24',
                'director' => 'Roger Allers, Rob Minkoff',
                'duration' => 88,
                'overall_rating' => 8.5,
                'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkg20gK4Gu1jVhTM87CWiAC1EI5EUFL-kwfA&s'
            ],
            [
                'title' => 'Schindler\'s List',
                'release_date' => '1993-12-15',
                'director' => 'Steven Spielberg',
                'duration' => 195,
                'overall_rating' => 8.9,
                'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScWj4scwkn4muvLkZXMNOLj1T647YZrMf4ZA&s'
            ],
            [
                'title' => 'Gladiator',
                'release_date' => '2000-05-05',
                'director' => 'Ridley Scott',
                'duration' => 155,
                'overall_rating' => 8.5,
                'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJccTp5jY5ljPCBFP_SLzhA3hmv3R4ffrmbQ&s'

            ],
            [
                'title' => 'Saving Private Ryan',
                'release_date' => '1998-07-24',
                'director' => 'Steven Spielberg',
                'duration' => 169,
                'overall_rating' => 8.6,
                'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaSTctWXIXdHEEVvnmaCtlUYYUo4kIZLttBQ&s'
            ],
        ];



        foreach ($movies as $movie) {
            Movies::create($movie);
        }
    }
}
