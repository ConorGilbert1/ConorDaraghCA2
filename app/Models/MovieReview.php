<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieReview extends Model
{
 use HasFactory;

 protected $primaryKey = ['movie_id', 'review_id'];

 protected $fillable = [
  'movie_id',
  'review_id',
  'username',
  'review_text',
  'rating',
 ];

 public $incrementing = false;

 public $timestamps = false;
}
