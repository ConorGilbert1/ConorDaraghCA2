<?php

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\MovieReview;

class MovieReviewFactory extends Factory
{
 /**
  * The name of the factory's corresponding model.
  *
  * @var string
  */
 protected $model = MovieReview::class;

 /**
  * Define the model's default state.
  *
  * @return array
  */
 public function definition()
 {
  return [
   'movie_id' => $this->faker->numberBetween(1, 100),
   'review_id' => $this->faker->numberBetween(1, 1000),
   'username' => $this->faker->userName,
   'review_text' => $this->faker->paragraph,
   'rating' => $this->faker->randomFloat(1, 1, 10),
  ];
 }
}
