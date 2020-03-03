<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class RepostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function repost($id){
        
        $post = Post::find($id);
        $post->reposts_total = $post->repost_total + 1;
        $post->save();

        $post->userReposted()->toggle([Auth::user()->id]);

        return redirect()->back();
    }
    public function norepost($id){
        
        $post = Post::find($id);
        $post->reposts_total = $post->repost_total - 1;
        $post->save();

        $post->userReposted()->toggle([Auth::user()->id]);

        return redirect()->back();
    }
}
