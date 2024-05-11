<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
 use HasFactory;

 public $timestamps = false;

 protected $primaryKey = 'actor_id';

 protected $fillable = [
  'movie_id',
  'name',
  'image_path',
 ];
}
