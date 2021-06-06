<?php

namespace App\Http\Controllers;

use Validator;
use App\Http\Requests\PostRequests as RequestsPostRequests;
use Illuminate\Http\Request;
use App\Post;
use App\Posttype;
use App\User;
use App\Role;
use Symfony\Component\VarDumper\Cloner\Data;

class AdminController extends Controller
{
    //Login account admin
    public function login(){
        return view('loginAdmin');
    }
    //Get name admin
    public function getAccAdmin(Request $request){
        $role = Role::all();
        foreach($role as $value){
            if($value->role_name == "admin"){
                $id_admin = $value->role_id;
            }
        }
        $user = User::all();
        foreach($user as $value){
            //$user->role_id == $id_admin;
            if($request->username == $value->email && password_verify($request->password, $value->password) && $value->role_id == $id_admin){

                $post = Post::all();
                return view('master.postManage', ['post' => $post,'nameAdmin'=>$value->name]);
            }
        }
        return view('loginAdmin');
    }
    //Home page of the admin
    public function index()
    {
        $post = Post::all();
        return view('master.postManage', ['post' => $post]);
    }
    //Move form create
    public function createPost()
    {
        $post = Posttype::all();
        $user = User::all();
        return view('master.createPost', ['postType' => $post,'user'=>$user]);
    }
    //Create post
    public function storePost(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|string',
            'content'=>'required|string'
        ],
        [
            'required' => ':attribute Không được để trống',
        ],
    );
        $post = new Post;
        $typePost = Posttype::all();
        $user = User::all();
        foreach ($typePost as $value) {
            if ($value->type_name == $request->type_name) {
                $id = $value->type_id;
            }
        }
        foreach ($user as $value) {
            if ($value->name == $request->name) {
                $user_id = $value->user_id;
            }
        }
        $post->title = $request->title;
        $post->content = $request->content;
        $post->type_id = $id;
        $post->user_id = $user_id;
        $post->save();
        return redirect('admin/post');
    }
    //
    public function update($post_id)
    {
        $post = Post::find($post_id);
        $typePost = Posttype::all();
        foreach ($typePost as $value) {
            if ($value->type_id == $post->type_id) {
                $id = $value->type_name;
            }
        }
        return view('master.updatePost', ['postId' => $post,'postType' => $typePost,'name'=>$id]);
    }
    //
    public function editPost(Request $request, $id){
        $this->validate($request,[
            'title'=>'required|string',
            'content'=>'required|string'
        ],
        [
            'required' => ':attribute Không được để trống',
        ],
    );
        $post = Post::find($id);
        $typePost = Posttype::all();
        foreach ($typePost as $value) {
            if ($value->type_name == $request->type_name) {
                $id = $value->type_id;
            }
        }
        $post->title = $request->title;
        $post->content = $request->content;
        $post->type_id = $id;
        $post->user_id = $request->user_id;
        $post->save();
        return redirect('admin/post');
    }
    //Delete
    public function destroyPost($id){
        $post = Post::find($id);
        $post->delete();
        return redirect('admin/post');
    }
    /*
    User
    */
    public function getUser(){
        $user = User::all();
        return view('master.userManage',['user'=>$user]);
    }
    //Create user
    public function createUser(){
        $role = Role::all();
        return view('master.createUser',['role'=>$role]);
    }
    //Store user
    public function storeUser(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|string',
            'email'=>'required|email',
            'address'=>'required|string',
        ],
        [
            'required' => 'Không được để trống',
        ],
    );
        $user = new User;
        $role = Role::all();
        foreach ($role as $value) {
            if ($value->role_name == $request->role_name) {
                $id = $value->role_id;
            }
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->address = $request->address;
        $user->role_id = $id;
        $user->save();
        return redirect('admin/user');
    }
    //Update user
    public function updateUser($id){
        $user = User::find($id);
        return view('master.updateUser',['user'=>$user]);
    }
    public function editUser(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        //$user->name = $request->name;
        $user->address = $request->address;
        $user->save();
        return redirect('admin/user');
    }
    //Destroy user
    public function destroyUser($id){
        $user = User::find($id);
        $user->delete();
        return redirect('admin/user');
    }
    /* 
    Role
    */
    //Get role
    public function getRole(){
        $role = Role::all();
        return view('master.roleManage',['role'=>$role]);
    }
    //Create role
    public function createRole(){
        return view('master.createRole');
    }
    public function storeRole(Request $request){
        $this->validate($request,[
            'role_name'=>'required|string',
        ],
        [
            'required' => 'Không được để trống',
        ],
    );
        $role = new Role;
        $role->role_name = $request->role_name;
        $role->save();
        return redirect('admin/role');
    }
    //Update role
    public function updateRole($id){
        $role = Role::find($id);
        return view('master.updateRole',['role'=>$role]);
    }
    public function editRole(Request $request, $id){
        $this->validate($request,[
            'role_name'=>'required|string',
        ],
        [
            'required' => 'Không được để trống',
        ],
    );
        $role = Role::find($id);
        $role->role_name = $request->role_name;
        $role->save();
        return redirect('admin/role');
    }
    //Destroy
    public function destroyRole($id){
        $role = Role::find($id);
        $role->delete();
        return redirect('admin/role');
    }

    /**
     * Category
     */
    public function getCategory(){
        $type = Posttype::all();
        return view('master.categoryManage',['category'=>$type]);
    }
    //Create category
    public function createCategory(){
        return view('master.createCategory');
    }
    public function storeCategory(Request $request){
        $type = new Posttype;
        $type->type_name = $request->type_name;
        $type->save();
        return redirect('admin/category');
    }
    //Update category
    public function updateCategory($id){
        $type = Posttype::find($id);
        return view('master.updateCategory',['type'=>$type]);
    }
    public function editCategory(Request $request, $id){
        $type = Posttype::find($id);
        $type->type_name = $request->type_name;
        $type->save();
        return redirect('admin/category');
    }
    //Destroy category
    public function destroyCategory($id){
        $type = Posttype::find($id);
        $type->delete();
        return redirect('admin/category');
    }
}
