<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', 'Front\FeedController@index')->name('front.feed');

Route::group(['prefix' => 'admin'], function(){
	Route::get('/', function(){
		return Redirect::to('/admin/dashboard');
	});
	Route::get('dashboard', 'Admin\DashboardController@index' )->name('admin.dashboard');
	Route::get('post',     'Admin\PostController@index'       )->name('admin.post');
	Route::get('comment',  'Admin\CommentController@index'    )->name('admin.comment');

	Route::get('post/form',     'Admin\PostController@form'   )->name('admin.post.form');
	Route::get('comment/form',  'Admin\CommentController@form')->name('admin.comment.form');

	Route::post('post/save',     'Admin\PostController@save'   )->name('admin.post.save');
	Route::post('comment/save',  'Admin\CommentController@save')->name('admin.comment.save');
});