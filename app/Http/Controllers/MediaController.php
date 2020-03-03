<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class MediaController extends Controller
{
    public function showVideo($id){
        $video = Post::find($id);

        // $video->userLiked->count();
        return view('media/video', [
            'video' => $video,
            'liked' => $video->userLiked->count() < 1 ? true : false
        ]);
    }
}
