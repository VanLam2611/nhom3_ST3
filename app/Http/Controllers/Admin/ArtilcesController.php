<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtilcesController extends Controller
{
    public function create() {
        return view('backend.articles.create');
    }
}
