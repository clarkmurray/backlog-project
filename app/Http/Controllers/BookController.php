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
        $book->summary = $request->input('summary');
        $book->img_url = $request->input('img');

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


        $exists = DB::table('book_user')->where('book_id', $book->id)->where('user_id', $user->id)->first();


        // Check if book is finished 
        if ($exists) {

            // If yes, mark as a re-read

            DB::table('book_user')->where('book_id', $book->id)->where('user_id', $user->id)->update(['read_again' => true]);

            return redirect('home');

        } else {

            // If no, add the record to the book_user table

            $user->backlog()->attach($user, [
            'book_id' => $book->id,
            'user_id' => $user->id,
            'is_finished' => false,
            'read_again' => false,

        ]);

            return redirect('home');

        }


    }

    public function markAsRead($id) 
    {
        $book = Book::find($id);
        $user = \Auth::user();


        $reRead = DB::table('book_user')->where('book_id', $book->id)->where('user_id', $user->id)->where('read_again', true)->first();

        $exists = DB::table('book_user')->where('book_id', $book->id)->where('user_id', $user->id)->first();


        if (!$exists) {
            $user->backlog()->attach($user, [
            'book_id' => $book->id,
            'user_id' => $user->id,
            'is_finished' => true,
            'read_again' => false,
        ]);

            return back();
        }

        if ($reRead) {
            $reRead = DB::table('book_user')->where('book_id', $book->id)->where('user_id', $user->id)->update(['read_again' => false]);
        } 

        DB::table('book_user')->where('book_id', $book->id)->where('user_id', $user->id)->update(['is_finished' => true]);

        return back();

    }

    public function removeRead($id) {
        // remove from finished

        $user = \Auth::user();
        $book = Book::find($id);

        $remove = DB::table('book_user')->where('book_id', $book->id)->where('user_id', $user->id)->where('read_again', false)->first();

        if ($remove) {
            $user->backlog()->detach($book->id);
        }

        DB::table('book_user')->where('book_id', $book->id)->where('user_id', $user->id)->update(['is_finished' => false]);


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

    public function destroy($id) {
        $user = \Auth::user();
        $book = Book::find($id);


        $inBacklog = DB::table('book_user')->where('book_id', $book->id)->where('is_finished', true)->first();


        // Check if the book is finished

        if ($inBacklog) {

            // If yes, mark the book as not being re-read

            DB::table('book_user')->where('book_id', $book->id)->where('user_id', $user->id)->update(['read_again' => false]);

        } else {

            // If no, remove row from book_user

            $user->backlog()->detach($book->id);
        }


        return back();
    }

    public function wpmTest() {
        $user = \Auth::user();

        // The time read is used to calculate new value of $wpm and store it in database

        // Cancel test

        // Stretch goal: comprehension test

        return view('wpm', compact('user'));
    }

    public function storeWPM(Request $request) {

        $user = \Auth::user();

        $value = $request->get('value');

        $user->wpm = ceil($value);

        $user->save();
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

    public function newBook(Request $request){

        $book = new \App\Book;
        

        $book->title = request('title');
        $book->author = request('author');
        $book->published = request('published');
        $book->pages = request('pages');
        $book->summary = request('description');
        $book->img_url = request('cover');

        $book->published = substr($book->published, 0, 4);


        $book->save();

        $this->addToBacklog($book->id);
    }

    public function newBookRead(Request $request) {
        $book = new \App\Book;
        

        $book->title = request('title');
        $book->author = request('author');
        $book->published = request('published');
        $book->pages = request('pages');
        $book->summary = request('description');
        $book->img_url = request('cover');

        $book->published = substr($book->published, 0, 4);


        $book->save();

        $this->markAsRead($book->id);

    }

}
