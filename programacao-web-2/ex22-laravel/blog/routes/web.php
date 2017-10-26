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
	Route::get('dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');
});