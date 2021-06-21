@extends('shared.header')

@section('home')
<article class="blog-post px-3 py-5 p-md-5">
    <div class="container">
        <h4 style="text-align: center; color: rgba(4, 190, 159, 0.541)">Your're best!</h4>
        <header class="blog-post-header">
            <h1 class="title mb-2" style="text-align: center; color: rgba(8, 4, 8, 0.589)">{{$article->title}}</h1>
            <div class="meta mb-3" style="text-align: center"><span class="date">{{$article->date}}</span><span class="time">5 min
                    read</span><span class="comment"><a href="#">4 comments</a></span></div>
        </header>

        <div class="blog-post-body">
            <figure class="blog-banner">
                <img class="img-fluid" src="/{{$article->image}}" alt="{{$article->image}}" style="margin: 10px auto 20px;
                display: block;">
                <figcaption class="mt-2 text-center image-caption">Image Credit By: Nhom 3</figcaption>
            </figure>
            <div class="card mt-4">
                <div class="card-body">
                    <p> {{ $article->content }} </p>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-body">
                    <form method="post" action="/comment">
    
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
    
                        @if(session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="article_id" value="{{ $article->id }}">
                        <input type="hidden" name="article_type" value="App\Models\Article">
                        <div class="form-group">
                            <legend>Comment</legend>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <textarea class="form-control" rows="3" id="content" name="content"></textarea>
                            </div>
                        </div>
    
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Post</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <!--//blog-comments-section-->

    </div>
    <!--//container-->
</article>
<!--//promo-section-->

@endsection