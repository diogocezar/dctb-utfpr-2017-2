<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    protected $table = 'posts';

    public function saveModel($request){
    	$this->name    = $request->name;
    	$this->content = $request->content;
    	$this->save();
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }
}