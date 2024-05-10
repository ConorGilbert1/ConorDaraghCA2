<!-- resources/views/movies.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>Movies</h1>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Release Date</th>
                <th>Director</th>
                <th>Runtime</th>
                <th>Rating</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
            <tr>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->release_date }}</td>
                <td>{{ $movie->director }}</td>
                <td>{{ $movie->duration }} minutes</td>
                <td>{{ $movie->overall_rating }}</td>
                <td>
                    <a href="{{ route('reviews', ['id' => $movie->id]) }}">View Reviews</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
