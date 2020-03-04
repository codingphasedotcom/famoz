<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use DB;

class PageController extends Controller
{
    public function home(){
        if (Auth::check()) {
            // $userIds = 
            $authUser = Auth::user();
            // $followingIds[] = $authUser->followings()->pluck('user_id');
            // $posts = Post::whereIn('user_id', $followingIds[0])->latest()->paginate(2);

            // return dd($posts = DB::select("
            //     select * from (
            //     select id as post_id, title, user_id as creator_id, '' as reposter_id,  created_at from posts as p where user_id in (select user_id from followers where follower_id = 4)
            //     union 
            //     select   t.id as post_id, t.title, t.user_id, rt.user_id as reposter_id, rt.created_at
            //         from posts as t 
            //         inner join reposts as rt on rt.post_id = t.id where rt.user_id = 4
            //     ) 
            //     a order by created_at desc;
            // "));
            
            
            $query1 = DB::table('posts')
                ->select(
                    DB::raw("posts.id as post_id, posts.title, posts.user_id as creator_id, reposts.user_id as reposter_id, views, posts.image_url as post_image_url, users.image_url as user_image_url,
                    posts.likes_total as likes_total,
                    posts.reposts_total as reposts_total, users.username as user_username, reposts.created_at"))
                ->join('reposts', 'reposts.post_id', '=', 'posts.id')
                ->join('users', 'users.id', '=', 'reposts.user_id')
                // ->where('reposts.user_id', '=', Auth::user()->id)
                ->whereIn('reposts.user_id', function($query){
                    $query->select('user_id')->from('followers')->where('follower_id', Auth::user()->id);
                });

            $posts = DB::table('posts')->select(
            DB::raw("posts.id as post_id, title, user_id as creator_id, '' as reposter_id, views, posts.image_url as post_image_url, users.image_url as user_image_url,'' as likes_total, '' as reposts_total, users.username as user_username, posts.created_at"))
            ->whereIn('user_id', function($query){
                $query->select('user_id')->from('followers')->where('follower_id', Auth::user()->id);
            })
            ->union($query1)->orderBy('created_at', 'desc')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->paginate(10);
                // dd(DB::getQueryLog());

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
