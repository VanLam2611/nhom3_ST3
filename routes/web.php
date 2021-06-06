<?php

use Illuminate\Support\Facades\Auth;
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
//     return view('welcome');
// });

// Enable the Manager middleware
Route::group(
    array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'manager'),
    function () {
        Route::get('/', 'PagesController@home');
        Route::get('users', ['as' => 'admin.user.index', 'uses' => 'UsersController\
        @index']);
        Route::get('users', 'UsersController@index');
        Route::get('roles', 'RolesController@index');
        Route::get('roles/create', 'RolesController@create');
        Route::post('roles/create', 'RolesController@store');
        Route::get('users/{id?}/edit', 'UsersController@edit');
        Route::post('users/{id?}/edit', 'UsersController@update');
        Route::get('articles', 'ArticlesController@index');
        Route::get('articles/create', 'ArticlesController@create');
        Route::post('articles/create', 'ArticlesController@store');
        Route::get('articles/{id?}/edit', 'ArticlesController@edit');
        Route::post('articles/{id?}/edit', 'ArticlesController@update');
        Route::get('categories', 'CategoriesController@index');
        Route::get('categories/create', 'CategoriesController@create');
        Route::post('categories/create', 'CategoriesController@store');
    }
);

Route::get('/', 'PagesController@home');
Route::get('home', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::post('/comment', 'CommentsController@newComment');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

// Registration routes
Route::get('users/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('users/register', 'Auth\RegisterController@register');
Auth::routes(['verify' => true]);

// Authentication routes
Route::get('users/logout', 'Auth\LoginController@logout');
Route::get('users/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('users/login', 'Auth\LoginController@login');

Route::get('/blog', 'BlogController@index');
Route::get('/blog/{slug?}', 'BlogController@show');

Route::post('upload', 'ImagesController@store');
Route::post('imageupload', 'ImagesController@storeImage');
Route::post('cropimage', 'ImagesController@storeCroppedImage');

