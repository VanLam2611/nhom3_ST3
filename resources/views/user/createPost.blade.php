@extends('user.header')

@section('home')

<div class="container-fluid">
    <hr>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Protypes info</h5>
                </div>
                <div class="widget-content nopadding">


                    <!-- BEGIN USER FORM -->
                    <form action="addProduct.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                        <div class="control-group">
                            <label class="control-label">Name :</label>
                            <div class="controls">
                                <input type="text" class="span11" placeholder="Product name" name="name" /> *
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Choose a manufacture:</label>
                            <div class="controls">
                                <select name="manu_id" id="cate">

                                    
                                </select> *
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Choose a product type:</label>
                            <div class="controls">
                                <select name="type_id" id="subcate">
                                    

                                </select> *
                            </div>
                            <div class="control-group">
                                <label class="control-label">Choose an image :</label>
                                <div class="controls">
                                    <input type="file" name="fileUpload" id="fileUpload">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Description</label>
                                <div class="controls">
                                    <textarea class="span11" placeholder="Description" name="description"></textarea>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Price :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="price" name="price" /> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Feature :</label>
                                    <div class="controls">
                                        <input type="number" class="span11" name="feature" min="0" max="1" /> *
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success">Add</button>
                                </div>
                            </div>
                    </form>
                    <!-- END USER FORM -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection