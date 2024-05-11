 <div class="review-container">
   <div class="review-heading"> Reviews: </div>

   @foreach($reviews as $review)
   <div class="review">
     <h2>{{ $review->title }}</h2>
     <p><strong>Author:</strong> {{ $review->username }}</p>
     <p><strong>Review Text:</strong> {{ $review->review_text }}</p>
     <p><strong>Rating:</strong> {{ $review->rating }}</p>
   </div>
   @endforeach

 </div>