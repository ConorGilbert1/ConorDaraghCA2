<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Actor;

class ActorSeeder extends Seeder
{
 /**
  * Run the database seeds.
  *
  * @return void
  */
 public function run()
 {

  $actors = [
   [
    'name' => 'Morgan Freeman',
    'character_name' => 'Ellis Boyd Redding',
    'movie_id' => '1',
    'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqFbOcmzP0oGoi32yKq4WoBmNH95DkpdzxRg&s'
   ],
   [
    'name' => 'Tim Robbins',
    'character_name' => 'Andy Dufresne',
    'movie_id' => '1',
    'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqFbOcmzP0oGoi32yKq4WoBmNH95DkpdzxRg&s'
   ],
   [
    'name' => 'Bob Gunton',
    'character_name' => 'Warden Norton',
    'movie_id' => '1',
    'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqFbOcmzP0oGoi32yKq4WoBmNH95DkpdzxRg&s'
   ],
  ];



  foreach ($actors as $actor) {
   Actor::create([
    'movie_id' =>
    $actor['movie_id'],
    'name' => $actor['name'],
    'character_name' => $actor['character_name'],
    'image_path' => $actor['image_path'],
   ]);
  }
 }
}
