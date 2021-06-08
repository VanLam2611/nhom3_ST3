@extends('master')
@section('title', 'Profile info')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Profile of {{ $user->name }}
          </h3>
        </div>
        <div class="panel-body">
          <strong>Name : </strong>
          <li class="list-group-item-info">{{ $user->name }}</li>
          <strong>Email : </strong>
          <li class="list-group-item-info">{{ $user->email }}</li>
          <strong>Address : </strong>
          <li class="list-group-item-info">{{ $profile->address }}</li>
          <strong>Facebook : </strong>
          <li class="list-group-item-info">{{ $profile->facebookUsername }}</li>
          <strong>Bio : </strong>
          <li class="list-group-item-info">{{ $profile->bio }}</li>
        </div>
        <div class="panel panel-default">
          <hr>
        </div>
        <h3 class="pb-1 mb-2 font-italic border-bottom">
          All Comments about {{$user->name}}
        </h3>
        <div class="panel panel-default">
          @foreach($comments as $comment)
          <li class="list-group-item">{{$comments->content}}</li>
          <li class="list-group-item">by <strong>
              <a >{{ $user->name }}</a>
            </strong></li>
          @endforeach
        </div>
        <div class="panel panel-default">
          <hr>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection