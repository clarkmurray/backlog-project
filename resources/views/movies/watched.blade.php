@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <span>Watched Movies</span>
                    <span class="pull-right">Total Time Watched: {{ \App\Http\Controllers\MovieController::timeToWatch($totalTime) }}</span>
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
                            <th>Director</th>
                            <th>Released</th>
                            <th>Runtime</th>
                        </thead>
                        <tbody>
                            @foreach ($movies as $movie) 
                                <tr>
                                <td></td>
                                <td><a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a></td>
                                <td>{{ $movie->director }}</td>
                                <td>{{ $movie->release }}</td>
                                <td>{{ \App\Http\Controllers\MovieController::timeToWatch($movie->runtime) }}</td>
                                <td>
                                    <form method="post" action="/movies/{{ $movie->id }}/add" class="form-inline">
                                    {{ csrf_field() }}
                                    <button type="submit" class="watchAgain" data-toggle="tooltip" data-placement="bottom" title="Watch again">
                                        <i class="fa fa-film fa-lg" aria-hidden="true"></i></td>
                                    </button>
                                    </form>
                                <td>
                                    <form method="post" action="/movies/{{ $movie->id }}/not-watched" class="form-inline">
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