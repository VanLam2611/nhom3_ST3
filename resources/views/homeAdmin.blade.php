<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background: whitesmoke;
        }

        header {
            background: darkolivegreen;
            padding: 20px;
        }

        .content {
            background: whitesmoke;
        }

        .drawer {
            height: max-content;
            color: #333366;
            padding-left: 20px;
            border-top: 1px solid black;
            border-right: 1px solid black;

        }

        .generic {
            padding: 30px;
            border-bottom: 1px solid darkblue;
            text-decoration: none;
            color: #333366;
        }

        .generic:hover {
            background: darkcyan;
            color: darkgrey;
        }

        .user-edit {
            background: white;
            border: 1px solid darkcyan;
        }

        .set-value {
            padding: 20px;
        }

        table,
        th,
        td {
            border: 1px solid darkgrey;
        }

        table {
            border-collapse: collapse;
        }

        .user-create{
            padding: 20px 100px;
        }
        .name-left{
            width: 800px;
            position: relative;
            font-size: 1.2rem;
        }
        .name-left input{
            position: absolute;
            right: 0;
            left: 25%;
        }
        .role{
            margin-left: 80px;
        }
        .group-update{
            margin: 20px 80px;
            position: relative;
            width: 400px;
            height: 40px;
            font-size: 1.2rem;
        }
        .group-update span{
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 70%;
        }
        .group-update input{
            position: absolute;
            top: 0;
            left: 50%;
            bottom: 0;
            right: 0;
        }
        /* .animate-title{
            width: 100px;
            animation: move 3s infinite reverse;
            background: yellow;
        }
        @keyframes move{
            0%{
                transform: translateX('0');
            }
            100%{
                transform: translateX('500px');
            }
        } */
    </style>
</head>

<body>
    <header>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-10">
                <nav class="navbar navbar-expand-sm navbar-dark">
                    <a class="navbar-brand" href="#">BLOG</a>

                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Admin<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{asset('admin/login')}}">Logout</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0 d-flex">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="row">
            <div class="col-2 drawer">
                <a href="{{asset('admin/user')}}" class="text-decoration-none">
                    <div class="user-mana generic">
                        <i class="fas fa-user me-2 ms-5 "></i>Manage Users
                    </div>
                </a>
                <a href="{{asset('admin/role')}}" class="text-decoration-none">
                    <div class="role-mana generic">
                        <i class="fas fa-users me-2 ms-5"></i>Manage Roles
                    </div>
                </a>
                <a href="{{asset('admin/post')}}" class="text-decoration-none">
                    <div class="role-mana generic">
                        <i class="fas fa-book-reader me-2 ms-5"></i> Manage Articles
                    </div>
                </a>
                <a href="{{asset('admin/category')}}" class="text-decoration-none">
                    <div class="role-mana generic">
                        <i class="fas fa-share-alt me-2 ms-5"></i> Manage Categories
                    </div>
                </a>
            </div>
            <div class="col-10 user-edit">
                @yield('homeadmin')
               
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>