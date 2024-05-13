<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movies;
use App\Models\MovieReview;

class MovieReviewsSeeder extends Seeder
{
 /**
  * Run the database seeds.
  *
  * @return void
  */
 public function run()
 {

  $movieIds = Movies::pluck('id')->all();

  $reviews = [
   [
    'username' => 'user1',
    'review_text' => 'Great movie, highly recommended!',
    'rating' => 4.5,
   ],
   [
    'username' => 'user2',
    'review_text' => 'Amazing film, loved every minute of it!',
    'rating' => 5.0,
   ],
   [
    'username' => 'user3',
    'review_text' => 'Fantastic movie, exceeded my expectations!',
    'rating' => 4.8,
   ],
   [
    'username' => 'user4',
    'review_text' => 'Absolutely brilliant, a must-watch!',
    'rating' => 4.7,
   ],
   [
    'username' => 'user5',
    'review_text' => 'Incredible, I was on the edge of my seat!',
    'rating' => 4.9,
   ],
   [
    'username' => 'user6',
    'review_text' => 'Superb acting and storytelling!',
    'rating' => 4.6,
   ],
   [
    'username' => 'user7',
    'review_text' => 'Masterpiece, can\'t get it out of my head!',
    'rating' => 4.8,
   ],
   [
    'username' => 'user8',
    'review_text' => 'One of the best movies I\'ve ever seen!',
    'rating' => 4.9,
   ],
   [
    'username' => 'user9',
    'review_text' => 'Breathtaking, left me speechless!',
    'rating' => 4.7,
   ],
   [
    'username' => 'user10',
    'review_text' => 'Outstanding, couldn\'t recommend it enough!',
    'rating' => 4.8,
   ],
   [
    'username' => 'user11',
    'review_text' => 'Absolutely loved it, a true gem!',
    'rating' => 4.6,
   ],
   [
    'username' => 'user12',
    'review_text' => 'Captivating from start to finish!',
    'rating' => 4.5,
   ],
   [
    'username' => 'user13',
    'review_text' => 'A rollercoaster of emotions!',
    'rating' => 4.7,
   ],
   [
    'username' => 'user14',
    'review_text' => 'Mesmerizing, couldn\'t take my eyes off the screen!',
    'rating' => 4.8,
   ],
   [
    'username' => 'user15',
    'review_text' => 'Phenomenal, I want to watch it again!',
    'rating' => 4.9,
   ],
   [
    'username' => 'user16',
    'review_text' => 'Powerful and thought-provoking!',
    'rating' => 4.6,
   ],
   [
    'username' => 'user17',
    'review_text' => 'Unforgettable, a new favorite!',
    'rating' => 4.9,
   ],
   [
    'username' => 'user18',
    'review_text' => 'Impressive, a must-see for everyone!',
    'rating' => 4.7,
   ],
   [
    'username' => 'user19',
    'review_text' => 'Stunning visuals and storytelling!',
    'rating' => 4.8,
   ],
   [
    'username' => 'user20',
    'review_text' => 'Riveting, kept me guessing until the end!',
    'rating' => 4.6,
   ],
   [
    'username' => 'user21',
    'review_text' => 'Exceptional, exceeded all expectations!',
    'rating' => 4.9,
   ],
   [
    'username' => 'user22',
    'review_text' => 'Incredible, a true cinematic masterpiece!',
    'rating' => 5.0,
   ],
   [
    'username' => 'user23',
    'review_text' => 'Brilliantly crafted, left me in awe!',
    'rating' => 4.8,
   ],
   [
    'username' => 'user24',
    'review_text' => 'Remarkable, couldn\'t have asked for more!',
    'rating' => 4.7,
   ],
   [
    'username' => 'user25',
    'review_text' => 'Spectacular, a new favorite for sure!',
    'rating' => 4.9,
   ],
   [
    'username' => 'user26',
    'review_text' => 'Exceptional, will definitely watch again!',
    'rating' => 4.8,
   ],
   [
    'username' => 'user27',
    'review_text' => 'A masterpiece, left me speechless!',
    'rating' => 4.9,
   ],
   [
    'username' => 'user28',
    'review_text' => 'Phenomenal, I was blown away!',
    'rating' => 4.7,
   ],
   [
    'username' => 'user29',
    'review_text' => 'Outstanding, couldn\'t get enough!',
    'rating' => 4.8,
   ],
   [
    'username' => 'user30',
    'review_text' => 'An unforgettable experience!',
    'rating' => 4.6,
   ],
   [
    'username' => 'user31',
    'review_text' => 'A true work of art!',
    'rating' => 4.9,
   ],
   [
    'username' => 'user32',
    'review_text' => 'Emotionally impactful, left me in tears!',
    'rating' => 4.7,
   ],
   [
    'username' => 'user33',
    'review_text' => 'Compelling and immersive!',
    'rating' => 4.8,
   ],
   [
    'username' => 'user34',
    'review_text' => 'A cinematic gem!',
    'rating' => 4.5,
   ],
   [
    'username' => 'user35',
    'review_text' => 'Truly remarkable, a must-watch!',
    'rating' => 4.9,
   ],
   [
    'username' => 'user36',
    'review_text' => 'Bravo, exceeded all expectations!',
    'rating' => 4.8,
   ],
  ];



  foreach ($movieIds as $movieId) {
   for ($i = 0; $i < 3; $i++) {
    $reviewIndex = ($movieId - 1) * 3 + $i;
    $review = $reviews[$reviewIndex];

    MovieReview::create([
     'movie_id' => $movieId,
     'username' => $review['username'],
     'review_text' => $review['review_text'],
     'rating' => $review['rating'],
    ]);
   }
  }
 }
}
