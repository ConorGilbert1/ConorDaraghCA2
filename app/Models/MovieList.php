<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieList extends Model
{
    use HasFactory;
    use HasFactory;
    public $timestamps = false;
    protected $table = 'moviesList';
    protected $fillable = ['movie_name', 'my_rating', 'date_watched'];
}
