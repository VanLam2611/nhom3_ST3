<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        return redirect('/admin/test');
    }
    public function homes(){
        return view('homeAdmin');
    }
}
