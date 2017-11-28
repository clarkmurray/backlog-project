@extends('layouts.app')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-1 text-center bookCover">
			<img src="{{ $book->img_url }}" height="100%" width="100%">
		</div>
		<div class="col-md-6">
			<div class="bookInfo">
				<h2 class="bookTitle">{{ $book->title }}</h2>
				<h4 class="bookAuthor">by {{ $book->author }}</h4>
				<ul class="bookStats text-left">
					<li class="bookStat">Published: {{ $book->published }}</li>
					<li class="bookStat">Pages: {{ $book->pages }}</li>
					<li class="bookStat">Time to Read: {{ \App\Http\Controllers\BookController::timeToRead($book->pages) }}</li>
				</ul>
				<p class="bookSummary">{{ $book->summary }}</p>
				<div class="text-center">
					<form method="post" action="/books/{{ $book->id }}/add">
						{{ csrf_field() }}
						<input type="submit" value="Add to Backlog" class="btn btn-primary" class="addBacklog">
					</form>
					<form method="post" action="/books/{{ $book->id }}/read">
						{{ csrf_field() }}
						<input type="submit" value="Mark as Read" class="btn btn-success" class="markRead">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection