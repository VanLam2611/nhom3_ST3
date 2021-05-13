<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
    * {
        font-family: 'Times New Roman', Times, serif;
    }

    .top-head {
        background: #ddbc43;
        padding: 5px 0;
        text-align: center;
    }

    .logo {
        width: 100px;

    }

    .title-head {
        margin-top: 10px;
        font-size: 1.5rem;
    }

    .bottom-head {
        margin-top: 20px;
        height: 150px;
        background-image: ;
        background-size: cover;
        background-repeat: no-repeat;
        position: relative;
        text-align: center;
    }

    .title-bottom {
        position: absolute;
        top: 50px;
        left: 20%;
        right: 30%;
        font-size: 3rem;
        color: #fff;
    }

    .content {
        padding: 50px 0;
        background: rgb(176 171 172);
    }

    .post-user {
        border: 1px solid #ba8585;
        background: rgb(241 234 234);
        position: relative;
    }

    .name-acc {
        padding: 10px 20px;
        font-size: 1.7rem;
        font-weight: bold;
    }

    .title-post {
        margin-left: 30px;
    }

    .content-post {
        margin-left: 30px;
        margin-bottom: 50px;
    }

    .all-type {
        text-align: right;
        background: rgb(187, 169, 169);
        border: 1px solid #000;
        padding: 11px;
    }

    .type-name {
        padding: 10px;
        color: blue;
    }

    .end-footer {
        text-align: center;
        padding: 20px;
        background: #000;
        color: #fff;
    }

    .tyle {
        display: flex;
    }

    .nav-item .nav-link {
        padding: 15px 20px;
    }

    .active a {
        padding: 15px 20px !important;
        background: white;
        border: 1px solid orange;
        color: #ddbc43 !important;
    }

    .active a:hover {
        background: orange;
        border: 1px solid orange;
        color: #fff !important;
    }
    
    .comment{
        position: absolute;
        right: 20px;
        bottom: 10px;
    }

    .logout{
        padding: 40px;
    }

    .logout a{
        padding: 10px 15px;
        text-decoration: none;
        color: #000;
        background: #ba8585;
        border-radius: 20px;
    }
    </style>
</head>

<body>
    <!--Header-->
    <header>
        <div class="top-head">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <nav class="navbar navbar-expand-sm navbar-light">
                            <a href="" class="navbar-brand logo"><img
                                    src="https://i.pinimg.com/originals/9d/16/87/9d1687fe53247d0da876e4bff2e3ce64.png"
                                    class="img-fluid" alt=""></a>
                            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="collapsibleNavId">
                                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">HOME</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/post') }}">New Post</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle"
                                            @onclick="document.querySelector('.dropdown-menu').style.display = `block`"
                                            href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Product
                                            types</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                                            <a class="dropdown-item" href="#">Action 1</a>
                                            <a class="dropdown-item" href="#">Action 2</a>
                                        </div>
                                    </li>
                                </ul>
                                <form class="form-inline my-2 my-lg-0 tyle">
                                    <input class="form-control mr-sm-2" type="text" placeholder="Search"><button
                                        class="btn btn-outline-success bg-dark my-2 my-sm-0"
                                        type="submit">Search</button>

                                </form>
                            </div>
                        </nav>
                    </div>
                    <div class="col-4">
                    <div class="logout">
                    <button class="btn"><a href="{{url('login')}}">Logout</a></button></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Content-->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <?php foreach($post as $value){?>
                    <div class="post-user">
                        <div class="name-acc">{{$value->getUser->name}}</div>
                        <hr>
                        <div class="title-post text-secondary">
                            <h4>{{$value->title}}</h4>
                        </div>

                        <!-- <div class="type-post">Type</div> -->
                        <div class="content-post">{{$value->content}}</div>
                        <div class="comment">
                            <button class="btn btn-primary">Comment</button>
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
                        <!-- <?php foreach($post as $value){ ?>
                        <div class="post"><?=$value->title?></div>
                        <div class="type">{{$value->posttype->type_name }}</div>
                        <?php } ?> -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--Footer-->
    <footer>
        <div class="end-footer">Mọi thắc mắc xin liên hệ nhóm 3 &copy; fit.tdc.edu.vn</div>
    </footer>
</body>

</html>