<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    <style>
        * {
     box-sizing: border-box !important;
     transition: ease all 0.5s;
}

html {
     scroll-behavior: smooth;
     overflow-x: hidden !important;
}

body {
     color: #666666;
     font-size: 14px;
     font-family: Raleway;
     line-height: 1.80857;
     font-weight: normal;
     overflow-x: hidden !important;
}
a {
     color: #1f1f1f;
     text-decoration: none !important;
     outline: none !important;
     -webkit-transition: all .3s ease-in-out;
     -moz-transition: all .3s ease-in-out;
     -ms-transition: all .3s ease-in-out;
     -o-transition: all .3s ease-in-out;
     transition: all .3s ease-in-out;
}
button:focus {
     outline: none;
}

ul,
li,
ol {
     margin: 0px;
     padding: 0px;
     list-style: none;
}

p {
     margin: 20px;
     font-weight: 300;
     font-size: 15px;
     line-height: 24px;
}

a {
     color: #222222;
     text-decoration: none;
     outline: none !important;
}

a,
.btn {
     text-decoration: none !important;
     outline: none !important;
     -webkit-transition: all .3s ease-in-out;
     -moz-transition: all .3s ease-in-out;
     -ms-transition: all .3s ease-in-out;
     -o-transition: all .3s ease-in-out;
     transition: all .3s ease-in-out;
}

img {
     max-width: 100%;
     height: auto;
}

 :focus {
     outline: 0;
}

.paddind_bottom_0 {
     padding-bottom: 0 !important;
}

.btn-custom {
     margin-top: 20px;
     background-color: transparent !important;
     border: 2px solid #ddd;
     padding: 12px 40px;
     font-size: 16px;
}

        .header_section {
            width: 100%;
            float: left;
            background-color: #03164c;
            height: auto;
            padding-top: 27px;
            padding-bottom: 5px;
}
.menu_text {
    width: 100%;
    float: left;
}

.menu_text ul {
	margin: 0px;
	padding: 0px;
}

.menu_text li {
    float: left;
    padding-right: 90px;
    font-size: 18px;
    color: #ffffff;
}

.menu_text li a {
    color: #ffffff;
}

.menu_text li a:hover{
    color: #ffffff;
}

    </style>
</head>
<body>
<div class="header_section">
    <div class="row">
                <div class="col-md-3">
                    <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
                </div>
                <div class="col-md-9">
                    <div class="menu_text">
                        <ul>
                            <li><a href="index.html">HOME</a></li>                                                    
                            <li><a href="{{url('hello')}}">ABOUT</a></li>
                            <li><a href="{{url('pack')}}">PACKAGE</a></li>
                            <li><a href="gym.html">TRAINING</a></li>
                            <li><a href="contact.html">CONTACT US</a></li>
                            <li><a href="#"><img src="images/search-icon.png"></a></li>
                            <div id="myNav" class="overlay">
                        </ul>
                    </div>
                </div>
    </div>
</div>
<div>
    @yield('content')
</div>
</body>
</html>