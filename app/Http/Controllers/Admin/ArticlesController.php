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
        $articles = Article::paginate(20);
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
        // $writers = 
        return view('backend.articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleEditFormRequest $request)
    {
        if ($file = $request->file('image')) {
            $name = $file->getClientOriginalName();
        }
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

        return redirect('/admin/articles/create')->with('status', 'The aritcle has been created!');
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
        $selectedCategories = $article->categories->pluck('id')->toArray();
        $selectedTags = $article->tags->pluck('id')->toArray();
        return view('backend.articles.edit', compact('article', 'categories', 'selectedCategories'));
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
        // $article = Article::whereId($id)->firstOrFail();
        // $article->title = $request->get('title');
        // $article->content = $request->get('content');
        // $article->slug = Str::slug($request->get('title'), '-');

        // $article->save();
        // $article->categories()->sync($request->get('categories'));
        // $article->tags()->sync($request->get('tags'));

        if($file = $request->file('image')){

            $name = $file->getClientOriginalName();

            $post = Article::findOrFail($id);
            $post->title = $request->input('title');
            $post->content = $request->input('content');
            $post->slug = Str::slug($request->get('title'), '-');
            $post->image = $name;
            $post->save();

            $file->move('images/upload', $name);
        }
        else {
            // code...
            $post = Article::findOrFail($id);
            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->published_at = $request->input('published_at');
            $post->save();

        }

        if($post){
            return redirect('articles')->with('status', 'Article Updated!');
        }

        return redirect(action('Admin\articlesController@edit', $post->id))->with('status', 'The article has been updated!');
    }

    public function main() {
        $articles = Article::all()->orderBy('title', 'desc')->take(5)->get();
        $tags = Tag::all();
        return view('backend.articles.index', ['articles' => $articles, 'tags' => $tags]);
    }
}
