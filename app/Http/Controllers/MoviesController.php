<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;

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
   
}
