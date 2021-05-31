<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Http\Resources\UserCollection;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List Articles
Route::get('articles', 'ArticleController@index');
// List Single Article
Route::get('article/{id}', 'ArticleController@show');
// Create a new Article
Route::post('article', 'ArticleController@store');
// Update Articles
Route::put('article', 'ArticleController@store');
// Delete Articles
Route::delete('article/{id}', 'ArticleController@destroy');

Route::get('/users', function() {
    return new UserCollection(User::all());
});
