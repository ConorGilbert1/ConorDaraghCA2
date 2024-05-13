<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                <a href=" /movies/{{ $movie->id }}">
                    <img src="{{ $movie->image_path }}" />
                </a>
                @if(Auth::user())
                @if (Auth::user()->access_level == 2)
                <a href=" /create"> <i class="fa fa-plus" aria-hidden="true"></i>
                </a>
              
                <form action="/movies/{{ $movie->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="movie-del-button" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>

                <a href="/movies/edit/{{ $movie->id }}"><i class="fa fa-edit" aria-hidden="true"></i>
                </a>
                @endif
                @endif
            </div>



            @endforeach
        </div>



        @include('layouts.footer')
        <div>
</body>

</html>