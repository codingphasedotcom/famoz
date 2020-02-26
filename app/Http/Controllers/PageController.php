<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        if (Auth::check()) {
            return view('feed');
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
