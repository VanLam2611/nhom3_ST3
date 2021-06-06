@extends('homeAdmin')

@section('homeadmin')

<div class="set-value">
<h3>CATEGORIES MANAGEMEMT</h3>
    <form action="{{asset('admin/category/create')}}" method="get">
        <button class="btn btn-primary mb-3" value="">New Category</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Category name</th>
                <th scope="col">Chuc nang</th>
            </tr>
        </thead>
        @foreach($category as $value)
        <tbody>
            <tr>
                <th scope="row">{{$value->type_id}}</th>
                <td>{{$value->type_name}}</td>
                <td>
                    <form action="{{asset('')}}admin/category/update/{{$value->type_id}}" method="get">
                        <button class="btn-success">Update</button>
                    </form>
                    <form action="{{asset('')}}admin/category/delete/{{$value->type_id}}" method="get">
                        <button class="btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>

@endsection