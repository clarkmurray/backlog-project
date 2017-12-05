<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

use Illuminate\Support\Facades\DB;

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

    	$paramType = $request->get('type');

    	$user = \Auth::user();

    	$user->search_param = $param;

    	$user->search_type = $paramType;

    	$user->save();

    }

    public function validateBook(Request $request) {

        $title = $request->segment(3);

        $author = $request->segment(2);

        $isbn = $request->segment(4);

        $book = DB::table('books')->where('title', $title)->where('author', $author)->first();

        if ($book) {
            // Send to book blade
            return redirect('/books/' . $book->id);

        } else {
            // Send to APIBook
            // return redirect()->route('search/books', ['isbn' => $isbn]);
            return redirect('/search/books/' . $isbn);
            
        }

    }

    public function validateMovie(Request $request) {

        $title = $request->segment(3);

        $release = $request->segment(2);

        $release = substr($release, 0, 4);

        $id = $request->segment(4);

        $movie = DB::table('movies')->where('title', $title)->where('release', $release)->first();

        if ($movie) {
            // Send to movie blade
            return redirect('/movies/' . $movie->id);

        } else {
            // Send to APIMovie
            return redirect('/search/movies/' . $id);
            
        }
    }

}
