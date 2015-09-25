<?php

Route::get('/', function () {
      // return view('allpost');
});

// ==============  all posts/single posts  ============== //

Route::get('posts', function () {
  $posts = \App\Models\Post::all();
  return view('allpost')->with("posts",$posts);
});

Route::get('posts/{id}', function ($id) {
   $post = \App\Models\Post::find($id);
   return view('post', compact('post'));
});

// ==============  show user/create user  ============== //

Route::get('users/{id}', function ($id) {
  $user = \App\Models\User::find($id);
  return view('user', compact('user'));
});

Route::post('users', function(\App\Http\Requests\CreateUserRequest $request) {
    $user = \App\Models\User::create($request->all());
    $user->password = bcrypt('$user->password');
    $user->save();
    return redirect('users/'.$user->id);
});

// ==============  login/out/signup  ============== //

Route::get('users/create', function ($id) {
    return view('signup');
});

Route::get('login', function () {
  return view('login');
});

Route::post('login', function (Illuminate\Http\Request $request, \Illuminate\Contracts\Auth\Guard $auth) {
  $credential = $request->only('username', 'password');
    if ($auth->attempt($credential)) {
        return redirect('users/'.$auth->user()->id);
    } else {
      return redirect('login');
    }
});

Route::get('logout', function (\Illuminate\Contracts\Auth\Guard $auth) {
  $auth->logout();
  return redirect('posts');
});

// ===============  edit user info  =============== //

Route::get('users/{id}/edit', function ($id) {
  $user = \App\Models\User::find($id);
  return view('edit_user', compact('user'));
});

Route::put('users/{id}', function ($id, App\Http\Requests\UpdateUserRequest $request) {
  $user = \App\Models\User::find($id);
  $user->fill($request->all());
  $user->save();
  return redirect('users/'.$user->id);
});

// =============  add/remove comments  ============= //

Route::post('comments',function(\App\Http\Requests\CreateCommentRequest $request){
  $comment = \App\Models\Comment::create($request->all());
  $comment->save();
  return redirect('posts/'.$post->id);
});
