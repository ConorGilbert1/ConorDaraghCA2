<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Movie</title>
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @include('layouts.nav')
</head>

<body>
    <div class="main-container">
        <div class="movies-heading">
            Edit Movie
        </div>

        
            <form action="{{ route('movies.edit', $list) }}" method="POST">

            @csrf
            @method('PUT')

            <label for="movie_name">Title:</label>
            <input type="text" id="movie_name" name="movie_name" value="{{ $list->movie_name }}" required><br>

            <label for="date_watched">Date Watched:</label>
            <input type="date" id="date_watched" name="date_watched" value="{{ $list->date_watched }}" required><br>

            <label for="my_rating">My Rating:</label>
            <input type="number" id="my_rating" name="my_rating" min="1" max="10" value="{{ $list->my_rating }}" required><br>

            <button type="submit">Update</button>
        </form>
    </div>
    @include('layouts.footer')
    </div>
</body>

</html>
