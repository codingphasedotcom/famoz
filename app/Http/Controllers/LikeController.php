<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;
use App\User;
use App\Post;
use Auth;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function likePost($id){
        
        $post = Post::find($id);
        $post->likes_total = $post->like_total + 1;
        $post->save();
        $post->userLiked()->toggle([Auth::user()->id]);

        return redirect()->back();
    }

    public function dislikePost($id){
        
        $post = Post::find($id);
        $post->likes_total = $post->like_total - 1;
        $post->save();
        $post->userLiked()->toggle([Auth::user()->id]);

        return redirect()->back();
    }
    
}
