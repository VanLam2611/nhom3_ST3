@extends('homeAdmin')

@section('homeadmin')

<div class="set-value">
    <div class="user-create">
        <h2>CREATE USER</h2>
        <hr>
        <form action="{{asset('')}}admin/user" method="post">
        {{csrf_field()}}
            <div class="name-left mb-3">
                <span>User name : </span><input width="200" type="text" name="name" placeholder="Enter name of here">
            </div>
            <div class="name-left mb-3">
                <span>Email : </span><input type="email" name="email" placeholder="Enter email of here">
            </div>
            <div class="name-left mb-3">
                <span>Password : </span> <input type="password" name="password" placeholder="Enter password of here">
            </div>
            <div class="name-left mb-3">
                <span>Address : </span> <input type="text" name="address" placeholder="Enter address of here">
            </div>
            <div>
                <span>Role : </span>
                <div class="btn-group role">
                    <input type="text" class="bg-primary text-light" name="role_name" id="drop" value="" readonly>
                    <button type="button" id="temp" value="" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    </button>
                    <ul class="dropdown-menu">
                        @foreach($role as $value)
                        <li><a id="item" class="dropdown-item" href="#">{{$value->role_name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <hr>
            <button type="submit" class="btn-success">Create</button>
        </form>
    </div>
</div>
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
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
@endsection