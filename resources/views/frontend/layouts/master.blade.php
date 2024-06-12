<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Basic -->
    <title>Cricket - Wicket</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="SportsCup - Bootstrap 4 Theme for Soccer And Sports">
    <meta name="author" content="iwthemes.com">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Theme CSS -->
    <link href="{{ asset('assets/frontend/css/main.css') }}" rel="stylesheet" media="screen">
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/frontend/img/icons/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/frontend/img/icons/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/frontend/img/icons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/frontend/img/icons/apple-touch-icon-114x114.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- layout-->
    <div id="layout">
        <!-- Header-->
        @include('frontend.partials._header')
        <!-- End Header-->

        {{-- Main content --}}
        @yield('frontend-content')

        <!-- Newsletter -->
        <div class="section-newsletter dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h2>Enter your e-mail and <span class="text-resalt">subscribe</span> to our newsletter.</h2>
                            <p>Duis non lorem porta,  eros sit amet, tempor sem. Donec nunc arcu, semper a tempus et, consequat.</p>
                        </div>
                        <form id="newsletterForm" action="../../sportscup/run/php/mailchip/newsletter-subscribe.html">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        <input class="form-control" placeholder="Your Name" name="name"  type="text" required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        <input class="form-control" placeholder="Your  Email" name="email"  type="email" required="required">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit" name="subscribe" >SIGN UP</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div id="result-newsletter"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Newsletter -->
        
        <!-- footer-->
        @include('frontend.partials._footer')
        <!-- End footer-->
    </div>
    <!-- End layout-->
    <!-- ======================= JQuery libs =========================== -->
    <!-- jQuery local-->
    <script src="{{asset('assets/frontend/js/jquery.js')}}"></script>
    <!-- popper.js-->
    <script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
    <!-- bootstrap.min.js-->
    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <!-- required-scripts.js-->
    <script src="{{asset('assets/frontend/js/theme-scripts.js')}}"></script>
    <!-- theme-main.js-->
    <script src="{{asset('assets/frontend/js/theme-main.js')}}"></script>
    <!-- ======================= End JQuery libs =========================== -->
</body>

</html>
