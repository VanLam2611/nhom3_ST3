<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Route::middleware('auth')->group(function(){

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
Route::get('admin',function(){
    return view('homeAdmin');
});
Route::get('admin/user',function(){
    return view('master.userManage');
});


