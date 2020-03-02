<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use App\Post;

class PageController extends Controller
{
    public function home(){
        if (Auth::check()) {
            // $userIds = 
            $authUser = Auth::user();
            $followingIds[] = $authUser->followings()->pluck('user_id');
            $posts = Post::whereIn('user_id', $followingIds[0])->latest()->paginate(2);
            return view('feed', [
                'posts' => $posts
            ]);
        } else{
            return redirect('/trending');
        }
    }
    public function trending(){
        return view('trending');
    }
    public function discover(){
        return view('discover');
    }
}
