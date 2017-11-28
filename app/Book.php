<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Book extends Model
{

	use Searchable;

	public function searchableAs() 
	{
		return 'title';
	}

	public function backlogged() 
	{
		return $this->belongsToMany('App\User', 'book_user', 'book_id', 'user_id')->withPivot('is_finished', 'read_again');
	}
}
