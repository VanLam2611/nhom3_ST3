<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     * *
     *@return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function mail()
    {
        $name = 'Thinh';
        Mail::to('thinnt.65.student.fit.tdc.edu.vn')->send(new SendMailable($name));
        return 'Email was sent';
    }
}
