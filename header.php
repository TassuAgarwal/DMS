<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.mins.css">
</head>

<style>
    #topBar ul li {
        position: relative;
        display: inline-block;
    }

    #topBar a {
        display: inline-block; 
        line-height: 1.2rem;
        color: #FFF;
        transition: .2s ease-out;
    }
    
    ul.subMenu {
        box-sizing: border-box;
        position: absolute;
        top: 100%;
        left: 0;
        width: 170%;
    }

    ul.subMenu li {
        width: 100%;
        background: #3d3d3b;
    }

    #topBar ul.subMenu li a {
        width: 100%;
        padding: 1rem 1rem;
        border-bottom: 1px solid rgba(0, 0, 0, .05);
        border-top: 1px solid rgba(255, 255, 255, .1);
    }

    #topBar ul.subMenu li a:hover,
    #topBar ul.subMenu li.active>a {
        background: #2f2f2d;
        padding-left: 1.1rem;
    }

    ul.subMenu ul.subMenu {
        position: absolute;
        top: 0;
        left: 100%;
        width: 100%;
    }
</style>

<body>
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>

    <header>
        <div class="header">
            <div class="header_midil">
                <div class="container">
                    <div class="row d_flex">
                        <div class="col-md-2">
                            <ul class="social_icon">
                                <li> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-8">
                            <a class="logo" href="#"><img style="height: 5vw;" src="images/logo.jpeg" alt="#" /></a>
                        </div>

                        <div class="col-md-2">
                            <ul class="right_icon d_none1">
                                <a href="#" class="order"><i class="fa fa-user" aria-hidden="true"></i></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="topBar">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.html">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.html">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="products.html">Categories <i class="fa fa-angle-down"></i></a>
                                        <ul class="subMenu">
                                            <li><a href="#">Item 1.1</a></li>
                                            <li><a href="#">Item 1.2 &nbsp;<i class="fa fa-angle-right"></i></a>
                                                <ul class="subMenu">
                                                    <li><a href="#">Item 1.2.1 with a veeeeeeeery looooong name</a></li>
                                                    <li><a href="#">Item 1.2.2 &nbsp;<i class="fa fa-angle-right"></i></a>
                                                        <ul class="subMenu">
                                                            <li><a href="#">Item 1.2.2.1</a></li>
                                                            <li><a href="#">Item 1.2.2.2 &nbsp;<i class="fa fa-angle-right"></i></a>
                                                                <ul class="subMenu">
                                                                    <li><a href="#">Item 1.2.2.2.1</a></li>
                                                                    <li><a href="#">Item 1.2.2.2.2</a></li>
                                                                    <li><a href="#">Item 1.2.2.2.3</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Item 1.3</a></li>
                                            <li><a href="#">Item 1.4</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="fashion.html">Blogs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-5">
                        <div class="search searchInput">
                            <input class="form_sea" type="text" placeholder="Search" name="search">
                            <button type="submit" class="seach_icon"><i class="fa fa-search"></i></button>
                            <div class="resultBox">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>

<script>
    $(".subMenu").hide();
    $(".subMenu").parent("li").hover(function() {
        $(this).find(">.subMenu").not(':animated').slideDown(300);
        $(this).toggleClass("active ");
    });
    $(".subMenu").parent("li").mouseleave(function() {
        $(this).find(">.subMenu").slideUp(150);
    });
    $("a[href=\"#\"]").click(function() {
        return false;
    });
</script>

</html>