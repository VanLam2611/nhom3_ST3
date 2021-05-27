<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Posttype;
use App\Role;
use App\User;
use App\Commant;

class CommantController extends Controller
{
    //
    public function writeCommant($post_id){
        $cmt = new Commant;
        $type = Posttype::all();
        $post = Post::find($post_id);
        $commant = $cmt->where('post_id','like',$post['post_id'])->first();
        
        return view('comment',['post'=>$post,'type'=>$type,'commant'=>$commant]);
    }
}
