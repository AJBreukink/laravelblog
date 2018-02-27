<?php

//read/show posts
Route::get('/', 'PostsController@index');
Route::get('settings', 'ProfileController@settings');

Route::get('/all', 'PostsController@showAll');

Route::get('posts/show/{id}', 'PostsController@show');

Route::get('posts/user/{id}', 'PostsController@FromUser');

Route::post('/posts/search/', 'PostsController@search' );

//create update delete blogposts
Route::post('/posts', 'PostsController@store');

Route::get('posts/create', 'PostsController@create');

Route::get('/edit/post/{id}','PostsController@edit');

Route::patch('/edit/post/{id}','PostsController@update');

Route::delete('/delete/post/{id}','PostsController@destroy');

//categories
Route::get('/categories/{category}', 'CategoriesController@index');

Route::get('posts/create/category', 'CategoriesController@create');

Route::post('posts/create/category', 'CategoriesController@store');

//comments
Route::post('/posts/show/{id}/comments', 'CommentsController@store' );

Route::delete('/posts/delete/{id}', [
    'as' => 'delete_comment_path',
    'uses' => 'CommentsController@delete'
]);

//Users;registration/login
Route::get('/signup', 'RegistrationController@create');

Route::post('/signup', 'RegistrationController@store');

Route::get('/logon', 'SessionsController@create');

Route::post('/logon', 'SessionsController@store');

Route::get('/changepassword', 'SessionsController@changepassword');

Route::post('/changepassword', 'RegistrationController@edit');

Route::get('/logout', 'SessionsController@destroy');

//Users;followers
Route::get('/user/{username}', 'ProfileController@show');

Route::post('profile/{profileId}/follow', 'ProfileController@followUser')->name('user.follow');

Route::post('/{profileId}/unfollow', 'ProfileController@unFollowUser')->name('user.unfollow');

Auth::routes();

//Route::get('/login', 'LoginController@create');
//Route::get('/register', 'RegistrationController@create');

//Route::get('/home', 'HomeController@index')->name('home');
