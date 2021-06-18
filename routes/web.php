<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Models\User;
use App\Models\Category;
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

//Get home for user register

Route::get('/home', function () {
    $article = Article::all();
    $categories = Category::all();
    return view('user.postUser', ['article' => $article, 'categories' => $categories]);
});
//Detail Articles
Route::get('/home/detail/{id}', function ($id) {
    $article = Article::find($id);
    $user = User::all();
    $categories = Category::all();
    foreach ($user as $value) {
        if ($article->user_id == $value->id) {
            $getUser = $value;
        }
    }
    return view('user.detailPost', ['article' => $article, 'user' => $getUser, 'categories' => $categories]);
});
//Get post by category
Route::get('/home/category/{id}', function ($id) {
    $category = Category::find($id);
    $article = Article::all();
    $categories = Category::all();
    $getArticle = array();
    foreach ($article as $value) {
        if ($category->id == $value->category_id) {
            array_push($getArticle, $value);
        }
    }
    return view('user.categoryBlog', ['article' => $getArticle, 'categories' => $categories]);
});
//Create Post
Route::get('home/create', function(){
    $categories = Category::all();
    return view('user.createPost',['categories' => $categories]);
});
