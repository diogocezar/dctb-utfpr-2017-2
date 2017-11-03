<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model{
    protected $table = 'comments';

    public function saveModel($request){
    	$this->name    = $request->name;
    	$this->content = $request->content;
    	$this->post_id = $request->post_id;
    	$this->save();
    }

    public function post(){
        return $this->belongsTo('App\Post');
    }
}