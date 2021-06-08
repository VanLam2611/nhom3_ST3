<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Profile;
use App\Models\Comment;
use Spatie\Permission\Models\Role;
use App\Http\Requests\UserEditFormRequest;
use Illuminate\Support\Facades\Hash;
class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('backend.users.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::whereId($id)->firstOrFail();
        $roles = Role::all();
        $selectedRoles = $user->roles()->pluck('name')->toArray();
        return view('backend.users.edit', compact('user', 'roles', 'selectedRoles'));
    }

    public function update($id, UserEditFormRequest $request)
    {
        $profile = Profile::whereId($id)->firstOrFail();
        $user = User::whereId($id)->firstOrFail();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $profile->facebookUsername = $request->get('facebookUsername');
        $profile->address = $request->get('address');
        $profile->bio = $request->get('bio');
        $password = $request->get('password');
        if ($password != "") {
            $user->password = Hash::make($password);
        }
        $user->save();

        $profile->save();

        $user->syncRoles($request->get('role'));

        return redirect(action('Admin\UsersController@edit', $user->id))->with('status', 'The user has been updated!');
    }

    public function show($id)
    {
        $user = User::find($id);
        $profile = Profile::find($id);

        $comments = Comment::find($user->id);
        return view('backend.users.show', compact('user', 'profile', 'comments'));
    }
}
