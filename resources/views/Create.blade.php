@vite('resources/js/app.js')
<div class="main-container">
@include('layouts.nav')

<div class=form-content-container>
<h1 class="form-header">Create Movie</h1>

<div class="reglog-form-container">
    <form method="POST" action="{{ route('movies.store') }}">
        @csrf
        <div class="group-container">
        <label class="reglog-label" for="title">Title:</label>
        <input class="reglog-input"  type="text" id="title" name="title" required>
</div>
        <div class="group-container">
        <label  class="reglog-label" for="release_date">Release Date:</label>
        <input class="reglog-input"  type="date" id="release_date" name="release_date" required>
</div>
        <div class="group-container">
        <label   class="reglog-label" for="director">Director:</label>
        <input class="reglog-input"  type="text" id="director" name="director" required>
</div>
        <div class="group-container">
        <label  class="reglog-label" for="duration">Duration (minutes):</label>
        <input  class="reglog-input" type="number" id="duration" name="duration" required>
</div>
        <div class="group-container">
        <label  class="reglog-label" for="overall_rating">Overall Rating:</label>
        <input class="reglog-input"  type="number" id="overall_rating" name="overall_rating" step="0.1" min="0" max="10" required>
</div>
        <div class="group-container">
        <label  class="reglog-label" for="image_path">Image URL:</label>
        <input class="reglog-input" type="text" id="image_path" name="image_path" required>
</div>
<div class="btn-div">   <button type="submit">Submit</button></div>
    </form>
    </div>
</div>
@include('layouts.footer')
</div>


