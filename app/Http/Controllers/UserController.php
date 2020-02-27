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
}
