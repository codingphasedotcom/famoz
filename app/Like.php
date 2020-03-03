<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    /**
     * Get all of the users that are assigned this like.
     */
    public function users()
    {
        return $this->morphedByMany('App\User', 'likes');
    }

    /**
     * Get all of the videos that like this posts.
     */
    public function posts()
    {
        return $this->morphedByMany('App\Post', 'likes');
    }

    
}
