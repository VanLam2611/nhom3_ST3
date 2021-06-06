@extends('homeAdmin')

@section('homeadmin')

<div class="update set-value">
    <H3>Update Role</H3>
    <form action="" method="post">
    {{csrf_field()}}
    @method('PATCH')
        <div class="group-update">
            <span>Role name :</span>
            <input type="text" value="{{$role->role_name}}" name="role_name">
        </div>
        <button type="submit" class="btn-success">Update</button>
    </form>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
@endsection