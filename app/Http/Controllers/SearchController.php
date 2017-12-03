<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

use Illuminate\Support\Facades\Log;

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

    public function storeSearch(Request $request) {

    	$param = $request->get('value');

    	$user = \Auth::user();

    	$user->search_param = $param;

    	$user->save();

    }

}
