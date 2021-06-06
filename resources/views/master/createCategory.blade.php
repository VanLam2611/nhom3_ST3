@extends('homeAdmin')

@section('homeadmin')

<div class="set-value ps-5">
    <h2>Add Category for Post</h2>
    <hr>
    <form action="{{asset('')}}admin/category" method="post">
        {{csrf_field()}}
        <div class="group-update">
            <span>Name category :</span>
            <input type="text" value="" name="type_name">
        </div>
        <br><button type="submit" class="btn btn-primary">Add New</button>
    </form>
</div>
<!-- JavaScript Bundle with Popper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
@endsection