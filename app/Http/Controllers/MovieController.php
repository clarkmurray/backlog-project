<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Movie;

class MovieController extends Controller
{
    public function index() {
    	$user = \Auth::user();
    	$movies = \Auth::user()->movieBacklog()->where('user_id', $user->id)->where('is_finished', false)->orWhere('watch_again', true)->get();


    	return view('movies.watchlist', compact('movies'));
    }

    public function store(Request $request) {

    	$movie = new \App\Movie;
    	$user = \Auth::user();

    	$movie->title = $request->input('movieTitle');
    	$movie->director = $request->input('director');
    	$movie->release = $request->input('release');
    	$movie->runtime = $request->input('runtime');
        $movie->description = $request->input('description');
        $movie->poster_url = $request->input('poster');

    	$movie->save();

    	$user->movieBacklog()->attach($movie);


    	return redirect('/movie-backlog');
    }

    public function show($id) {
        $movie = Movie::find($id);
        $user = \Auth::user();
        return view('movies.movie', compact('movie', 'user'));
    }

    public function addToBacklog($id) 
    {
        $movie = Movie::find($id);
        $user = \Auth::user();


        $exists = DB::table('movie_user')->where('movie_id', $movie->id)->where('user_id', $user->id)->first();


        // Check if movie is finished 
        if ($exists) {

            // If yes, mark as a re-watched

            DB::table('movie_user')->where('movie_id', $movie->id)->where('user_id', $user->id)->update(['watch_again' => true]);

            return redirect('/movie-backlog');

        } else {

            // If no, add the record to the movie_user table

            $user->movieBacklog()->attach($user, [
            'movie_id' => $movie->id,
            'user_id' => $user->id,
            'is_finished' => false,
            'watch_again' => false,

        ]);

            return redirect('/movie-backlog');

        }


    }

    public function markAsWatched($id) 
    {
        $movie = Movie::find($id);
        $user = \Auth::user();


        $reWatch = DB::table('movie_user')->where('movie_id', $movie->id)->where('user_id', $user->id)->where('watch_again', true)->first();

        $exists = DB::table('movie_user')->where('movie_id', $movie->id)->where('user_id', $user->id)->first();


        if (!$exists) {
            $user->movieBacklog()->attach($user, [
            'movie_id' => $movie->id,
            'user_id' => $user->id,
            'is_finished' => true,
            'watch_again' => false,
        ]);

            return back();
        }

        if ($reWatch) {
            $reWatch = DB::table('movie_user')->where('movie_id', $movie->id)->where('user_id', $user->id)->update(['watch_again' => false]);
        } 

        DB::table('movie_user')->where('movie_id', $movie->id)->where('user_id', $user->id)->update(['is_finished' => true]);

        return back();

    }

    public function removeWatched($id) {
        // remove from finished

        $user = \Auth::user();
        $movie = Movie::find($id);

        $remove = DB::table('movie_user')->where('movie_id', $movie->id)->where('user_id', $user->id)->where('watch_again', false)->first();

        if ($remove) {
            $user->movieBacklog()->detach($movie->id);
        }

        DB::table('movie_user')->where('movie_id', $movie->id)->where('user_id', $user->id)->update(['is_finished' => false]);


        return back();


    }

    public function watched() {

    	$user = \Auth::user();
    	$movies = \Auth::user()->movieBacklog()->where('user_id', $user->id)->where('is_finished', true)->get();

    	$totalTime = 0;

    	foreach($movies as $movie) {
    		$totalTime += $movie->runtime;
    	}

    	return view('movies.watched', compact('movies', 'totalTime'));
    }

    public function destroy($id) {
        $user = \Auth::user();
        $movie = Movie::find($id);


        $inBacklog = DB::table('movie_user')->where('movie_id', $movie->id)->where('is_finished', true)->first();


        // Check if the movie is finished

        if ($inBacklog) {

            // If yes, mark the movie as not being re-watched

            DB::table('movie_user')->where('movie_id', $movie->id)->where('user_id', $user->id)->update(['watch_again' => false]);

        } else {

            // If no, remove row from movie_user

            $user->movieBacklog()->detach($movie->id);
        }


        return back();
    }

    public function newMovie(Request $request){

        $movie = new \App\Movie;
        

        $movie->title = request('title');
        $movie->director = request('director');
        $movie->release = request('release');
        $movie->runtime = request('runtime');
        $movie->description = request('description');
        $movie->poster_url = 'https://image.tmdb.org/t/p/w150/' . request('poster_url');

        $movie->release = substr($movie->release, 0, 4);


        $movie->save(); 

        $this->addToBacklog($movie->id);
    }

    public function newMovieWatched(Request $request) {

        $movie = new \App\Movie;
        

        $movie->title = request('title');
        $movie->director = request('director');
        $movie->release = request('release');
        $movie->runtime = request('runtime');
        $movie->description = request('description');
        $movie->poster_url = 'https://image.tmdb.org/t/p/w150/' . request('poster_url');

        $movie->release = substr($movie->release, 0, 4);


        $movie->save();

        $this->markAsWatched($movie->id);

    }

    
}
