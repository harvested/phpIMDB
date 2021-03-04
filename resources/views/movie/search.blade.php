<div class="container">
	<div> Search results for: <b>{{$query}}</b></div>

    @foreach ($movies as $movie)
      <div>Title:  <a href="/movie/{{ $movie->movie_id }}" > {{ $movie->title() }} </a></div>
    @endforeach
</div>