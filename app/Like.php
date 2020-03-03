<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function users()
    {
        return $this->morphedByMany('App\User', 'like_post');
    }

    /**
     * Get all of the videos that are assigned this tag.
     */
    public function posts()
    {
        return $this->morphedByMany('App\Post', 'like_post');
    }
}
