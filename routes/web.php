<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Models\User;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
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

Route::get('/home/login', function () {
    return view('user.login.login');
});
Route::post('/home/login', function (Request $request) {
    $user = User::all();
    // Kiểm tra dữ liệu nhập vào
    // Nếu dữ liệu hợp lệ sẽ kiểm tra trong csdl
    foreach ($user as $value) {
        //$user->role_id == $id_admin;
        if ($request->username == $value->email && password_verify($request->password, $value->password)) {
            Session::put('user_id', $value->id);
            Session::put('username', $value->name);
            Session::put('email', $value->email);
            Session::put('address', $value->address);
            if($value)
            return Redirect::to('/home');
        }
    }
    Session::flash('error', 'Email hoặc mật khẩu không đúng!');
    return Redirect::to('/home/login');
});
//Logout
Route::get('home/logout', function () {
    Session::put('username', null);
    Session::put('categories', null);
    Session::put('username', null);
    Session::put('email', null);
    Session::put('address', null);
    Session::put('user_id', null);
    return Redirect::to('/home/login');
});
//Register
Route::get('home/register',function(){
    return view('user.login.register');
});
Route::post('home/register',function(Request $request){
    $user = new User;
    $user->name = $request->name;
    $user->email = $request->username;
    $user->password = bcrypt($request->password);
    $user->save();
    Session::put('signup',"Sign Up Success");
    return Redirect::to('home/login');
});

//Get home for user register

Route::get('/home', function () {

    $article = Article::simplePaginate(3);
    $categories = Category::all();
    Session::put('categories', $categories);
    return view('user.postUser', ['article' => $article]);
});
//Detail Articles
Route::get('/home/detail/{id}', function ($id) {
    $article = Article::find($id);
    $comment = Comment::all();
    $user = User::all();
    $data = [
        'name'=> [],
        'comment' => []
    ];
    $getComment = array();
    $getUsers = array();
    foreach($comment as $value){
        if($value->article_id == $article->id){
            array_push($getComment, $value);
            array_push($data['comment'], $value->content);
            foreach($user as $users){
                if($users->id == $value->user_id){
                    array_push($getUsers, $users->name);
                    array_push($data['name'], $users->name);
                }
            }
        }
        
    }
    $user = User::all();
    foreach ($user as $value) {
        if ($article->user_id == $value->id) {
            $getUser = $value;
        }
    }
    return view('user.detailPost', ['article' => $article, 'user' => $getUser, 'data'=>$data]);
    //return view('user.detailPost', ['article' => $article, 'user' => $getUser, 'comment'=>$getComment, 'userComment'=>$getUsers]);
});
//Get post by category
Route::get('/home/category/{id}', function ($id) {
    $category = Category::find($id);
    $article = Article::all();
    $getArticle = array();
    foreach ($article as $value) {
        if ($category->id == $value->category_id) {
            array_push($getArticle, $value);
        }
    }
    return view('user.categoryBlog', ['article' => $getArticle]);
});
//Add comment
Route::post('/home/category/{id}', function (Request $request) {
    $temp = Session::get('user_id');
    if ($temp != null) {
        $url = $_SERVER['PHP_SELF'];
        $id = $url . substr(-1, 1) * 1;
        $data = $request->validate([
            'content' => 'required|max:255',
            'article_id' => $id,
            'user_id' => $temp
        ]);
        $comment = Comment::create($data);
        return Response::json($comment);
    } else {
        return Redirect::to('/home/login')->send();
    }
});

Route::post('/home/detail/{id}', function (Request $request) {
    $url = $_SERVER['REQUEST_URI'];
    $article_ids = substr($url,-1, 1)*1;
    $temp = Session::get('user_id');
    if ($temp != null) {
        $comment = new Comment;
        $comment->content = $request->name;
        $comment->user_id = Session::get('user_id');
        $comment->article_id = $article_ids;
        $comment->save();
        $data = $request->all();
        #create or update your data here
        return response()->json(['success' => 'Ajax request submitted successfully', 'data' => $data]);
    } else {
        return Redirect::to('/home/login')->send();
    }
});
//Get profile of user
Route::get('home/profile/{id}',function($id){
    $user = User::find($id);
    $article = Article::all();
    $getArticles = array();
    foreach($article as $value){
        if($value->user_id == $user->id){
            array_push($getArticles,$value);
        }
    }
    return view('user.profileUser',['user'=>$user,'article'=>$getArticles]);
});
//Create Post
Route::get('home/create', function () {
    $temp = Session::get('user_id');
    if ($temp != null) {
        return view('user.createPost');
    } else {
        return Redirect::to('/home/login')->send();
    }
});
//Create post for user
Route::post('home/create',function(Request $request){
    $article = new Article;
    $article->title = $request->title;
    $article->category_id = $request->type_id;
    $article->slug = "https://toidicode.com/upload-files-trong-laravel-43.html";
    $article->content = $request->content;
    $article->user_id = Session::get('user_id');
    //Kiểm tra file
    if ($request->hasFile('fileUpload')){
        $file = $request->fileUpload;
        $article->image = $file->getClientOriginalName();
        $file->move('uploads', $file->getClientOriginalName());
    }
    else{
        $article->image = "TDC.png";
    }
    $article->status = $request->status;
    $article->featured = $request->feature;
    $article->save();
    if($article){
        Session::put('message',"The correct successful!");
    }
    else{
        Session::put('message',"The created of the article is fail!");
    }
    return Redirect::to('home/create');
});
