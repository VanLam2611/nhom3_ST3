<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Redirect;
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

    public function post()
    {
        return view('addPost');
    }
    public function getPostAll()
    {
        $user = User::all();
        $type = Posttype::all();
        $post = Post::all();
        $role = Role::all();
        //$dataUser = $userLogin->where('email', 'like', $request['email'])->first();
        return view('welcome', ['post' => $post, 'type' => $type, 'user' => $user, 'role' => $role,'users' => DB::table('users')->paginate(3)]);
    }
    public function role()
    {
        $role = Role::all();
        return view('welcome', ['role' => $role]);
    }

    public function postLogin(Request $request)
    {

        $arr = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($arr)) {
            
            //$userLogin = new User;
            $user = User::all();
            $type = Posttype::all();
            $post = Post::all();
            $role = Role::all();
            //$dataUser = $userLogin->where('email', 'like', $arr['email'])->first();
            return view('welcome', ['post' => $post, 'type' => $type, 'user' => $user, 'role' => $role]);
            
        } else {
            return route('login');
        }
    }
    
    //Register
    public function addUser($name, $email, $pass)
    {
        DB::table('users')->insert([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($pass),
            'address' => 'America',
            'role_id' => '1',
        ]);
    }
}
