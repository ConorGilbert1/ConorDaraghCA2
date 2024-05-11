<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;
use App\Models\MovieReview;
use App\Models\Actor;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movies::all();
        return view('movies')->with('movies', $movies);
    }

    public function show($id)
    {

        $movie = Movies::find($id);
        $reviews = MovieReview::where('movie_id', $id)->get();
        $actors = Actor::where('movie_id', $id)->get();
        return view('MovieDetails', compact('movie', 'reviews', 'actors'));
    }
}
