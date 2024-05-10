<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    \App\Models\Movies::create([
        'title' => 'The Matrix',
        'release_date' => '1999-03-31',
        'director' => 'Lana Wachowski, Lilly Wachowski',
        'duration' => '136',
        'overall_rating' => 9.5
    ]);
    
    
    }
}
