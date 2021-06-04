<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Response;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(10);
        return view('blog.index', compact('articles'));
        // $posts = Article::paginate(10);
        // $response = Response::json($posts,200);
        // return $response;
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
        return view('blog.show', compact('article', 'comments'));
    }
}
