<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class TV extends Model
{
    use Searchable;

	public function searchableAs() 
	{
		return 'tv';
	}

	public function tvBacklogged() 
	{
		return $this->belongsToMany('App\User', 'tv_user', 'tv_id', 'user_id')->withPivot('is_finished', 'watch_again');
	}
}
