@extends('main')

@section('homepost')

    <!--Content-->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-1">User name:  </div>
                <div class="col-9">
                    <?php foreach($post as $value){?>
                    <div class="post-user">
                        <div class="name-acc"><i class="fas fa-user-alt"></i> {{$value->getUser->name}}</div>
                        <br>
                        <div class="title-post text-secondary">
                            <h4>{{$value->title}}</h4>
                        </div>

                        <!-- <div class="type-post">Type</div> -->
                        <div class="content-post">{{$value->content}}</div>
                        <div class="comment">
                            <button class="btn btn-primary"><a class="detail" href="{{asset('')}}home/show/{{$value->post_id}}">Show</a></button>
                            <button class="btn btn-primary"><a class="detail" href="{{asset('')}}home/comment/{{$value->post_id}}">Comment</a></button>
                        </div>
                    </div>
                    <br>
                    <?php } ?>
                </div>
                <div class="col-2">
                    <div class="all-type">
                        <h2>ALL TYPE</h2>
                        <?php foreach($type as $value){ ?>
                        <div class="type-name">
                            <a href="">{{$value->type_name}}</a></div>
                        <?php } ?>
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--Footer-->
    <footer>
        <div class="end-footer">Mọi thắc mắc xin liên hệ nhóm 3 &copy; fit.tdc.edu.vn</div>
    </footer>
   @endsection