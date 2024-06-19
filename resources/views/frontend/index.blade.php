@extends('frontend.layouts.master')
@section('frontend-content')
    <!-- section-hero-posts-->
    <div class="hero-header">
        <!-- Hero Slider-->
        <div id="hero-slider" class="hero-slider">
            <!-- Item Slide-->
            @foreach ($data['banners'] as $banner)
                <div class="item-slider" style="background:url({{asset('assets/admin/img/banners/'.$banner->image)}});">
                    <div class="container">
                        <div class="row align-items-center justify-content-center text-center">
                            <div class="col-lg-7">
                                <div class="info-slider">
                                    <h1>{{ $banner->title }}</h1>
                                    <p>{{ $banner->description }}</p>
                                    <a href="{{ url('about') }}" class="btn-iw outline">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>
        <!-- End Hero Slider-->
    </div>
    <!-- End section-hero-posts-->
    <!-- Section Area - Content Central -->
    <section class="content-info">
        <!-- White Section -->
        <div class="white-section" id="home-upcoming-match">
            <div class="loader-div" id="loader">
                <div class="loader"></div>
            </div>
            {{-- <i class="fa fa-soccer-ball-o right icon-big"></i>
            <div class="container">
                <div class="row next-match">
                    <div class="col-lg-12">
                        <p class="title-counter">
                            <i class="fa fa-clock-o"></i>
                            Countdown Till Start
                        </p>
                        <div id="event-one" class="counter"></div>
                    </div>
                    <div class="col-lg-5">
                        <div class="team">
                        <a href="../../sportscup/run/single-team.html">
                                Colombia
                                <img src="{{asset('assets/frontend/img/clubs-logos/colombia.png')}}" alt="club-logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="vs-match">
                            VS
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="team right">
                            <a href="../../sportscup/run/single-team.html">
                                <img src="{{asset('assets/frontend/img/clubs-logos/arg.png')}}" alt="club-logo">
                                Argentina
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <ul class="date-match">
                            <li><i class="fa fa-calendar"></i>14 June, 2018</li>
                            <li><i class="fa fa-clock-o"></i>Kick-of, 12:00 PM</li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- End White Section -->
       
        <!-- White Section -->
        <div class="paddings">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <!-- Point Table -->
                        <div class="panel-box" id="home-point-data">
                            <div class="titles no-margin border-0 home-point-data">
                                <h4>Points Table</h4>
                            </div>
                            <table class="table-striped table-responsive table-hover result-point small">
                                <thead class="point-table-head">
                                    <tr>
                                        <th class="text-left">No</th>
                                        <th class="text-left">PLAYER</th>
                                        <th class="text-center">Rating</th>
                                        <th class="text-center">Rank</th>
                                        <th class="text-center">Point</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center" id="home-point-table">
                                    <tr>
                                        <div class="loader-div" id="loader">
                                            <div class="loader"></div>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- End Point Table -->
                        
                    </div>
                    <div class="col lg-8">
                        <!-- Recent Post -->
                        <div class="panel-box">
                            <div class="titles">
                                <h4>Recent News</h4>
                            </div>
                            <div class="" id="home-news">
                                <div class="loader-div">
                                    <div class="loader"></div>
                                </div>
                            </div>
                            <a href="{{ url('news') }}" class="btn-iw full no-margin">View All News</a>
                        </div>
                        <!-- End Recent Post -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End White Section -->
       
        <div class="paddings-mini">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--Sponsors CLub -->
                    <div class="row no-line-height">
                            <div class="col-md-12">
                                <h3 class="clear-title">Match Sponsors</h3>
                            </div>
                        </div>
                        <!--End Sponsors CLub -->
                        <ul class="sponsors-carousel">
                            <li><a href="#"><img src="{{asset('assets/frontend/img/sponsors/1.png')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('assets/frontend/img/sponsors/2.png')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('assets/frontend/img/sponsors/3.png')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('assets/frontend/img/sponsors/4.png')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('assets/frontend/img/sponsors/5.png')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('assets/frontend/img/sponsors/3.png')}}" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter -->
        {{-- <div class="section-newsletter dark">
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
        </div> --}}
        <!-- End Newsletter -->
    </section>
    <!-- End Section Area -  Content Central -->
    <div class="instagram-btn light">
        <div class="btn-instagram">
            <i class="fa fa-instagram"></i>
            FOLLOW
            <a href="https://www.instagram.com/fifaworldcup/" target="_blank">&#64;fifaworldcup</a>
        </div>
    </div>
    <div class="content-instagram">
        <div id="instafeed"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/frontend/js/cricket/home.js') }}"></script>
@endsection