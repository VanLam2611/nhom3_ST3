@extends('main')

@section('homepost')
    <!--Content-->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="post-user p-5">
                        <div class="show"><b> User :</b> {{$showPro->getUser->name}}</div>
                        <div class="show"><b>Email :</b> {{$showPro->getUser->email}}</div>
                        <div class="show"><b>Address :</b> {{$showPro->getUser->address}}</div>
                        <br>
                        <div class="show"><b>Title</b>
                             :  {{$showPro->title}}
                        </div>
 
                        <!-- <div class="type-post">Type</div> -->
                        <div class="show"> <b>Content</b> : {{$showPro->content}}</div>
                        <div class="show"><b>Type</b> : {{$showPro->posttype->type_name}}</div>
                        <div class="show"><i class="far fa-clock"></i> {{$showPro->failed_at}}</div>
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