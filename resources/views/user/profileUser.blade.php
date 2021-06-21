@extends('user.header')

@section('home')

<section class="cta-section theme-bg-dark py-5 text-light">
    <div class="container">
        <h2 class="heading text-light"><i class="fas fa-user text-light"></i> {{$user->name}}</h2>
        <div class="intro"><i class="far fa-envelope"></i> <a class="text-light" href="">{{$user->email}}</a></div>
        @if($article != null)
        <div>All Articles: {{count($article)}}</div>
        @else
        <div>All Articles: 0</div>
        @endif
    </div>
    <!--//container-->
</section>
<hr>
<section class="blog-list px-3 py-5 p-md-5">
    <div class="container">
    @if($article != null)
        @foreach($article as $value)
        <div class="item mb-5">
            <div class="media">
                <!--assets/images/blog/blog-post-thumb-1.jpg-->
                <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="{{url('')}}/uploads/{{$value->image}}" alt="image">
                <div class="media-body">
                    <h3 class="title mb-1"><a href="blog-post.html">{{$value->title}}</a></h3>
                    <div class="meta mb-1"><span class="date">Created: {{$value->created_at}}</span><span class="time">5 min read</span><span class="comment"><a href="#">8 comments</a></span></div>
                    <div class="intro">{{$value->content}}</div>
                    <a class="more-link" href="{{asset('')}}home/detail/{{$value->id}}">Read more &rarr;</a>
                </div>
                <!--//media-body-->
            </div>
            <!--//media-->
        </div>
        <!--//item-->
        @endforeach
        <nav class="blog-nav nav nav-justified my-5">
        
        </nav>
        @else
        <div><h3 class="text-center text-danger">This article is empty!</h3></div>
    @endif
    </div>
</section>

@endsection