<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Like;
use Auth;
use DB;

class MediaController extends Controller
{
    public function showVideo($id){
        $video = Post::find($id);
        $video->views = $video->views + 1;
        $video->save();
        
        // return Auth::user()->likedPosts;
        
        // $video->userLiked->count();
        return view('media/video', [
            'video' => $video,
            'liked' => DB::table('likes')
        ->whereUserId(Auth::user()->id)
        ->wherePostId($id)
        ->count() > 0,
            'reposted' => DB::table('reposts')
        ->whereUserId(Auth::user()->id)
        ->wherePostId($id)
        ->count() > 0,
        ]);
    }
}
