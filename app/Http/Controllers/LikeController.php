<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;
use App\User;
use App\Post;
use Auth;

class LikeController extends Controller
{
    public function likePost($id){
        
        $post = Post::find($id);
        // $follower = Auth::user()->id;
        
        // $follower = User::find($user);

        // $user->username = request('username');

        // $user->save();
        $post->userLiked()->toggle([Auth::user()->id]);

        return redirect()->back();
    }
    public function dislikePost($id){
        
        $post = Post::find($id);
        // $follower = Auth::user()->id;
        
        // $follower = User::find($user);

        // $user->username = request('username');

        // $user->save();
        $post->userLiked()->syncWithoutDetaching(Auth::user()->id);

        return redirect()->back();
    }
}
