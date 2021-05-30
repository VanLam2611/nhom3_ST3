<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoleFormRequest;

/**
 * App/Http/Controllers/Admin/RolesController.php
 * Author: Thịnh
 * 
 */
class RolesController extends Controller
{
    /**
     * Role create action
     * Author: Thịnh
     */
    public function create()
    {
        return view('backend.roles.create');
    }

    /**
     * Store a newly created role in storage.
     *
     * @param  \App\Http\Requests\RoleFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleFormRequest $request)
    {
        $role = new Role(array(
            'name' => $request->get('name'),
            'display_name' => $request->get('display_name'),
            'description' => $request->get('description')
        ));

        $role->save();

        return redirect('admin/roles/create')->with(
            'status',
            'A new role has been created!'
        );
    }
    /**
     * To view all roles
     * 
    */
    public function index()
    {
        $roles = Role::all();
        return view('backend.roles.index', compact('roles'));
    }
}
