@extends('frontend.layouts.master')
@section('frontend-content')
    <div class="section-title" style="background:url(assets/frontend/img/slide/1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Schedule</h1>
                </div>

                <div class="col-md-4">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Schedule</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-team-tabs">
        <div class="container">
            <div class="row">
                <!-- Left Content - Tabs and Carousel -->
                <div class="col-xl-12 col-md-12">
                    <!-- Nav Tabs -->
                    <ul class="nav nav-tabs" id="myTab1">
                        <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                        <li><a href="#schedule" data-toggle="tab">Schedule & Results</a></li>
                        <li><a href="#news" data-toggle="tab">News</a></li>
                        <li><a href="#stats" data-toggle="tab">Stats</a></li>
                        <li><a href="#point_table" data-toggle="tab">Point tables</a></li>
                        <li><a href="#squad" data-toggle="tab">Squads</a></li>
                        <li><a href="#venue" data-toggle="tab">Venues</a></li>
                    </ul>
                    <!-- End Nav Tabs -->
                </div>
                <div class="col-lg-12">
                    <!-- Content Tabs -->
                    <div class="tab-content" style="padding-bottom: 100px !important;">
                        {{-- Home tab --}}
                        <div class="tab-pane fade show active" id="home">
                            
                        </div>

                        {{-- Schedule tab --}}
                        <div class="tab-pane" id="schedule">
                            
                        </div>

                        {{-- News tab --}}
                        <div class="tab-pane" id="news">
                            
                        </div>

                        {{-- Stats --}}
                        <div class="tab-pane" id="stats">
                            
                        </div>

                        {{-- Point table --}}
                        <div class="tab-pane" id="point_table">
                            
                        </div>

                        {{-- Stats --}}
                        <div class="tab-pane" id="squad">
                            
                        </div>

                        {{-- Venue --}}
                        <div class="tab-pane" id="venue">
                            
                        </div>

                    </div>
                    <!-- Content Tabs -->
                </div>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/frontend/js/cricket/schedule.js') }}"></script>
@endsection
