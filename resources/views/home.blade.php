@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <span>My Books</span>
                    <span class="pull-right">Time to Read: {{ \App\Http\Controllers\BookController::timeToRead($totalPages) }}</span>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                    <table class="table table-condensed">
                        <thead>
                            <th></th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Published</th>
                            <th>Pages</th>
                            <th>Estimated Time</th>
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
                            <td>{{ \App\Http\Controllers\BookController::timeToRead($book->pages) }}</td>
                            <td>
                                <form method="post" action="/books/{{ $book->id }}/read" class="form-inline">
                                {{ csrf_field() }}
                                    <button type="submit" class="checkOff" data-toggle="tooltip" data-placement="bottom" title="Mark as Read">
                                        <i class="fa fa-check-square fa-lg" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form method="post" action="/books/{{ $book->id }}/remove" class="form-inline">
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


</div>
@endsection
