@extends('master')
@section('title', 'Blog')
@section('content')

    <div class="container col-md-10 col-md-offset-2">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if ($articles->isEmpty())
            <p> There is no article.</p>
        @else
            @foreach ($articles as $article)
                <div class="card mt-4">
                    <div class="card-header"><a href="{{ action('BlogController@show', $article->slug) }}">{{ $article->title }}</a></div>
                    <div class="card-body">
                        {{ mb_substr($article->content,0,500) }}
                    </div>
                </div>
            @endforeach
        @endif
    </div>

@endsection