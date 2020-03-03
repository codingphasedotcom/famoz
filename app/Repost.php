<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repost extends Model
{
    /**
     * connect all of the users that reposted
     */
    public function users()
    {
        return $this->morphedByMany('App\User', 'reposts');
    }

    /**
     * connect all of the posts that were reposted 
     */
    public function posts()
    {
        return $this->morphedByMany('App\Post', 'reposts');
    }
}
