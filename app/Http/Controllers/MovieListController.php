<?php

namespace App\Http\Controllers;
use App\Models\MovieList;
use Illuminate\Http\Request;

class MovieListController extends Controller
{
    public function index()
    {
        $list = MovieList::all();
        return view('MovieList')->with('list', $list);
    }
    public function create()
    {
        return view('movies.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'movie_name' => 'required',
            'my_rating' => 'required',
            'date_watched' => 'required|date',
           
        ]);

        $list = new MovieList;
        $list->movie_name = $request->movie_name;
        $list->my_rating = $request->my_rating;
        $list->date_watched = $request->date_watched;
        $list->save();

        return redirect()->route('movies.list')
            ->with('success', 'Movie has been created successfully.');
    }
    public function edit(MovieList $list)
    {
        return view('movies.edit', compact('list'));
    }
    public function update(Request $request, MovieList $list)
    {
        $request->validate([
            'movie_name' => 'required',
            'my_rating' => 'required',
            'date_watched' => 'required|date',
        ]);

        $list->update($request->all());

        return redirect()->route('movies.list')
            ->with('success', 'Movie has been updated successfully.');
    }
    public function destroy($id)
{
    $list = MovieList::findOrFail($id);
    $list->delete();
    return redirect()->route('movies.list')->with('success', 'Movie has been deleted successfully.');
}

}
