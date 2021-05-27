<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Posttype;
use App\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('search');
    }

    //search
    public function search(Request $request)
    {
        $post = new Post;
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $posts = Post::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('search', compact('posts'));
    }
}
