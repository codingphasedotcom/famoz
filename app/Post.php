<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function userLiked()
    {
        return $this->belongsToMany('App\User', 'likes', 'post_id', 'user_id')->withTimestamps();
    }
    
}
