@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <span>My Movies</span>
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
                            <th>Run Time</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach ($movies as $movie) 
                            <tr>
                            <td></td>
                            <td><a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a>
                            <td>{{ $movie->director }}</td>
                            <td>{{ $movie->release }}</td>
                            <td>{{ $movie->runtime }}</td>
                            <td>
                                <form method="post" action="/movies/{{ $movie->id }}/watched" class="form-inline">
                                {{ csrf_field() }}
                                    <button type="submit" class="checkOff">
                                        <i class="fa fa-check-square fa-lg" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form method="post" action="/movies/{{ $movie->id }}/remove" class="form-inline">
                                {{ csrf_field() }}
                                    <button type="submit" class="remove">
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