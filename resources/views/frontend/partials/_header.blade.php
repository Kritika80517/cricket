<header class="header-3">
    <!-- End headerbox-->
    <div class="headerbox">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <!-- Logo-->
                <div class="col">
                    <div class="logo">
                        <a href="{{ url('/') }}" title="Return Home">
                            <img style="width: 70px;" src="{{asset('assets/frontend/img/logo.png')}}" alt="Logo" class="logo_img">
                        </a>
                    </div>
                </div>
                <!-- End Logo-->

                <!-- Adds Header-->
                <div class="col text-right">
                    <div class="adds">
                        <a href="{{ url('/login') }}">Login</a> |
                        <a href="{{ url('/register') }}">Register</a>
                    </div>

                    <!-- Call Nav Menu-->
                    <a class="mobile-nav" href="#mobile-nav"><i class="fa fa-bars"></i></a>
                    <!-- End Call Nav Menu-->
                </div>
                <!-- End Adds Header-->
            </div>
        </div>
    </div>
    <!-- End headerbox-->
    <div id="undefined-sticky-wrapper" class="sticky-wrapper" style="height: 65px;">
        <nav class="mainmenu">
            <div class="container">
                <!-- Menu-->
                <ul class="sf-menu" id="menu">
                    <li class="current">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('/about') }}">About</a>
                    </li>
                    <li>
                        <a href="{{ url('/teams') }}">Teams</a>
                    </li>
                    <li>
                        <a href="{{ url('/news') }}">News</a>
                    </li>
                    <li>
                        <a href="{{ url('/schedule') }}">Schedule</a>
                    </li>
                    <li>
                        <a href="{{ url('/matches') }}">Matches</a>
                    </li>
                    <li>
                        <a href="{{ url('/series') }}">Series</a>
                    </li>
                    <li>
                        <a href="{{ url('/articles') }}">Articles</a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}">Contact</a>
                    </li>
    
                </ul>
                <!-- End Menu-->
            </div>
        </nav>
    </div>
</header>

