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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hw', 'HelloController@hello')->name('hw');

Route::get('/posts', 'PostController@getPosts')->name('posts_all');
Route::get('/posts/{id}', 'PostController@getPost')->name('post_get');