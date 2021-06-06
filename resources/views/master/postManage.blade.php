@extends('homeAdmin')

@section('homeadmin')

<div class="set-value">
    <form action="{{asset('admin/post/create')}}" method="get">
        <button class="btn btn-primary mb-3" value="">New Post</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title Post</th>
                <th scope="col">Content Post</th>
                <th scope="col" width="10%">Type Post</th>
                <th scope="col" width="10%">User Post</th>
                <th scope="col" width="10%">Image</th>
                <th scope="col" width="10%">CN</th>
            </tr>
        </thead>
        @foreach($post as $value)
        <tbody>
            <tr>
                <th scope="row">{{$value->post_id}}</th>
                <td>{{$value->title}}</td>
                <td>{{$value->content}}</td>
                <td>{{$value->getPostType->type_name}}</td>
                <td>{{$value->getUser->name}}</td>
                <td><img src="../../images/user.jpg" alt=""></td>
                <td>
                    <form action="{{asset('')}}admin/post/update/{{$value->post_id}}" method="get">
                        <button class="btn-success">Update</button>
                    </form>
                    <form action="{{asset('')}}admin/post/delete/{{$value->post_id}}" method="get">
                        <button class="btn-danger">Delete</button>
                    </form>
                </td>

            </tr>
        </tbody>
        @endforeach
    </table>
</div>
<div id="app">
</div>
        
@endsection