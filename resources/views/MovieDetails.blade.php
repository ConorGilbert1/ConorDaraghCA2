<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title> {{ $movie->title }}</title>
 @vite('resources/js/app.js')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
 <div class="main-container">
  @include('layouts.nav')
  <div class="movies-heading">
   {{ $movie->title }}
  </div>

  <div class="movie-details-container">
   <div class="movie-details">
    <div class="movie-details-left-container"> <img src="{{ $movie->image_path }}" /></div>
    <div class="movie-details-right-container">
     <p><strong>Release Date:</strong> {{ $movie->release_date }}</p>
     <p><strong>Director:</strong> {{ $movie->director }}</p>
     <p><strong>Runtime:</strong> {{ $movie->duration }} minutes</p>
     <div class="movie-rating-container">
      <div class="movie-imdb-rating"> IMDb RATING </div>
      <div class="movie-rating">
       <div class="fa fa-star" aria-hidden="true"></div>
       <div class="overall-rating">{{ $movie->overall_rating }}</div>
       <div class="overall-rating-scale"> /10</div>
      </div>
     </div>
    </div>
   </div>
  </div>
  @include('layouts.reviews')


  @include('layouts.footer')
  <div>
</body>

</html>