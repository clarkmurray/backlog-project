@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">My Books</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <th></th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Published</th>
                            <th>Pages</th>
                            <th>Estimated Time</th>
                        </thead>
                        <tbody>
                            @foreach ($books as $book) 
                            <tr>
                            <td></td>
                            <td><a href="/books/{{ $book->id }}">{{ $book->title }}</a></td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->published }}</td>
                            <td>{{ $book->pages }}</td>
                            <td>{{ \App\Http\Controllers\BookController::timeToRead($book->pages) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>Time to Read: {{ \App\Http\Controllers\BookController::timeToRead($totalPages) }}</p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
