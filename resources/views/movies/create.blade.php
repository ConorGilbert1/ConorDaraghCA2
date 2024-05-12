@include('layouts.nav')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Movie</title>
    @vite('resources/js/app.js')


</head>

<body>
    <div class="main-container">
        @include('layouts.nav')
        <div class="movies-heading">
            Add New Movie
        </div>
        <div class="add-movie-form">
            <form action="{{ route('movies.store') }}" method="POST">
                @csrf
                <label for="movie_name">Title:</label>
                <input type="text" id="movie_name" name="movie_name" required><br>

                <label for="date_watched">Date Watched:</label>
                <input type="date" id="date_watched" name="date_watched" required><br>

                <label for="my_rating">My Rating:</label>
                <input type="number" id="my_rating" name="my_rating" min="1" max="10" required><br>

                <button type="submit">Add Movie</button>
            </form>
        </div>
        @include('layouts.footer')
    </div>
</body>

</html>
