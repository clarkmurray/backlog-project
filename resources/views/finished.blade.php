@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading">My Finished Books</div>

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
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach ($books as $book) 
                                <tr>
                                <td></td>
                                <td><a href="/books/{{ $book->id }}">{{ $book->title }}</a></td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->published }}</td>
                                <td>{{ $book->pages }}</td>
                                <td>
                                    <form method="post" action="/books/{{ $book->id }}/add" class="form-inline">
                                    {{ csrf_field() }}
                                    <button type="submit">
                                        <i class="fa fa-book" aria-hidden="true"></i></td>
                                    </button>
                                    </form>
                                <td>
                                    <form method="post" action="/books/{{ $book->id }}/not-read" class="form-inline">
                                    {{ csrf_field() }}
                                    <button type="submit">
                                        <i class="fa fa-minus-circle" aria-hidden="true"></i>
                                    </button>
                                    </form>
                                </td>
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
                    <p>Total Time Read: {{ \App\Http\Controllers\BookController::timeToRead($totalPages) }}</p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection