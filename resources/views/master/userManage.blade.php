@extends('homeAdmin')

@section('homeadmin')

<div class="set-value">
    <form action="{{asset('admin/user/create')}}" method="get">
        <button class="btn btn-primary mb-3" value="">New User</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col" width="10%">Password</th>
                <th scope="col" width="10%">Address</th>
                <th scope="col" width="10%">Role</th>
                <th scope="col" width="10%">Chuc nang</th>
            </tr>
        </thead>

        <tbody>
        @foreach($user as $value)
            <tr>
                <th scope="row">{{$value->user_id}}</th>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->password}}</td>
                <td>{{$value->address}}</td>
                <td>{{$value->role->role_name}}</td>
                <td>
                    <form action="{{asset('')}}admin/user/update/{{$value->user_id}}" method="get">
                        <button class="btn-success">Update</button>
                    </form>
                    <form action="{{asset('')}}admin/user/delete/{{$value->user_id}}" method="get">
                        <button class="btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection