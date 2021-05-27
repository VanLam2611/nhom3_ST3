@extends('homeAdmin')

@section('homeadmin')

<div class="set-value">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title Post</th>
                <th scope="col">Content Post</th>
                <th scope="col" width="10%">Type Post</th>
                <th scope="col" width="10%">User Post</th>
                <th scope="col" width="10%">CN</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark asfkjasfkajsbkajs kasncasjknaksjs</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea maiores pariatur recusandae perspiciatis cupiditate consequuntur sint, delectus quaerat inventore velit nostrum quod. Rerum recusandae vero sed maxime? Accusamus, dignissimos magni.</td>
                <td>Education</td>
                <td>Jack ma </td>
                <td>
                    <form action="{{asset('admin/post/update?id=')}}" method="get">
                        <button class="btn-success">Update</button>
                    </form>
                    <form action="{{asset('admin/post/delete')}}" method="get">
                        <button class="btn-danger">Delete</button>
                    </form>
                </td>

            </tr>
        </tbody>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark asfkjasfkajsbkajs kasncasjknaksjs</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea maiores pariatur recusandae perspiciatis cupiditate consequuntur sint, delectus quaerat inventore velit nostrum quod. Rerum recusandae vero sed maxime? Accusamus, dignissimos magni.</td>
                <td>Education</td>
                <td>Jack ma </td>
                <td>
                    <form action="{{asset('admin/post/update?id=')}}" method="get">
                        <button class="btn-success">Update</button>
                    </form>
                    <form action="{{asset('admin/post/delete')}}" method="get">
                        <button class="btn-danger">Delete</button>
                    </form>
                </td>

            </tr>
        </tbody>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark asfkjasfkajsbkajs kasncasjknaksjs</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea maiores pariatur recusandae perspiciatis cupiditate consequuntur sint, delectus quaerat inventore velit nostrum quod. Rerum recusandae vero sed maxime? Accusamus, dignissimos magni.</td>
                <td>Education</td>
                <td>Jack ma </td>
                <td>
                    <form action="{{asset('admin/post/update?id=')}}" method="get">
                        <button class="btn-success">Update</button>
                    </form>
                    <form action="{{asset('admin/post/delete')}}" method="get">
                        <button class="btn-danger">Delete</button>
                    </form>
                </td>

            </tr>
        </tbody>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark asfkjasfkajsbkajs kasncasjknaksjs</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea maiores pariatur recusandae perspiciatis cupiditate consequuntur sint, delectus quaerat inventore velit nostrum quod. Rerum recusandae vero sed maxime? Accusamus, dignissimos magni.</td>
                <td>Education</td>
                <td>Jack ma </td>
                <td>
                    <form action="{{asset('admin/post/update?id=')}}" method="get">
                        <button class="btn-success">Update</button>
                    </form>
                    <form action="{{asset('admin/post/delete')}}" method="get">
                        <button class="btn-danger">Delete</button>
                    </form>
                </td>

            </tr>
        </tbody>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark asfkjasfkajsbkajs kasncasjknaksjs</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea maiores pariatur recusandae perspiciatis cupiditate consequuntur sint, delectus quaerat inventore velit nostrum quod. Rerum recusandae vero sed maxime? Accusamus, dignissimos magni.</td>
                <td>Education</td>
                <td>Jack ma </td>
                <td>
                    <form action="{{asset('admin/post/update?id=')}}" method="get">
                        <button class="btn-success">Update</button>
                    </form>
                    <form action="{{asset('admin/post/delete')}}" method="get">
                        <button class="btn-danger">Delete</button>
                    </form>
                </td>

            </tr>
        </tbody>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark asfkjasfkajsbkajs kasncasjknaksjs</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea maiores pariatur recusandae perspiciatis cupiditate consequuntur sint, delectus quaerat inventore velit nostrum quod. Rerum recusandae vero sed maxime? Accusamus, dignissimos magni.</td>
                <td>Education</td>
                <td>Jack ma </td>
                <td>
                    <form action="{{asset('admin/post/update?id=')}}" method="get">
                        <button class="btn-success">Update</button>
                    </form>
                    <form action="{{asset('admin/post/delete')}}" method="get">
                        <button class="btn-danger">Delete</button>
                    </form>
                </td>

            </tr>
        </tbody>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark asfkjasfkajsbkajs kasncasjknaksjs</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea maiores pariatur recusandae perspiciatis cupiditate consequuntur sint, delectus quaerat inventore velit nostrum quod. Rerum recusandae vero sed maxime? Accusamus, dignissimos magni.</td>
                <td>Education</td>
                <td>Jack ma </td>
                <td>
                    <form action="{{asset('admin/post/update?id=')}}" method="get">
                        <button class="btn-success">Update</button>
                    </form>
                    <form action="{{asset('admin/post/delete')}}" method="get">
                        <button class="btn-danger">Delete</button>
                    </form>
                </td>

            </tr>
        </tbody>
        
    </table>
</div>

@endsection