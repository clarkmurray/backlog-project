<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	public function backlogged() {
		return $this->belongsToMany('App\User', 'book_user', 'book_id', 'user_id');
	}
}
