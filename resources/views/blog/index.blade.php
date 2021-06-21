@extends('shared.header')

@section('home')

<section class="cta-section theme-bg-light py-5">
    <div class="container text-center">
        <h2 class="heading" style="color: rgba(8, 196, 196, 0.507); font-family: monospace; font-style: italic">Blog Template Made For Developers</h2>
        <div class="intro" style="color: rgba(230, 4, 117, 0.671); font-style: oblique; margin-top: 1rem">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>

    </div>
    <!--//container-->
</section>
<section class="blog-list px-3 py-5 p-md-5">
    <div class="container">
        @foreach($articles as $article)
        <div class="item mb-5">
            <div class="media">
                <!--assets/images/blog/blog-post-thumb-1.jpg-->
                <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="{{$article->image}}" alt="">
                <div class="media-body">
                    <h3 class="title mb-1"><a href="{{ action('BlogController@show', $article->getSlugOrTitleAttribute()) }}">{{ $article->title }} </a></h3>
                    <div class="meta mb-1"><span class="date">Created: {{$article->date}}</span></div>
                    <div class="intro">{{ mb_substr($article->content,0,300) }}</div>
                    <a class="more-link" href="{{ action('BlogController@show', $article->getSlugOrTitleAttribute()) }}">Read more &rarr;</a>
                </div>
                <!--//media-body-->
            </div>
            <!--//media-->
        </div>
        <!--//item-->
        @endforeach
    </div>
</section>
@endsection