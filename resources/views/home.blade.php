
@extends('master')
@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row banner">

            <div class="col-md-12">

                <h1 class="text-center mt-5 editContent" style="color: rgba(8, 196, 196, 0.507); font-family: monospace; font-style: italic">
                    Learning Laravel - Nhom 3
                </h1>

                <h3 class="text-center mt-2 editContent" style="color: rgba(230, 4, 117, 0.671); font-style: oblique; margin-top: 3rem">{{ trans('main.subtitle') }}</h3>

                <div class="text-center", style="margin-top: 3rem">
                    <img src="https://th.bing.com/th/id/R82c8a4c7ee3bf8b72ada9979d9de2e1b?rik=M3pSg7R2Co3HHA&riu=http%3a%2f%2fimages.mydoorsign.com%2fimg%2flg%2fS%2fsmile-you-are-beautiful-sign-s-9918.png&ehk=OhCmMz9xajzyI3sLwzNFnxd7QHaCnGlWOAJ6uSII55k%3d&risl=&pid=ImgRaw" width="500" height="600" alt="">
                </div>

            </div>

        </div>
    </div>
@endsection