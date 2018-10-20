<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(Request $request){
        $posts=Post::all();
        return view('posts')->with('posts',$posts);
    }
}
