<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function uploadVideo(){
        return view('media/upload-video');
    }
    public function saveVideo(){
        function getYoutubeId($link){
            $re = '/(?:youtube(?:-nocookie)?\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/m';
            $str = $link;
            preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);
            return $matches[0][1];
        }
        

        
        $user = new Post();
        $user->title = request('title');
        $user->post_type_id = 1;
        $user->description = request('description');
        $user->youtube_id = getYoutubeId(request('youtube_url'));
        $user->user_id = Auth::user()->id;
        $user->image_url = getYoutubeId(request('youtube_url'));
        $user->save();
        return redirect('/');
        // return view('media/upload-video');
    }
}
