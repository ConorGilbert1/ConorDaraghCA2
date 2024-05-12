<div class="actors-heading">Top Cast</div>

<div class="actor-container">
 @foreach($actors as $actor)
 <div class="actor">
  <img class="actor-image" src="{{ $actor->image_path }}"> </img></p>
  <div class="actor-name">{{ $actor->name }}</div>
  <div class="actor-character-name">{{ $actor->character_name }}</div>
 </div>
 @endforeach
</div>