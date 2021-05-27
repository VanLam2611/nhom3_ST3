@extends('main')

@section('homepost')
<!--Content-->
<div class="content">
    <div class="container">
        <div id="postbox">
            <form id="new_post" name="new_post" method="POST" action="{{asset('')}}home">

                <!-- post name -->
                {{csrf_field()}}
                <p><label for="title">Title</label><br />
                    <input type="text" placeholder="Please input title of here" id="title" value="" tabindex="1" size="20" name="title" />
                </p>
                <!-- post Content -->
                <p><label for="description">Content</label><br />
                    <textarea id="content" tabindex="3" name="content" cols="50" rows="6"></textarea>
                </p>

                <p>
                <div class="dropdown">
                    <button id="drop" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        Selected type post
                    </button>
                    <div class="dropdown-menu">
                        <input id="item" type="button" class="dropdown-item" value="Link 1">
                        <input id="item" type="button" class="dropdown-item" value="Link 1">
                        <input id="item" type="button" class="dropdown-item" value="Link 1">
                    </div>
                </div>
                </p>

                <p align="right"><input class="btn btn-primary" type="submit" value="Add Post" tabindex="6" id="submit" name="submit" /></p>


                <input type="hidden" name="action" value="new_post" />

            </form>
        </div>
    </div>
</div>
<!--Footer-->
<footer>
    <div class="end-footer">Mọi thắc mắc xin liên hệ nhóm 3 &copy; fit.tdc.edu.vn</div>
</footer>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>