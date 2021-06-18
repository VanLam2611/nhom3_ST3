<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class UserController extends Controller
{
    public function getAllArticles(){
        $article = Article::all();
        return view('user.header',['article'=>$article]);
    }
}
