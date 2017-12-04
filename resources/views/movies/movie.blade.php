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
					<li class="bookStat">Runtime: {{ $movie->runtime }}</li>
				</ul>
				<p class="bookSummary">{{ $movie->description }}</p>
				<div class="text-center">

					<form method="post" action="/movies/{{ $movie->id }}/add" class="form-inline">
						{{ csrf_field() }}
						<input type="submit" value="Add to Backlog" class="btn btn-primary" class="addBacklog">
					</form>
					<form method="post" action="/movies/{{ $movie->id }}/remove" class="form-inline">
							{{ csrf_field() }}
							<input type="submit" value="Remove from Backlog" class="btn btn-danger" class="addBacklog">
						</form>

					<form method="post" action="/movies/{{ $movie->id }}/watched" class="form-inline">
						{{ csrf_field() }}
						<input type="submit" value="Mark as Watched" class="btn btn-success" class="markWatched">
					</form>
					<form method="post" action="/movies/{{ $movie->id }}/not-watched" class="form-inline">
						{{ csrf_field() }}
						<input type="submit" value="Mark as Not Watched" class="btn btn-success" class="markRead">
					</form>

				</div>
			</div>
		</div>
	</div>
</div>


@endsection