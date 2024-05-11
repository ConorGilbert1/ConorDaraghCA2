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
    'movie_id' => '1',
    'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqFbOcmzP0oGoi32yKq4WoBmNH95DkpdzxRg&s'
   ],
  ];



  foreach ($actors as $actor) {
   Actor::create([
    'movie_id' =>
    $actor['movie_id'],
    'name' => $actor['name'],
    'image_path' => $actor['image_path'],
   ]);
  }
 }
}
