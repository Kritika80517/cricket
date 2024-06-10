<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Basic -->
    <title>SportsCup - Bootstrap 4 Theme for Sports</title>
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
</head>

<body>
    <!-- layout-->
    <div id="layout">
        <!-- Header-->
        @include('frontend.partials._header')
        <!-- End Header-->

        {{-- Main content --}}
        @yield('frontend-content')

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
