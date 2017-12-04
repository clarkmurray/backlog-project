<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Movie extends Model
{
    use Searchable;

	public function searchableAs() 
	{
		return 'title';
	}

	public function movieBacklogged() 
	{
		return $this->belongsToMany('App\User', 'movie_user', 'movie_id', 'user_id')->withPivot('is_finished', 'watch_again');
	}
}
