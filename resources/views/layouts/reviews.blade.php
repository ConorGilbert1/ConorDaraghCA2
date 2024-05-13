 <div class="review-container">
   <div class="review-heading"> Reviews: </div>

   @foreach($reviews as $review)
   <div class="review">
     <h2>{{ $review->title }}</h2>
     <div class="review-text">
       <div class="review-main-text">Author: </div>
       <div class="review-sub-text">{{ $review->username }}</div>
     </div>
     <div class="review-text">
       <div class="review-main-text">Review Text: </div>
       <div class="review-sub-text">{{ $review->review_text }}</div>
     </div>
     <div class="review-text">
       <div class="review-main-text">Rating: </div>
       <div class="review-sub-text"> {{ $review->rating }}</div>
     </div>
   </div>
   @endforeach

 </div>