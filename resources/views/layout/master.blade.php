<!DOCTYPE html>
<html lang="en">

<head>
    <!-- title -->
    <title>Resturant</title>
    <!-- Important meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Css Offline -->
    <link rel="stylesheet" type="text/css" href="Css/bootstrap.min.css">
    <!-- main css -->
    <link rel="stylesheet" type="text/css" href="Css/style.css">
    <!-- fontawesome css offline-->
    <link rel="stylesheet" type="text/css" href="Css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="Css/font-awesome.min.css">
    <!-- Fontawesome online -->
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- bootstrap online -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- Boostrap Js and Jquery Files Online -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Tangerine&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">

</head>

<body>

    <head>
        <section>
            <div class="container bg-white">
                <div class="row">
                    <div class="col-md-6">
                        <div class="logo">
                            <img src="Images/s.png" alt="logo" class="img-fluid">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a class="nav-item nav-link active" href="\">Home <span
                                            class="sr-only">(current)</span></a>
                                    <a class="nav-item nav-link" href="\Blog">Blog</a>

                                    <a class="nav-item nav-link" href="\Reservation">Reservation</a>
                                    <a class="nav-item nav-link" href="\Membership">Membership</a>

                                </div>
                            </div>
                        </nav>

                    </div>

                </div>

            </div>
        </section>
        <section class="slider">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>

                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Images/banenr-img1.jpg" alt="Los Angeles" width="1100" height="500">
                        <div class="carousel-caption">
                            <h3>Los Angeles</h3>
                            <p>We had such a great time in LA!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="Images/banenr-img3.jpg" alt="Chicago" width="1100" height="500">
                        <div class="carousel-caption">
                            <h3>Chicago</h3>
                            <p>Thank you, Chicago!</p>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>

        </section>

    </head> 
  
 @yield('content')
<footer id="footer" class="footer-1 mt-2">
    <div class="main-footer widgets-dark typo-light">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="widget subscribe no-box">
                        <h5 class="widget-title">Resturant<span></span></h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="widget no-box">
                        <h5 class="widget-title">Quick Links<span></span></h5>
                        <ul class="thumbnail-widget">
                            <li>
                                <div class="thumb-content"><a href="#.">Home</a></div>
                            </li>
                            <li>
                                <div class="thumb-content"><a href="#.">Blog</a></div>
                            </li>
                            <li>
                                <div class="thumb-content"><a href="Reservation.html">Reservation</a></div>
                            </li>
                            <li>
                                <div class="thumb-content"><a href="#.">Membership</a></div>
                            </li>
                            <!-- <li>
                                <div class="thumb-content"><a href="#.">News</a></div>
                            </li>
                            <li>
                                <div class="thumb-content"><a href="#.">Lifestyle</a></div>
                            </li>
                            <li>
                                <div class="thumb-content"><a href="#.">About</a></div>
                            </li> -->
                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="widget no-box">
                        <h5 class="widget-title">Get Started<span></span></h5>
                        <p>to find best Foods For you</p>
                        <a class="btn" href="#." target="_blank">Register Now</a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3">

                    <div class="widget no-box">
                        <h5 class="widget-title">Contact Us<span></span></h5>

                        <p><a href="mailto:info@domain.com" title="glorythemes">Masteraalen@gmail.com</a></p>
                        <ul class="social-footer2">
                            <li class=""><a title="youtube" target="_blank" href="https://www.youtube.com/"><img
                                        alt="youtube" width="30" height="30"
                                        src="Images/yt.png"></a>
                            </li>
                            <li class=""><a href="https://www.facebook.com/" target="_blank" title="Facebook"><img
                                        alt="Facebook" width="30" height="30"
                                        src="Images/fb.png"></a>
                            </li>
                            <li class=""><a href="# target=_blank" title="Twitter"><img
                                        alt="Twitter" width="30" height="30"
                                        src="Images/twitter.png"></a>
                            </li>
                            <li class=""><a title="instagram" target="_blank" href="#"><img
                                        alt="instagram" width="30" height="30"
                                        src="Images/insta.png"></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>Copyright Darkcodes © 2020</p>
                </div>
            </div>
        </div>
    </div>
</footer>



</body>
<!-- Bootstrap  Js-->
<script src="/Js/bootstrap.min.js"></script>

<!-- Jquery -->
<script src="Js/jquery-3.5.0.min.js"></script>

</html>


 
  