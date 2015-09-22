<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
      // return view('allpost');
});

Route::get('posts', function () {
  $allpost = \App\Models\Post::all();
  return view('allpost', compact('post'));
});

Route::get('posts/{id}', function ($id) {
  $post = \App\Models\Post::find($id);
  return view('post', compact('post'));
});

Route::get('login', function () {
  return view('login');
});

Route::get('labels', function () {
  return view('label');
});
