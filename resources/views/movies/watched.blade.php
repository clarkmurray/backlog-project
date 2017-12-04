@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <span>Watched Movies</span>
                    <span class="pull-right">Total Time Watched: </span>
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
                                <td>{{ $movie->runtime }}</td>
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