@extends('layouts.app')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-1 text-center bookCover">
			<img src="{{ $book->img_url }}" height="100%" width="100%">
		</div>
		<div class="col-sm-6">
			<div class="bookInfo">
				<h2 class="bookTitle text-center">{{ $book->title }}</h2>
				<h4 class="bookAuthor text-center">by {{ $book->author }}</h4>
				<ul class="bookStats text-left">
					<li class="bookStat">Published: {{ $book->published }}</li>
					<li class="bookStat">Pages: {{ $book->pages }}</li>
					<li class="bookStat">Time to Read: {{ \App\Http\Controllers\BookController::timeToRead($book->pages) }}</li>
				</ul>
				<p class="bookSummary">{{ $book->summary }}</p>
				<div class="bookButtons">


					@if((!$user->backlog()->where('book_id', $book->id)->exists()) or ($user->backlog()->where('book_id', $book->id)->where('read_again', false)->where('is_finished', true)->first()))
						<form method="post" action="/books/{{ $book->id }}/add" class="form-inline">
							{{ csrf_field() }}
							<input type="submit" value="Add to Backlog" class="btn btn-primary" class="addBacklog">
						</form>
					@else
						<form method="post" action="/books/{{ $book->id }}/remove" class="form-inline">
							{{ csrf_field() }}
							<input type="submit" value="Remove from Backlog" class="btn btn-danger" class="addBacklog">
						</form>
					@endif

 					@if(($user->backlog()->where('book_id', $book->id)->where('is_finished', false)->first()) or (!$user->backlog()->where('book_id', $book->id)->exists()))
					<form method="post" action="/books/{{ $book->id }}/read" class="form-inline">
						{{ csrf_field() }}
						<input type="submit" value="Mark as Read" class="btn btn-success" class="markRead">
					</form>
					@else
					<form method="post" action="/books/{{ $book->id }}/not-read" class="form-inline">
						{{ csrf_field() }}
						<input type="submit" value="Mark as Not Read" class="btn btn-success" class="markRead">
					</form>
					@endif

				</div>
			</div>
		</div>
	</div>
</div>


@endsection