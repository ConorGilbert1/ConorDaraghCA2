 <div class="review-container">
   <div class="review">
     @foreach($reviews as $review)
     <h2>{{ $review->title }}</h2>
     <p><strong>Movie ID:</strong> {{ $review->movie_id }}</p>
     <p><strong>Review ID:</strong> {{ $review->review_id }}</p>
     <p><strong>Username:</strong> {{ $review->username }}</p>
     <p><strong>Review Text:</strong> {{ $review->review_text }}</p>
     <p><strong>Rating:</strong> {{ $review->rating }}</p>
     @endforeach

   </div>
 </div>