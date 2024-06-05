<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Site Metas -->
<title>@yield('page-title', 'Cricket Wicket')</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- Site Icons -->
<link rel="shortcut icon" href="" type="image/x-icon" />
<link rel="apple-touch-icon" href="">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
<!-- Site CSS -->
<link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
<!-- Colors CSS -->
<link rel="stylesheet" href="{{asset('assets/frontend/css/colors.css')}}">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="{{asset('assets/frontend/css/versions.css')}}">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{asset('assets/frontend/css/responsive.css')}}">
<!-- Custom CSS -->
<link rel="stylesheet" href="{{asset('assets/frontend/css/custom.css')}}">
<!-- font family -->
<link
    href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
<!-- end font family -->
<link rel="stylesheet" href="{{asset('assets/frontend/css/3dslider.css')}}" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="js/3dslider.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="game_info" data-spy="scroll" data-target=".header">
    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="{{asset('assets/frontend/images/loading-img.gif')}}" alt="">
    </div>
    <!-- END LOADER -->
    <section id="top">
        <header>
            <div class="container">
                <div class="header-top">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="full">
                                <div class="logo">
                                    <a href="{{url('/')}}"><img src="{{asset('assets/frontend/images/logo.png')}}" width="80" height="50" alt="#" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="right_top_section">
                                <!-- social icon -->
                                <ul class="social-icons pull-left">
                                    <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="youtube" href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a class="pinterest" href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                                <!-- end social icon -->
                                <!-- button section -->
                                <ul class="login">
                                    <li class="login-modal">
                                        <a href="{{url('/login')}}" class="login"><i class="fa fa-user"></i>Login</a>
                                    </li>
                                    <li>
                                        <div class="cart-option">
                                            <a href="{{url('login#register')}}"><i class="fa fa-shopping-cart"></i>Register</a>
                                        </div>
                                    </li>
                                </ul>
                                <!-- end button section -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full">
                                <div class="main-menu-section">
                                    <div class="menu">
                                        <nav class="navbar navbar-inverse">
                                            <div class="navbar-header">
                                                <button class="navbar-toggle" type="button" data-toggle="collapse"
                                                    data-target=".js-navbar-collapse">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                                <a class="navbar-brand" href="#">Menu</a>
                                            </div>
                                            <div class="collapse navbar-collapse js-navbar-collapse">
                                                <ul class="nav navbar-nav">
                                                    <li class="active"><a href="{{url('/')}}">Home</a></li>
                                                    <li><a href="{{url('/about')}}">About</a></li>
                                                    <li><a href="{{url('/teams')}}">Team</a></li>
                                                    <li><a href="{{url('/news')}}">News</a></li>
                                                    <li><a href="{{url('/matches')}}">Match</a></li>
                                                    <li><a href="{{url('/series')}}">Series</a></li>
                                                    <li><a href="{{url('/article')}}">Article</a></li>
                                                    <li><a href="{{url('/contact')}}">contact</a></li>
                                                </ul>
                                            </div>
                                            <!-- /.nav-collapse -->
                                        </nav>
                                        {{-- <div class="search-bar">
                                            <div id="imaginary_container">
                                                <div class="input-group stylish-input-group">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                    <span class="input-group-addon">
                                                        <button type="submit"><i class="fa fa-search"
                                                                aria-hidden="true"></i></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </section>

    @yield('website-content')

    <footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="full">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="#"><img src="{{asset('assets/frontend/images/footer-logo.png')}}" alt="#" /></a>
                            </div>
                            <p>{{getKeyValue('about_company') }}</p>
                            <ul class="social-icons style-4 pull-left">
                                <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="youtube" href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a class="pinterest" href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="full">
                        <div class="footer-widget">
                            <h3>Menu</h3>
                            <ul class="footer-menu">
                                <li><a href="{{url('/about')}}">About Us</a></li>
                                <li><a href="{{url('team')}}">Our Team</a></li>
                                <li><a href="{{url('/news')}}">Latest News</a></li>
                                <li><a href="{{url('/matches')}}">Match</a></li>
                                <li><a href="{{url('/series')}}">Series</a></li>
                                <li><a href="{{url('/article')}}">Article</a></li>
                                <li><a href="{{url('/contact')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="full">
                        <div class="footer-widget">
                            <h3>Contact us</h3>
                            <ul class="address-list">
                            </li>
                            <li><i class="fa fa-phone"></i>{{getKeyValue('phone') }}</li>
                            <li><i style="font-size:20px;top:5px;" class="fa fa-envelope"></i>{{getKeyValue('email') }}</li>
                            <li><i class="fa fa-map-marker"></i>{{getKeyValue('address') }}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="full">
                        <div class="contact-footer">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d120615.72236587871!2d73.07890527988283!3d19.140910987164396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1527759905404"
                                width="600" height="350" frameborder="0" style="border:0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p>Copyright © 2024 Distributed by <a href="https://www.infocentroid.com/" target="_blank">InfoCentroid Software Solutions Pvt. Ltd</a>
                </p>
            </div>
        </div>
    </footer>
    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    <!-- ALL JS FILES -->
    <script src="{{asset('assets/frontend/js/all.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('assets/frontend/js/custom.js')}}"></script>

</body>

</html>
