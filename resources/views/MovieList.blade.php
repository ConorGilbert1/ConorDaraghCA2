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
            My Movie List
        </div>
        
        <div class="movie-container">
            
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Date Watched</th>
                        <th>My Rating</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                   
                    @foreach($list as $l)
                    <tr>
                        <td>{{ $l->movie_name }}</td>
                        <td>{{ $l->date_watched }}</td>
                        <td>{{ $l->my_rating }}</td>
                        <td>
                            <form action="{{ route('movies.edit', $l->id) }}">
                                <button type="submit">Edit</button>
                            </form>
                        </td>
                        <td>
                           
                            
                            
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

       
        @include('layouts.footer')
    </div>
</body>

</html>
