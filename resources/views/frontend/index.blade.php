@extends('frontend.layouts.master')
@section('frontend-content')
    <!-- section-hero-posts-->
    <div class="hero-header">
        <!-- Hero Slider-->
        <div id="hero-slider" class="hero-slider">
            <!-- Item Slide-->
            @foreach ($data['banners'] as $banner)
                <div class="item-slider" style="background:url({{ asset('assets/admin/img/banners/' . $banner->image) }});">
                    <div class="container">
                        <div class="row align-items-center justify-content-center text-center">
                            <div class="col-lg-7">
                                <div class="info-slider">
                                    <h1>{{ $banner->title }}</h1>
                                    <p>{{ $banner->description }}</p>
                                    <a href="{{ url('about') }}" class="btn-iw outline">Read More <i
                                            class="fa fa-long-arrow-right"></i></a>
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
        <div style="min-height: 300px;" class="white-section" id="home-upcoming-match">
            <div class="loader-div" id="loader">
                <div class="loader"></div>
            </div>
        </div>
        <!-- End White Section -->

        <!-- White Section -->
        <div class="paddings" style="padding-bottom:80px">
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
                            <div class="mt-5">
                                <a href="{{ url('news') }}" class="btn-iw full no-margin">View All News</a>
                            </div>
                        </div>
                        <!-- End Recent Post -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End White Section -->

        <div class="paddings-mini white-section" style="padding-top:0px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--Sponsors CLub -->
                        <div class="row no-line-height">
                            <div class="col-md-12">
                                <h3 class="clear-title">High Lighted Videos</h3>
                            </div>

                            <!--Item Club News -->
                            @foreach ($data['video'] as $item)
                                <div class="col-lg-6 col-xl-4">
                                    <!-- Widget Text-->
                                    <div class="panel-box">
                                        <div class="titles no-margin">
                                            <h4><a href="#">{{ $item->title }}</a></h4>
                                        </div>

                                        <iframe class="video" src="{{ $item->video_url }}" frameborder="0" gesture="media"
                                            allow="encrypted-media" allowfullscreen=""></iframe>
                                    </div>
                                    <!-- End Widget Text-->
                                </div>
                            @endforeach
                            <!--End Item Club News -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=" paddings">
            <div class="container">
                <!--Items Club News -->
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="clear-title">Advertisement</h3>
                    </div>

                    <!--Item Club News -->
                    @foreach ($data['ads'] as $item)
                        <div class="col-lg-6 col-xl-4">
                            <!-- Widget Text-->
                            <div class="panel-box">
                                <div class="titles no-margin">
                                    <h4><a href="#">{{ $item->name }}</a></h4>
                                </div>
                                <a href="#"><img src="{{ asset('assets/admin/img/ads/' . $item->image_url) }}"
                                        width="403px" height="269px" alt=""></a>
                                <div class="row">
                                    <div class="info-panel">
                                        <p>{{ $item->description }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Widget Text-->
                        </div>
                    @endforeach
                    <!--End Item Club News -->
                </div>
                <!--End Items Club News -->
            </div>
        </div>

    </section>
    <!-- End Section Area -  Content Central -->
    <div class="instagram-btn light">
        <div class="btn-instagram">
            <img style="width: 70px;" src="{{ asset('assets/frontend/img/logo.png') }}" alt="Logo" class="logo_img">
        </div>
    </div>
    <div class="content-instagram">
        <div id="instafeed"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/frontend/js/cricket/home.js') }}"></script>
@endsection
