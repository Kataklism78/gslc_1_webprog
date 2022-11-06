<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function test(){
        $img = "avatar.jpg";

        return view('home', compact('img'));
    }
}
