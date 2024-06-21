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
                        <li class="active"><a href="#international" data-toggle="tab">International</a></li>
                        <li><a href="#domestic" data-toggle="tab">Domestic & Others</a></li>
                        <li><a href="#league" data-toggle="tab">T20 Leagues</a></li>
                        <li><a href="#women" data-toggle="tab">Women</a></li>
                    </ul>
                    <!-- End Nav Tabs -->
                </div>
                <div class="col-lg-12">
                    <!-- Content Tabs -->
                    <div class="tab-content" style="padding-bottom: 100px !important;">
                        <!-- Tab One - current Matches -->
                        <div class="tab-pane fade show active" id="international">
                            <table class="table" border="1" id="international-schedule" style="min-height: 100px;">
                                <div class="loader-div">
                                    <div class="loader"></div>
                                </div>
                            </table>
                        </div>
                        <!-- Tab One - current Matches -->

                        <!-- Tab Two - future Matches -->
                        <div class="tab-pane" id="domestic">
                            <table class="table" border="1" id="domestic-schedule" style="min-height: 100px;">
                                <div class="loader-div">
                                    <div class="loader"></div>
                                </div>
                            </table>
                        </div>
                        <!-- End Tab Two - future Matches -->

                        <!-- Tab Theree - matchByDay -->
                        <div class="tab-pane" id="league">
                            <table class="table" border="1" id="league-schedule" style="min-height: 100px;">
                                <div class="loader-div">
                                    <div class="loader"></div>
                                </div>
                            </table>
                        </div>
                        <!-- End Tab Theree - matchByDay -->

                        <!-- Tab Theree - teams -->
                        <div class="tab-pane" id="women">
                            <table class="table" border="1" id="women-schedule" style="min-height: 100px;">
                                <div class="loader-div">
                                    <div class="loader"></div>
                                </div>
                            </table>
                        </div>
                        <!-- End Tab Theree - team -->

                    </div>
                    <!-- Content Tabs -->
                </div>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/frontend/js/cricket/schedule.js') }}"></script>
@endsection
