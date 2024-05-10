<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function show($id)
    {
        // Fetch movie details based on ID and pass it to the view
        $movie = Movie::find($id);
        // Assuming you have a 'reviews.blade.php' view file
        return view('reviews', compact('movie'));
    }
}
