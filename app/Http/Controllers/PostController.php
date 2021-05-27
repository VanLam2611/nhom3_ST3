<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Posttype;
use App\Role;
use App\User;

class PostController extends Controller
{
    //
    // protected $reviews;
    // protected $requests;

    // public function __construct(Post $reviews, Request $requests) {
    //     $this->reviews = $reviews;
    //     $this->requests = $requests;
    // }
    public function create() {
        $type = Posttype::all();
        $post = Post::all();
        
        return view('addPost',['post'=>$post,'types'=>$type]);
    }

    public static function store(Request $requests){
        $review = new Post;
        $review->title = $requests->title;
        $review->content = $requests->content;
        $review->type_id = $requests->type_id;
        $review->user_id = $requests->user_id = 2;
        $review->save();
        return redirect('home');
    }

    //Show
    public function show($post_id){
        $user = User::all();
        $type = Posttype::all();
        $post = Post::all();
        $role = Role::all();
        $showPro = Post::find($post_id);
        
        return view('show',['showPro' => $showPro,'post'=>$post,'type'=>$type,'user' => $user, 'role'=>$role]);
    }
    //Get type the post
    public function getTypePost($post_id){

    }
}
