<?php

use Illuminate\Support\Facades\Session;
?>
@extends('user.header')

@section('home')

<div class="container-fluid">
    <hr>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Article info</h5>
                </div>
                <div class="container">
                    <span class="success">
                        <?php
                            $check = Session::get('message');
                            if($check){
                                echo $check;
                            }
                        ?>
                    </span>
                    <!-- BEGIN USER FORM -->
                    <form action="{{asset('home/create')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Title: </label>
                            <input type="text" name="title" class="form-control" placeholder="Enter your Title" required>
                        </div>
                        <div class="form-group">
                            <label>Content: </label>
                            <textarea class="form-control" placeholder="Enter your Content" name="content" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Choose a Category:</label>
                            <select style="height: 50px;" class="form-control" name="type_id" id="subcate">
                                <?php
                                $categories = Session::get('categories');
                                foreach ($categories as $value) : ?>
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                <?php endforeach
                                ?>
                            </select> *
                        </div>
                        <div class="control-group">
                            <label>Choose an image :</label>
                            <input style="height: 50px;" class="form-control" type="file" name="fileUpload" id="fileUpload">
                        </div>
                        <div class="form-group">
                            <label>Choose a Status:</label>
                            <select style="height: 50px;" class="form-control" name="status" id="subcate">
                                <option value="DRAFT">DRAFT</option>
                                <option value="PUBLISHED">PUBLISHED</option>
                            </select> *
                        </div>
                        <div class="form-group">
                            <label>Feature: </label>
                            <input class="form-control" type="number" class="span11" name="feature" min="0" max="1" /> *
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success mb-5 comic">Add</button>
                        </div>
                    </form>
                </div>

                <!-- END USER FORM -->
            </div>
        </div>
    </div>
</div>
</div>
<script>
    const add = document.querySelector('.comic');
    const check = document.querySelector('.success');
    check.style.display = 'none';
    add.addEventListener('click',function(){
        check.style.display = 'block';
    })
</script>

@endsection