<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','full_name', 'email', 'password', 'image_url', 'provider', 'provider_id', 'description'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function account_types(){
        return $this->belongsToMany('App\AccountType');
    }
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    public function likedPosts()
    {
        return $this->belongsToMany('App\User', 'likes', 'user_id', 'post_id')->withTimestamps();
    }
    
    public function followers()
    {
        return $this->belongsToMany('App\User', 'followers', 'user_id', 'follower_id')->withTimestamps();
    }

    public function followings()
    {
        return $this->belongsToMany('App\User', 'followers', 'follower_id', 'user_id')->withTimestamps();
    }
    
    public function followersTotal()
    {
        return $this->followers()->get()->count();
    }
    public function followingTotal()
    {
        return $this->followings()->get()->count();
    }
}
