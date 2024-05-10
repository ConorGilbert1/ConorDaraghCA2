<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'movies';
    protected $fillable = ['title', 'release_date', 'director', 'duration', 'overall_rating'];
}
