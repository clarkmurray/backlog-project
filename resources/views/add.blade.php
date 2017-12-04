@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <form class="form-horizonal" method="post" action="/books">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <span class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title" id="title">
                </span>
                <span class="form-group">
                    <label for="author">Author:</label>
                    <input type="text" class="form-control" name="author" id="author">
                </span>
                <span class="form-group">
                    <label for="published">Published:</label>
                    <input type="number" class="form-control" name="published" id="published">
                </span>
                <span class="form-group">
                    <label for="pages">Pages:</label>
                    <input type="number" class="form-control" name="pages" id="pages">
                </span>
                <span class="form-group">
                    <label for="summary">Summary:</label>
                    <input type="text" class="form-control" name="summary" id="summary">
                </span>
                <span class="form-group">
                    <label for="img">Image URL:</label>
                    <input type="text" class="form-control" name="img" id="img">
                </span>
                <div class="form-group">
                    <button type="submit" name="button" value="Add" class="btn btn-default">Add to Backlog</button>
                </div>


             </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <form class="form-horizonal" method="post" action="/movies/add">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <span class="form-group">
                    <label for="movieTitle">Title:</label>
                    <input type="text" class="form-control" name="movieTitle" id="movieTitle">
                </span>
                <span class="form-group">
                    <label for="director">Director:</label>
                    <input type="text" class="form-control" name="director" id="director">
                </span>
                <span class="form-group">
                    <label for="release">Release Year:</label>
                    <input type="number" class="form-control" name="release" id="release">
                </span>
                <span class="form-group">
                    <label for="runtime">Runtime:</label>
                    <input type="number" class="form-control" name="runtime" id="runtime">
                </span>
                <span class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" name="description" id="description">
                </span>
                <span class="form-group">
                    <label for="poster">Poster URL:</label>
                    <input type="text" class="form-control" name="poster" id="poster">
                </span>
                <div class="form-group">
                    <button type="submit" name="button" value="Add" class="btn btn-default">Add to Backlog</button>
                </div>


             </form>
        </div>
    </div>
</div>

 @endsection