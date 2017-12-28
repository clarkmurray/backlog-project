<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TVController extends Controller
{
    public function index() {
    	$user = \Auth::user();
    	$tvShows = \Auth::user()->tvBacklog()->where('user_id', $user->id)->where('is_finished', false)->orWhere('watch_again', true)->get();
        $totalRuntime = 0;

        foreach ($tvShows as $tvShow) {
            $totalRuntime += $tvShow->runtime;
        }


    	return view('tv.watchlist', compact('tvShows', 'totalRuntime'));
    }
}
