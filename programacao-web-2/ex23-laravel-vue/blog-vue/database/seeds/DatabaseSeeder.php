<?php

use Illuminate\Database\Seeder;
use App\User as User;
use App\Post as Post;
use App\Comment as Comment;

class DatabaseSeeder extends Seeder{
    public function run(){
		DB::table('users')->delete();
		DB::table('posts')->delete();
		DB::table('comments')->delete();
	    User::create(array(
	    	'id'           => 1,
	        'name'         => 'Diogo Cezar',
	        'email'        => 'diogo@diogocezar.com',
	        'password'     => Hash::make('123')
	    ));
	    Post::create(array(
	    	'id'           => 1,
	        'name'         => 'Uma nova notícia por aqui',
	        'content'      => 'Testando a descrição de uma nova notícia.',
	    ));
	    Post::create(array(
	    	'id'           => 2,
	        'name'         => 'Uma outra notícia por aqui',
	        'content'      => 'Testando a descrição de uma notícia.',
	    ));
	    Post::create(array(
	    	'id'           => 3,
	        'name'         => 'Uma terceira notícia por aqui',
	        'content'      => 'Testando a descrição de uma notícia.',
	    ));
	    Comment::create(array(
	    	'id'           => 1,
	    	'post_id'      => 1,
	        'name'         => 'Diogo Cezar',
	        'content'      => 'Meu Primeiro Comentário',
	    ));
	    Comment::create(array(
	    	'id'           => 2,
	    	'post_id'      => 1,
	        'name'         => 'Diogo Cezar',
	        'content'      => 'Meu Segundo Comentário',
	    ));
	    Comment::create(array(
	    	'id'           => 3,
	    	'post_id'      => 1,
	        'name'         => 'Diogo Cezar',
	        'content'      => 'Meu Terceiro Comentário',
	    ));
    }
}
