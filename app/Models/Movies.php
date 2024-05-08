<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;
    protected $table = 'movies';
    protected $fillable = ['movie_name', 'release_date', 'director', 'duration','overall_rating'];
}
