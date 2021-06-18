<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class BlogController extends Controller
{
    //
    public function index(){
        $article = Article::all();
        return view('user.header',['article'=>$article]);
    }
}
