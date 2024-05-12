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
        <div class="movie-details-left-container"> <img src="{{ $movie->image_path }}" />
          <div class="movie-rating-container">
            <div class="movie-imdb-rating"> IMDb RATING </div>
            <div class="movie-rating">
              <div class="fa fa-star" aria-hidden="true"></div>
              <div class="overall-rating">{{ $movie->overall_rating }}</div>
              <div class="overall-rating-scale"> /10</div>
            </div>
          </div>
          <div class="movie-details-text">
            <div class="movie-details-main-text">Release Date:</div>
            <div class="movie-details-sub-text"> {{ $movie->release_date }}</div>
          </div>
          <div class="movie-details-text">
            <div class="movie-details-main-text">Director:</div>
            <div class="movie-details-sub-text">{{ $movie->director }}</div>
          </div>
          <div class="movie-details-text">
            <div class="movie-details-main-text">Runtime:</div>
            <div class="movie-details-sub-text">{{ $movie->duration }} minutes</div>
          </div>

        </div>

        <div class="movie-details-right-container">
          @include('layouts.actors')
        </div>
      </div>
    </div>



    @include('layouts.reviews')


    @include('layouts.footer')
    <div>
</body>

</html>