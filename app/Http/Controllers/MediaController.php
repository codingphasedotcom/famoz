<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function showVideo(){
        return view('media/video');
    }
}
