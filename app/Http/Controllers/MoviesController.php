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


    public function destroy($id)
    {
        // Find the movie by its ID
        $movie = Movies::find($id);

        // Check if the movie exists
        if (!$movie) {
            // If the movie doesn't exist, redirect back with an error message
            return redirect()->back()->with('error', 'Movie not found.');
        }

        // Delete the movie
        $movie->delete();

        // Redirect back to the movies index page with a success message
        return redirect()->route('Movies.index')->with('success', 'Movie deleted successfully.');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|string',
            'release_date' => 'required|date',
            'director' => 'required|string',
            'duration' => 'required|integer',
            'overall_rating' => 'required|numeric',
            'image_path' => 'nullable|string',
        ]);


        $movie = Movies::create($validatedData);


        return response()->json(['message' => 'Movie created successfully', 'data' => $movie], 201);
    }

    
    public function create()
{
    return view('create');
}

public function edit($id)
{
    $movie = Movies::find($id);
    return view('edit', compact('movie'));
}



public function update(Request $request, $id)
{
    // Find the movie by its ID
    $movie = Movies::find($id);

    // Validate the request data
    $validatedData = $request->validate([
        'title' => 'required|string',
        'release_date' => 'required|date',
        'director' => 'required|string',
        'duration' => 'required|integer',
        'overall_rating' => 'required|numeric',
        'image_path' => 'nullable|string',
    ]);

    // Update the movie with the validated data
    $movie->update($validatedData);

    // Return a JSON response indicating success
    return response()->json(['message' => 'Movie updated successfully', 'data' => $movie], 201);
}
}
