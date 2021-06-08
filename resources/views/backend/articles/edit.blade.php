@extends('master')
@section('title', 'Edit An Article')

@section('content')
<div class="container">
    <div class="card-header">Recent Articles</div>

    <div class="row justify-content-left">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    Categories
                    <p></p>
                    Articles
                    <p></p>
                    Add Users
                    <p></p>

                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form enctype="multipart/form-data" method="post">
                        {{ csrf_field() }}

                        <input type="hidden" name="_method" value="put">
                        <div class="form-group">
                            <label for="post-name">Title
                                <span class="required">*</span>
                            </label>
                            <input placeholder="Enter title" id="post-title" value="{{ $article->title }}" required name="title" spellcheck="false" class="form-control" />
                        </div>
                        @if($categories == null)
                        <input class="form-control" type="hidden" required name="category_id" value="{{ $category_id }}" />
                </div>
                @endif

                @if($categories != null)
                <div class="form-group">
                    <label for="category-content">Select Category</label>
                    <span class="required">*</span>

                    <select name="category_id" class="form-control">

                        @foreach($categories as $category)
                        <option value="{{$category->id}}">
                            {{$category->name}}
                        </option>
                        @endforeach
                    </select>
                </div>
                @endif

                <div class="form-group">
                    <label for="article-content">News Content</label>
                    <span class="required">*</span>
                    <textarea placeholder="Enter content" style="resize: vertical" id="article-content" required name="content" rows="10" spellcheck="false" class="form-control autosize-target text-left">
                    {{ $article->content }}
                    </textarea>
                </div>

                @if($users == null)
                <input class="form-control" type="hidden" required name="user_id" value="{{ $user_id }}" />
            </div>
            @endif

            @if($users != null)
            <div class="form-group">
                <label for="category-content">Select user</label>
                <span class="required">*</span>

                <select name="user_id" class="form-control">

                    @foreach($users as $user)
                    <option value="{{ $user->id }}">
                        {{ $user->name }}
                    </option>
                    @endforeach
                </select>
            </div>
            @endif

            <div class="form-group">
                <label class="form-group">
                    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
                    <input name="image" type="file">
                    <span class="custom-file-control">Upload Image</span>
                </label>
            </div>

            <div class="form-group">
                <label for="post-name">Tag
                    <span class="required">*</span>
                </label>
                <input placeholder="Enter Tags" id="post-title" value="{{ $article->tag }}" required name="tag" spellcheck="false" class="form-control" />
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit" />
            </div>
            </form>

        </div>

    </div>
</div>

</div>
</div>
@endsection