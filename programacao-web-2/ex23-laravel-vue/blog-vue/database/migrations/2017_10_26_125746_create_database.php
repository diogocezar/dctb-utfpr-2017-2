<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabase extends Migration
{
    public function up(){
        Schema::create('posts', function(Blueprint $table){
            $table->increments('id');
            $table->string('name', 150);
            $table->mediumText('content');
            $table->timestamps();
        });
        Schema::create('comments', function(Blueprint $table){
            $table->increments('id');
            $table->integer('post_id')->unsigned();
            $table->string('name', 150);
            $table->mediumText('content');
            $table->timestamps();
            $table->foreign('post_id')->references('id')->on('posts');
        });
    }

    public function down(){
        Schema::drop('posts');
        Schema::drop('comments');
    }
}
