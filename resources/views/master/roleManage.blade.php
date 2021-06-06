@extends('homeAdmin')

@section('homeadmin')

<div class="set-value">
    <h3 class="animate-title">ROLE MANAGEMEMT</h3>
    <form action="{{asset('admin/role/create')}}" method="get">
        <button class="btn btn-primary mb-3" value="">New Role</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Role name</th>
                <th scope="col" width="200px">Chuc nang</th>
            </tr>
        </thead>
        @foreach($role as $value)
        <tbody>
            <tr>
                <th scope="row">{{$value->role_id}}</th>
                <td>{{$value->role_name}}</td>
                <td class="text-center">
                    <form action="{{asset('')}}admin/role/update/{{$value->role_id}}" method="get">
                        <button class="btn-success">Update</button>
                    </form>
                    <form action="{{asset('')}}admin/role/delete/{{$value->role_id}}" method="get">
                        <button class="btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>

@endsection