@extends('layouts.app')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-1 text-center bookCover">
			<img src="{{ $movie->poster_url }}" height="100%" width="100%">
		</div>
		<div class="col-md-6">
			<div class="bookInfo">
				<h2 class="bookTitle">{{ $movie->title }}</h2>
				<h4 class="bookAuthor">Directed by {{ $movie->director }}</h4>
				<ul class="bookStats text-left">
					<li class="bookStat">Released: {{ $movie->release }}</li>
					<li class="bookStat">Runtime: {{ \App\Http\Controllers\MovieController::timeToWatch($movie->runtime) }}</li>
				</ul>
				<p class="bookSummary">{{ $movie->description }}</p>
				<div class="bookButtons text-center">


					@if((!$user->movieBacklog()->where('movie_id', $movie->id)->exists()) or ($user->movieBacklog()->where('movie_id', $movie->id)->where('watch_again', false)->where('is_finished', true)->first()))
					<form method="post" action="/movies/{{ $movie->id }}/add" class="form-inline">
						{{ csrf_field() }}
						<input type="submit" value="Add to Backlog" class="btn btn-primary" class="addBacklog">
					</form>
					@else
					<form method="post" action="/movies/{{ $movie->id }}/remove" class="form-inline">
							{{ csrf_field() }}
							<input type="submit" value="Remove from Backlog" class="btn btn-danger" class="addBacklog">
					</form>
					@endif



					@if(($user->movieBacklog()->where('movie_id', $movie->id)->where('is_finished', false)->first()) or (!$user->movieBacklog()->where('movie_id', $movie->id)->exists()))
					<form method="post" action="/movies/{{ $movie->id }}/watched" class="form-inline">
						{{ csrf_field() }}
						<input type="submit" value="Mark as Watched" class="btn btn-success" class="markWatched">
					</form>
					@else
					<form method="post" action="/movies/{{ $movie->id }}/not-watched" class="form-inline">
						{{ csrf_field() }}
						<input type="submit" value="Mark as Not Watched" class="btn btn-success" class="markRead">
					</form>
					@endif

				</div>
			</div>
		</div>
	</div>
</div>


@endsection