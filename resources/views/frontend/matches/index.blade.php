@extends('frontend.layouts.master')
@section('frontend-content')

<style>
    .match-nav li a{
        padding : 5px 10px;
        border-radius: 20px;
        font-size: 12px;
    }
    .navbar {
            display: flex;
            justify-content: left;
            align-items: left;
            list-style-type: none;
            padding: 0;
            margin: 20px 0;
        }
        .navbar li {
            margin: 0 10px;
        }
        .navbar li a {
            text-decoration: none;
            color: blue;
        }
        .navbar li:not(:last-child)::after {
            content: '|';
            color: black;
            margin-left: 10px;
        }
        .bg-light{
            background: #f1f1f1 !important;
        }
</style>
    <div class="section-title" style="background:url(assets/frontend/img/slide/1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Matches</h1>
                </div>

                <div class="col-md-4">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Match</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-team-tabs">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 padding-top-mini">
                    <div class="container padding-top">
                        <div class="row d-flex justify-content-center">
                            <ul class="nav nav-tabs" id="myTab1">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#live" data-toggle="tab">Live</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#recent" data-toggle="tab">Recent</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#upcoming" data-toggle="tab">Upcoming</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Content Tabs -->
                    <div class="tab-content">
                        <!-- Live Matches -->
                        <div class="tab-pane show active" id="live">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th id="live-international-header">International</th>
                                            <th id="live-domestic-header">Domestic & Others</th>
                                            <th id="live-league-header">League</th>
                                            <th id="live-women-header">Women</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td id="live-international-matches"></td>
                                            <td id="live-domestic-matches"></td>
                                            <td id="live-league-matches"></td>
                                            <td id="live-women-matches"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    
                        <!-- Recent Matches -->
                        <div class="tab-pane" id="recent">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th id="recent-international-header">International</th>
                                            <th id="recent-domestic-header">Domestic & Others</th>
                                            <th id="recent-league-header">League</th>
                                            <th id="recent-women-header">Women</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td id="recent-international-matches"></td>
                                            <td id="recent-domestic-matches"></td>
                                            <td id="recent-league-matches"></td>
                                            <td id="recent-women-matches"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    
                        <!-- Upcoming Matches -->
                        <div class="tab-pane" id="upcoming">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th id="upcoming-international-header">International</th>
                                            <th id="upcoming-domestic-header">Domestic & Others</th>
                                            <th id="upcoming-league-header">League</th>
                                            <th id="upcoming-women-header">Women</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td id="upcoming-international-matches"></td>
                                            <td id="upcoming-domestic-matches"></td>
                                            <td id="upcoming-league-matches"></td>
                                            <td id="upcoming-women-matches"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/frontend/js/cricket/matches.js') }}"></script>
    
    <script>
        $(document).ready(function(){
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                var target = $(e.target).attr("href"); // activated tab
                $('.show').removeClass('active');
                $(target).addClass('active');
            });
        });
    </script>
@endsection
