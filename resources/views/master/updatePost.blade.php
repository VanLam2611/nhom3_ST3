@extends('homeAdmin')

@section('homeadmin')

<div class="update set-value">
    <form action="" method="post">
    {{csrf_field()}}
    @method('PATCH')
        <div>Post Id : <input type="text" length="20px" value="{{$postId->post_id}}" readonly><br><hr></div>
        <div>Title : <input type="text" name="title" value="{{$postId->title}}"><br><hr></div>
        <div>Content : <textarea name="content" cols="30" rows="10">{{$postId->content}}</textarea><br><hr></div>
        Type :     <div class="btn-group">
                <input type="text" class="bg-light text-primary" name="type_name" id="drop" value="{{$name}}" readonly>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                </button>
                <ul class="dropdown-menu">
                    @foreach($postType as $value)
                    <li><a id="item" class="dropdown-item" href="#">{{$value->type_name}}</a></li>
                    @endforeach
                </ul>
            </div><br><hr>
        User : <input type="text" name="user_id" value="{{$postId->user_id}}"><br>
        <hr>
        <button type="submit" class="btn-success">Update</button>
    </form>
</div>
<!-- JavaScript Bundle with Popper -->
<script>
    const drop = document.querySelector('#drop');
    const item = document.querySelectorAll('#item');

    item.forEach((e) => {
        e.addEventListener('click', () => {
            //alert(e.textContent);
            drop.setAttribute('value',e.textContent);
        })
    })
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
@endsection