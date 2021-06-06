<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();
Route::post('/login', 'WelComeController@postLogin',function(){
    return redirect('/home');
});
Route::get('/home','WelComeController@getPostAll');
//Create post
Route::get('/post','PostController@create');
Route::post('home','PostController@store')->name('home.store');

//Detail post
Route::get('home/show/{post_id}','PostController@show');

//Comment post
Route::get('home/comment/{post_id}','CommantController@writeCommant');

// //register
// Route::post('/auth/register','RegisterController@create');

// //search
Route::get('/search', 'HomeController@search')->name('search');

//ADMIN
/*
Post
*/ 
//Login
Route::get('admin/login','AdminController@login');
Route::post('admin','AdminController@getAccAdmin');
//Home
Route::get('admin',function(){
    return view('loginAdmin');
});
//Post
Route::get('admin/post','AdminController@index');
//Create
Route::get('admin/post/create','AdminController@createPost');
Route::post('admin/post','AdminController@storePost');
//Update
Route::get('admin/post/update/{post_id}','AdminController@update');
Route::patch('admin/post/update/{post_id}','AdminController@editPost');
//Delete
Route::get('admin/post/delete/{post_id}','AdminController@destroyPost');

/*
User
*/ 
Route::get('admin/user','AdminController@getUser');
//Create user
Route::get('admin/user/create','AdminController@createUser');
Route::post('admin/user','AdminController@storeUser');
//Update
Route::get('admin/user/update/{user_id}','AdminController@updateUser');
Route::patch('admin/user/update/{user_id}','AdminController@editUser');
//Delete
Route::get('admin/user/delete/{user_id}','AdminController@destroyUser');
/*
Role 
 */
Route::get('admin/role','AdminController@getRole');
//Create role
Route::get('admin/role/create','AdminController@createRole');
Route::post('admin/role','AdminController@storeRole');
//Update
Route::get('admin/role/update/{role_id}','AdminController@updateRole');
Route::patch('admin/role/update/{role_id}','AdminController@editRole');
//Destroy
Route::get('admin/role/delete/{role_id}','AdminController@destroyRole');

/**
 * Category
 */
Route::get('admin/category','AdminController@getCategory');
//Create category
Route::get('admin/category/create','AdminController@createCategory');
Route::post('admin/category','AdminController@storeCategory');
//Update
Route::get('admin/category/update/{type_id}','AdminController@updateCategory');
Route::patch('admin/category/update/{type_id}','AdminController@editCategory');
//Destroy
Route::get('admin/category/delete/{type_id}','AdminController@destroyCategory');

Route::get('api/home','ApiController@index');
