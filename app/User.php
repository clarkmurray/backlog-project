<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function backlog() {
        return $this->belongsToMany('App\Book', 'book_user', 'user_id', 'book_id')->withPivot('is_finished', 'read_again');
    }

    public function movieBacklog() {
        return $this->belongsToMany('App\Movie', 'movie_user', 'user_id', 'movie_id')->withPivot('is_finished', 'watch_again');
    }

}
