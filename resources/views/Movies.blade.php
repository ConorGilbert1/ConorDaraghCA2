<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    @vite('resources/js/app.js')
</head>
<body>
    @include('layouts.app')
    <h1>Movies</h1>
    @foreach($movies as $movie)
    <div class="movie-container">
        <div class="movie">
            <h2>{{ $movie->title }}</h2>
            <p><strong>Release Date:</strong> {{ $movie->release_date }}</p>
            <p><strong>Director:</strong> {{ $movie->director }}</p>
            <p><strong>Runtime:</strong> {{ $movie->duration }} minutes</p>
            <p><strong>Rating:</strong> {{ $movie->overall_rating }}</p>
            <p><a href="{{ route('reviews', ['id' => $movie->id]) }}">View Reviews</a></p>
        </div>
    </div>
    @endforeach
</body>
</html>
