@extends('main')

@section('homepost')

<div class="content">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="post-user p-5">
                        <div>Question:<h2> {{$post->title}}</h2></div>
                        <hr>
                        <h3><i>All Comment</i></h3>
                        @if($commant->content != null)
                        <p>>  {{$commant->content}}</p>
                        @endif
                        @if($commant->content > 6)
                        <p>Comment is null</p>
                        @endif
                    </div>
                    <br>
                    
                </div>
            </div>
        </div>
    </div>
    <!--Footer-->
    <footer>
        <div class="end-footer">Mọi thắc mắc xin liên hệ nhóm 3 &copy; fit.tdc.edu.vn</div>
    </footer>
   @endsection
</body>

</html>
