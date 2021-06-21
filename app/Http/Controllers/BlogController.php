<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;


class BlogController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $articles = Article::paginate(5);
        return view('blog.index', compact('articles', 'categories'));
    }
     /**
     * Display the specified resource.
     *
     * @param int:$slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $article = Article::whereSlug($slug)->firstOrFail();
        return view('blog.show', compact('article'));
        // $comments = $article->comments()->get();
        // return view('blog.show', compact('article', 'comments'));
    }
  
}
