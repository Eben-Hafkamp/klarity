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

Route::get('login', 'PagesController@showLogin');

Route::get('posts', function () {
  $posts = \App\Models\Post::all();
  return view('allpost')->with("posts",$posts);
});

Route::get('posts/{id}', function ($id) {
   $post = \App\Models\Post::find($id);
  //  return $post;
   return view('post', compact('post'));

    //return $post->labels;
});

Route::get('labels', function () {
  return view('label');
});

Route::get('users/{id}', function ($id) {
  $user = \App\Models\User::find($id);
  // return $user;
  return view('user', compact('user'));
});

Route::post('users', function(\App\Http\Requests\CreateUserRequest $request) {
    $user = \App\Models\User::create($request->all());

    $user->password = bcrypt('$user->password');
    $user->save();

    return redirect('Users/'.$user->id);
});
