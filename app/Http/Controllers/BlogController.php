<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;


class BlogController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('date','desc')->simplePaginate(3);
        return view('blog.index', compact('articles'));
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
        $comments = $article->comments()->get();
        $count = $article->comments()->count();
        return view('blog.show', compact('article', 'comments', 'count'));
    }
}
