@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <span>My Finished Books</span>
                    <span class="pull-right">Total Time Read: {{ \App\Http\Controllers\BookController::timeToRead($totalPages) }}</span>
                </div>

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
                                    <button type="submit" class="readAgain" data-toggle="tooltip" data-placement="bottom" title="Read again">
                                        <i class="fa fa-book fa-lg" aria-hidden="true"></i></td>
                                    </button>
                                    </form>
                                <td>
                                    <form method="post" action="/books/{{ $book->id }}/not-read" class="form-inline">
                                    {{ csrf_field() }}
                                    <button type="submit" class="remove" data-toggle="tooltip" data-placement="bottom" title="Remove from list">
                                        <i class="fa fa-minus-circle fa-lg" aria-hidden="true"></i>
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

</div>
@endsection