@extends('master')
@section('title', 'All Articles')
@section('content')

    <div class="container col-md-10 col-md-offset-2">
        <div class="card mt-5">
            <div class="card-header">
                <h5 class="float-left">All Articles</h5>
                <div class="clearfix"></div>
            </div>
            <div class="content">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @if ($articles->isEmpty())
                    <p> There is no article.</p>
                @else
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Created At</th>
                                <th>Updated At</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($articles as $article)
                                <tr>
                                    <td>{{ $article->id }}</td>
                                    <td>
                                        <a href="{{ action('Admin\ArticlesController@edit', $article->id) }}">{{ $article->title }} </a>
                                    </td>
                                    <td>{{ $article->slug }}</td>
                                    <td>{{ $article->created_at }}</td>
                                    <td>{{ $article->updated_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
        {!! $articles->render() !!}
    </div>
@endsection