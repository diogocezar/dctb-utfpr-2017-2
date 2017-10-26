<?php

namespace App\Http\Controllers\Front;

use App\Post;
use App\Comment;
use App\Http\Controllers\Controller as Controller;

use Illuminate\Http\Request;

class FeedController extends Controller{
    public function index(){
        $posts = Post::with('comments')->get();
        return view('front.feed')->with('posts', $posts);
    }
}
