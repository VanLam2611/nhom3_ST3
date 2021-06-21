@extends('shared.header')

@section('home')

<section class="cta-section theme-bg-light py-5">
    <div class="container text-center">
        <h2 class="heading">Blog Template Made For Developers</h2>
        <div class="intro">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>
        <form class="signup-form form-inline justify-content-center pt-3">
            <div class="form-group">
                <label class="sr-only" for="semail">Your email</label>
                <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
            </div>
            <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
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
                    <div class="meta mb-1"><span class="date">Created: {{$article->date}}</span><span class="time">5 min read</span><span class="comment"><a href="#">8 comments</a></span></div>
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
{!! $articles->render() !!}
@endsection