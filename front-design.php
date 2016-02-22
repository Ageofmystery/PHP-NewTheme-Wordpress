<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog IN</title>
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="bower_components/flexboxgrid/dist/flexboxgrid.min.css" rel="stylesheet"/>
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="final.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <header class="prime-header">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1 class="logo"><a href="#"><img src="img/logo.png" width="85" height="33" alt="Logo"/></a></h1>
            </div>
            <nav class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="text-center" href="#">Journal</a></li>
                    <li><a class="text-center" href="#">About</a></li>
                    <li><a class="text-center" href="#">Work</a></li>
                    <li><a class="text-center" href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="blog-inner-main">
        <div class="container">
            <div class="col-lg-8 col-md-12 blog-content">
                <article class="post">
                    <a href="#">
                        <figure>
                            <img src="img/post-img-1.png" width="619" height="307" alt="Post image">
                        </figure>
                    </a>
                    <h2 class="article-head text-uppercase">Duis aute irure dolor in henderit in voluptate.</h2>
                    <p class="article-desc">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipop ex ea commo doconsequat, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p class="article-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur...</p>
                    <button class="btn btn-gray">Continue Reading</button>
                </article>
                <article class="post">
                    <a href="#">
                        <figure>
                            <img src="img/post-img-2.png" width="619" height="307" alt="Post image">
                        </figure>
                    </a>
                    <h2 class="article-head text-uppercase">Duis aute irure dolor in henderit in voluptate.</h2>
                    <p class="article-desc">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipop ex ea commo doconsequat, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p class="article-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur...</p>
                    <button class="btn btn-gray">Continue Reading</button>
                </article>
            </div>
            <aside class="col-lg-4 col-md-12 right-bar">
                <div class="widget-cat about">
                    <h5 class="text-uppercase aside-head">about blogin.</h5>
                    <p class="article-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                    <p class="article-desc">Excepteur sint occaecat sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="widget-cat search">
                    <h5 class="text-uppercase aside-head">search.</h5>
                    <label><input type="search" placeholder="What are you looking for?"></label>
                </div>
                <div class="widget-cat subscribe">
                    <h5 class="text-uppercase aside-head">stay tuned.</h5>
                    <form action="#" class="form-search">
                        <label><input type="email" placeholder="Your Email"></label>
                        <button type="submit"><span class="fa fa-arrow-circle-o-right"></span></button>
                    </form>
                </div>
            </aside>
            <nav class="nav-links col-xs-12 row between-xs">
                <div class="before-link"><a href="#" class="text-uppercase"><span class="fa fa-long-arrow-left"></span>previous</a></div>
                <div class="after-link"><a href="#" class="text-uppercase">next<span class="fa fa-long-arrow-right"></span></a></div>
            </nav>
        </div>
    </section>
    <footer class="prime-footer">
        <div class="container">
            <div class="footer text-center">
                <div class="logo"><a href="#"><img src="img/logo-black.png" width="85" height="33" alt="Logo"/></a></div>
                <address>&copy; 2014 Blogin.com  -  All Rights Reserved  -  Find more free Templates at <strong>Pixelhint.com</strong></address>
                <ul class="soc-links row center-xs">
                    <li class="row center-xs middle-xs"><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li class="row center-xs middle-xs"><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li class="row center-xs middle-xs"><a href="#"><span class="fa fa-behance"></span></a></li>
                    <li class="row center-xs middle-xs"><a href="#"><span class="fa fa-dribbble"></span></a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>