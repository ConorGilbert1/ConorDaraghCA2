<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\MovieReviewsController;
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
Route::get('/reviews', function () {
    return view('reviews');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/movies', [MoviesController::class, 'index'])->name('Movies.index');
Route::get('/movies/{id}', [MoviesController::class, 'show'])->name('movies.show');
Route::delete('/movies/{id}', [MoviesController::class, 'destroy'])->name('movies.destroy'); // Changed to use array syntax


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/review', MovieReviewsController::class);



Auth::routes();
