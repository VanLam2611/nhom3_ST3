<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
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

//Get home for user register

Route::get('/home',function(){
    $article = Article::all();
    return view('user.header',['article'=>$article]);
});

