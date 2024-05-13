@vite('resources/js/app.js')
@include('layouts.nav')

<div class="main-container">

<div class=form-content-container>
<h1 class="form-header">Edit Movie</h1>
    <div class="reglog-form-container">
    <form method="POST" action="{{ route('movies.update', $movie->id) }}">
        @csrf
        @method('PUT')

        <div class="group-container">
        <label class="reglog-label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $movie->title }}" required>
       
        </div>
        <div class="group-container">
        <label class="reglog-label for="release_date">Release Date:</label>
        <input type="date" id="release_date" name="release_date" value="{{ $movie->release_date }}" required>
       </div>

        <div class="group-container">
        <label class="reglog-label for="director">Director:</label>
        <input type="text" id="director" name="director" value="{{ $movie->director }}" required>
      </div>

        <div class="group-container">
        <label class="reglog-label for="duration">Duration (minutes):</label>
        <input type="number" id="duration" name="duration" value="{{ $movie->duration }}" required>
        
        </div>
        <div class="group-container">
        <label class="reglog-label for="overall_rating">Overall Rating:</label>
        <input type="number" id="overall_rating" name="overall_rating" step="0.1" min="0" max="10" value="{{ $movie->overall_rating }}" required>
        
        </div>
        <div class="group-container">
        <label class="reglog-label for="image_path">Image URL:</label>
        <input type="text" id="image_path" name="image_path" value="{{ $movie->image_path }}" required>
        
</div>
    <div class="btn-div">   <button type="submit">Submit</button></div>
     
    </form>
    </div>
</div>

    @include('layouts.footer')
</div>