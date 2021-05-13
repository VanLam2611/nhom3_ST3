<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Posttype;
use App\Role;
use App\User;

class WelComeController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index($id="User"){
        return 'User: '.$id;
    }
    public function admin(Request $request){
        return 'Hello '.$request->user;
    }
    public function post(){
        return view('addPost');
    }
    //Login correct
    public function loginCorrect(){
        // $user = User::all();
        // $type = Posttype::all();
        // $post = Post::all();
        // $role = Role::all();
        // return view('welcome',['post'=>$post,'type'=>$type,'user' => $user, 'role'=>$role]);
        return view('welcome');
    }
    // public function hello(){
    //     return view('master.layout');
    // }
    // public function about(){
    //     return view('pages.main');
    // }
    // public function pack(){
    //     return view('pages.pack');
    // }
    public function getPostAll(){
        $type = Posttype::all();
        $post = Post::all();
        return view('welcome',['post'=>$post,'type'=>$type]);
    }
    public function role(){
        $role = Role::all();
        return view('welcome',['role'=>$role]);
    }
    public function getCustomer(){
        $user = User::all();
        $type = Posttype::all();
        $post = Post::all();
        $role = Role::all();
        return view('welcome',['post'=>$post,'type'=>$type,'user' => $user, 'role'=>$role]);
    }
    public function getLoginUser(Request $request){
        return view('welcome');

    }
    public function postLoginUser(Request $request){

        $arr = ['email' => $request->email,
                'password' => $request->password];
        if(Auth::attempt($arr)){
            //Right
            return view('welcome');
        }
        else{
            dd("Ko ddung");
            return view('login');

        }
    }
    //Register
    public function addUser($name,$email,$pass){
        DB::table('users')->insert([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($pass),
            'address' => 'America',
            'role_id' => '1',
        ]);
    }
}
