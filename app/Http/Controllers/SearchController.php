<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

class SearchController extends Controller
{
    public function books(Request $request) {

    	$error = ['error' => 'No results found, please try with different keywords.'];

    	if ($request->has('q')) {

            $books = Book::search($request->get('q'))->get();

            return $books->count() ? $books : $error;

        }


    	return view('search');
    }
}
