<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class PostController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $posts = Post::get();
        return view('admin.post')->with('posts', $posts);
    }

    public function save(Request $request){
        $validatedData = $request->validate([
            'name'    => 'required|max:150',
            'content' => 'required'
        ],
        [
            'name.required'    => 'Informe um nome',
            'name.max'         => 'O título deve possuir no máximo 150 caracteres',
            'content.required' => 'Informe um conteúdo',
        ]);

        $modelPost = new Post();
        $modelPost->saveModel($request);

        return redirect('admin/post');
    }

    public function form(){
        return view('admin.post_form');
    }
}
