<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');//welcome.blade.php
// });
// Route::get('/admin','WelComeController@admin')->middleware('checkage');
// Route::get('/','WelComeController@hello');
// Route::get('/hello','WelComeController@about');
// Route::get('/pack','WelComeController@pack');


Auth::routes();

//Route::middleware('auth')->group(function(){
   
    Route::get('/home', 'WelComeController@loginCorrect');
    Route::get('', 'WelComeController@getLoginUser');
    Route::post('', 'WelComeController@postLoginUser');
    Route::get('/post','WelComeController@post');

    Route::get('/home','WelComeController@getPostAll');
    Route::get('/home','WelComeController@getCustomer');
//});