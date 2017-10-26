<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class CommentController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $comments = Comment::with('post')->get();
        return view('admin.comment')->with('comments', $comments);
    }

    public function save(Request $request){
        $validatedData = $request->validate([
            'name'    => 'required|max:150',
            'content' => 'required',
            'post_id' => 'required'
        ],
        [
            'name.required'    => 'Informe um nome',
            'name.max'         => 'O título deve possuir no máximo 150 caracteres',
            'content.required' => 'Informe um conteúdo',
            'post_id.required' => 'Informe um post para o comentário'
        ]);

        $modelComment = new Comment();
        $modelComment->saveModel($request);

        return redirect('admin/comment');
    }

    public function form(){
        $posts = Post::all();
        return view('admin.comment_form')->with('posts', $posts);
    }
}
