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

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('users/register', 'Auth\RegisterController@showRegistrationForm')->name('login');
Route::post('users/register', 'Auth\RegisterController@register');
Route::get('users/logout', 'Auth\LoginController@logout');
Route::get('users/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('users/login', 'Auth\LoginController@login');

// Enable the Manager middleware
Route::group(
    array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'manager'),
    function () {
        Route::get('users', ['as' => 'admin.user.index', 'uses' => 'UsersController\
        @index']);
        Route::get('users', 'UsersController@index');
        Route::get('roles/create', 'RolesController@create');
        Route::post('roles/create', 'RolesController@store');

        Route::get('articles', 'ArticlesController@index');
        Route::get('articles/create', 'ArticlesController@create');
        Route::post('articles/create', 'ArticlesController@store');
        Route::get('articles/{id?}/edit', 'ArticlesController@edit');
        Route::post('articles/{id?}/edit', 'ArticlesController@update');
    }
);
