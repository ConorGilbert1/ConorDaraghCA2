<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="main-container">
        @include('layouts.nav')
        <div class="movies-heading">
            Movies
        </div>
        
    
        <div class="movie-container">
            @foreach($movies as $movie)
            <div class="movie">
                <h2>{{ $movie->title }}</h2>
                <p><strong>Release Date:</strong> {{ $movie->release_date }}</p>
                <p><strong>Director:</strong> {{ $movie->director }}</p>
                <p><strong>Runtime:</strong> {{ $movie->duration }} minutes</p>
                <p><strong>Rating:</strong> {{ $movie->overall_rating }}</p>
                <img src="{{ $movie->image_path }}" />
                <p><a href="/movies/{{ $movie->id }}">View Reviews</a></p>
                
            </div>
            @endforeach
        </div>


        @include('layouts.footer')
        <div>
</body>

</html>