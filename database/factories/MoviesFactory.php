<?php

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Movies;

class MoviesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movies::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'release_date' => $this->faker->date(),
            'director' => $this->faker->name,
            'duration' => $this->faker->numberBetween(60, 240), // Assuming movie durations are between 1 hour to 4 hours
            'overall_rating' => $this->faker->randomFloat(1, 0, 10), // Random rating between 0 and 10 with 1 decimal place
        ];
    }
}
