<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
    public function profile($username){
        $homeProfile = false;
        $user;
        if (Auth::check()) {
            if (Auth::user()->username == $username){
                $homeProfile = true;
                $user = Auth::user();
                // return $user->likedPosts()->get();
            } else{
                $user = User::where('username', $username)->get()[0];
            }
        } else {
            $user = User::where('username', $username)->get();
            // return $user;
            if(sizeof($user) < 1) {
                return view('errors.404');
            }
            $user = $user[0];
        }
        // return $user;


        return view('users/profile', [
            "user" => $user,
            "homeProfile" => $homeProfile
        ]);
    }
    public function chooseAccountType()
    {
        return view('users/chooseAccount');
    }
    public function saveAccountType()
    {
        $user = Auth::user()->id;
        
        $user = User::find($user);

        $user->username = request('username');

        $user->save();
        $user->account_types()->syncWithoutDetaching(request('account_type_id'));
        return redirect('/');
    }
    public function follow($username)
    {
        $leader = User::where('username', $username)->first();
        // $follower = Auth::user()->id;
        
        // $follower = User::find($user);

        // $user->username = request('username');

        // $user->save();
        $leader->followers()->syncWithoutDetaching(Auth::user()->id);
        return redirect()->back();
    }
    public function unfollow($username)
    {
        $leader = User::where('username', $username)->first();
        // $follower = Auth::user()->id;
        
        // $follower = User::find($user);

        // $user->username = request('username');

        // $user->save();
        $leader->followers()->detach(Auth::user()->id);
        return redirect()->back();
    }
}
