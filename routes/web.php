<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Notifications\NewUserRegistered;
use App\Models\User;
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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::post('/comment', 'CommentController@newComment');

Route::get('/blog', 'BlogController@index');
Route::get('/blog/{slug?}', 'BlogController@show');

Route::get('/', function () {
    return view('home');
    })->middleware('verified');
Auth::routes(['verify' => true]);

Route::get('/send/email', 'HomeController@mail');

Route::get('/notify', function () {
    User::find(1)->notify(new NewUserRegistered);
    return view('notify');
    });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
