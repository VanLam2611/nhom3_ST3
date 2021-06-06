@extends('homeAdmin')

@section('homeadmin')

<div class="update set-value">
    <H3>Update User</H3>
    <form action="" method="post">
    {{csrf_field()}}
    @method('PATCH')
        <div class="group-update">
            <span>User name :</span>
            <input type="text" value="{{$user->name}}" name="name">
        </div>
        <div class="group-update">
            <span>Email :</span>
            <input type="text" value="{{$user->email}}" name="email">
        </div>
        <div class="group-update">
            <span>Password :</span>
            <input type="text" value="{{$user->password}}" name="password">
        </div>
        <div class="group-update">
            <span>Address :</span>
            <input type="text" value="{{$user->address}}" name="address">
        </div>
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