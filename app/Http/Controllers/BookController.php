<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index() {
    	$user = \Auth::user();
    	$books = \Auth::user()->backlog()->where('user_id', $user->id)->get();
    	return view('home', compact('books'));
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
}
