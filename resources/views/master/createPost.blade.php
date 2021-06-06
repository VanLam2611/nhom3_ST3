@extends('homeAdmin')

@section('homeadmin')

<div class="set-value ps-5">
    <h2>Add New Post for User</h2>
    <hr>
    <form action="{{asset('')}}admin/post" method="post">
        {{csrf_field()}}
        <div class="row">
            <div class="col-1">
                <p>Title:</p>
                <p>Content:</p><br><br><br><br><br><br><br><br><br><br>
                <p>Select type post: </p>
                <p>User : </p>
            </div>
            <div class="col-11">
                <p><input type="text" name="title" placeholder="Enter title of here" require></p>
                <p><textarea name="content" cols="70" rows="10" require></textarea></p>
                <p>
                <div class="btn-group">
                    <input type="text" class="text-dark" name="type_name" id="drop" value="" readonly>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    </button>
                    <ul class="dropdown-menu">
                        @foreach($postType as $value)
                        <li><a id="item" class="dropdown-item" href="#">{{$value->type_name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                </p>
                <p>
                <div class="btn-group">
                    <input id="touch" type="text" class="text-dark" name="name" value="" readonly>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    </button>
                    <ul class="dropdown-menu">
                        @foreach($user as $value)
                        <li><a id="user" class="dropdown-item" href="#">{{$value->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                </p>
            </div>
        </div>

        <br><button type="submit" class="btn btn-primary">Add New</button>
    </form>
</div>
<!-- JavaScript Bundle with Popper -->
<script>
    const drop = document.querySelector('#drop');
    const item = document.querySelectorAll('#item');

    item.forEach((e) => {
        drop.setAttribute('value', e.textContent);
        e.addEventListener('click', () => {
            //alert(e.textContent);
            drop.setAttribute('value', e.textContent);
        })
    })
    const touch = document.querySelector('#touch');
    const user = document.querySelectorAll('#user');

    user.forEach((e) => {
        touch.setAttribute('value', e.textContent);
        e.addEventListener('click', () => {
            //alert(e.textContent);
            touch.setAttribute('value', e.textContent);
        })
    })
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
@endsection