<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book;

class BookController extends Controller
{
    public function index() {
    	$user = \Auth::user();
    	$books = \Auth::user()->backlog()->where('user_id', $user->id)->where('is_finished', false)->orWhere('read_again', true)->get();
    	$wpm = $user->wpm;
    	$totalPages = 0;

    	foreach ($books as $book) {
    		$totalPages += $book->pages;
    	}

    	return view('home', compact('books', 'wpm', 'totalPages'));
    }

    public function store(Request $request) {

    	$book = new \App\Book;
    	$user = \Auth::user();

    	$book->title = $request->input('title');
    	$book->author = $request->input('author');
    	$book->published = $request->input('published');
    	$book->pages = $request->input('pages');

    	$book->save();

    	$user->backlog()->attach($book);


    	return redirect('home');
    }

    public function create() {
    	return view('add');
    }

    public function show($id) {
        $book = Book::find($id);
        $user = \Auth::user();
        return view('book', compact('book', 'user'));
    }

    public function addToBacklog($id) 
    {
        $book = Book::find($id);
        $user = \Auth::user();

        // If book is not in backlog
        $user->backlog()->attach($book);

        // If book IS in backlog
        $user->backlog()->detach($book);

        return redirect('home');
    }

    public function markAsRead($id) 
    {
        $book = Book::find($id);
        $user = \Auth::user();
        $backlog = $user->backlog()->where('book_id', $book->id);

        $backlog->updateExistingPivot($book->id, ['is_finished' => !$backlog->first()->getOriginal('pivot_is_finished')]);

        return back();

    }

    public function finished() {
    	$user = \Auth::user();
    	$books = \Auth::user()->backlog()->where('user_id', $user->id)->where('is_finished', true)->get();
    	$totalPages = 0;

    	foreach ($books as $book) {
    		$totalPages += $book->pages;
    	}
    	return view('finished', compact('books', 'totalPages'));
    }

    public static function timeToRead($pages) {
    	$user = \Auth::user();
    	$wpm = $user->wpm;


    	$words = $pages * 350;
    	$time = $words/$wpm;
    	$hours = floor($time/60);
    	$minutes = $time % 60;

    	if ($minutes > 0) {
    		return $hours . 'h, ' . $minutes . 'm';
    	}

    	return $hours . ' hours';

    }
}
