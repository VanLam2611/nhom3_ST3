<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleEditFormRequest;
use App\Http\Requests\ArticleFormRequest;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
        return view('backend.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('backend.articles.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleEditFormRequest $request)
    {
        $user_id = Auth::user()->id;
        $aritcle = new Article(array(
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'slug' => Str::slug($request->get('title'), '-'),
            'user_id' => $user_id
        ));

        $aritcle->save();

        $aritcle->categories()->sync($request->get('categories'));
        $aritcle->tags()->sync($request->get('tags'));

        return redirect('/admin/aritcles/create')->with('status', 'The aritcle has been created!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::whereId($id)->firstOrFail();
        $categories = Category::all();
        $tags = Tag::all();
        $selectedCategories = $article->categories->pluck('id')->toArray();
        $selectedTags = $article->tags->pluck('id')->toArray();
        return view('backend.articles.edit', compact('article', 'categories', 'tags', 'selectedCategories', 'selectedTags'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, ArticleEditFormRequest $request)
    {
        $article = Article::whereId($id)->firstOrFail();
        $article->title = $request->get('title');
        $article->content = $request->get('content');
        $article->slug = Str::slug($request->get('title'), '-');

        $article->save();
        $article->categories()->sync($request->get('categories'));
        $article->tags()->sync($request->get('tags'));

        return redirect(action('Admin\articlesController@edit', $article->id))->with('status', 'The article has been updated!');
    }
}
