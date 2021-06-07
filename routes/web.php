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
// Authentication routes
Route::get('users/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('users/login', 'Auth\LoginController@login');
Route::get('users/logout', 'Auth\LoginController@logout')->name('logout');
// Registration routes
Route::get('users/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('users/register', 'Auth\RegisterController@register');
Route::get('/', function () {
    return view('welcome');
})->middleware('verified');
Auth::routes(['verify' => true]);
Route::get('users/logout', 'Auth\LoginController@logout');
// Password reset routes
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
// If email verification is enabled
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::get('/blog', 'BlogController@index');
Route::get('/blog/{slug?}', 'BlogController@show');
//Route::get('/home', 'HomeController@index')->name('home');

Route::auth();

Route::post('upload', 'ImagesController@store');
Route::post('imageupload', 'ImagesController@storeImage');
Route::post('cropimage', 'ImagesController@storeCroppedImage');

Route::get('/home', 'HomeController@index');

Route::get('json', function () {
    return App\Models\Article::paginate();
});
