<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\MovieListController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/movies', function () {
    return view('movies');
});
Route::get('/review', function () {
    return view('review');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/MovieList', [MovieListController::class, 'index'])->name('movies.list'); 

Route::get('/movies/{id}/edit', [MovieListController::class, 'edit'])->name('movies.edit');

Route::post('/moviesList', [MovieListController::class, 'store'])->name('movies.store');

Route::get('/movies/create', [MovieListController::class, 'create'])->name('movies.create');

Route::get('/movies', [MoviesController::class, 'index'])->name('Movies.index');

Route::get('/movies/{id}', [MovieListController::class, 'edit'])->name('reviews');

Route::get('movies/{list}/edit', 'MovieListController@edit')->name('movies.edit');


