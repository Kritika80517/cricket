@extends('frontend.layouts.master')
@section('frontend-content')
<style>
    .player-item {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }
    .player-item img {
        /* border-radius: 50%; */
        width: 80px;
        height: 80px;
        margin-right: 15px;
    }
    .player-item div {
        flex-grow: 1;
    }
    .player-name {
        font-weight: bold;
    }
    .player-role {
        color: gray;
    }
</style>
    <div class="section-title" style="background:url(/assets/frontend/img/slide/1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1> {{ request()->title ?? 'Series' }} </h1>
                </div>

                <div class="col-md-4">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Series Details</li>
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
                        <li><a href="#point_table" data-toggle="tab">Point tables</a></li>
                        <li><a href="#squad" data-toggle="tab">Squads</a></li>
                        <li><a href="#stats" data-toggle="tab">Stats</a></li>
                        <li><a href="#venue" data-toggle="tab">Venues</a></li>
                    </ul>
                    <!-- End Nav Tabs -->
                </div>
                <div class="col-lg-12">
                    <div class="panel-box">
                        <div class="titles mb-0">
                            <h4>{{ request()->name ?? '' }}</h4>
                        </div>
                        <!-- Content Tabs -->
                        <div class="tab-content">
                            {{-- Home tab --}}
                            <div class="tab-pane fade show active" id="home">
                                <div class="pt-4 pb-4" id="series-home-news" style="min-height: 200px;">
                                    <div class="loader-div">
                                        <div class="loader"></div>
                                    </div>
                                </div>
                            </div>

                            {{-- Schedule tab --}}
                            <div class="tab-pane" id="schedule">
                                <table class="table mt-2" border="1" id="series-schedules" style="min-height: 200px;">
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>

                            {{-- News tab --}}
                            <div class="tab-pane" id="news">
                                <div id="series-news" class="pt-4 pb-4">
                                    <div class="loader-div">
                                        <div class="loader"></div>
                                    </div>
                                </div>
                            </div>

                            {{-- Point table --}}
                            <div class="tab-pane" id="point_table">
                                <div class="row mt-2 mb-2">
                                    <div class="col-lg-12">
                                        <table class="table-striped table-responsive table-hover result-point">
                                            <thead class="point-table-head">
                                                <tr>
                                                    <th class="text-left">TEAMS</th>
                                                    <th class="text-center">Mat</th>
                                                    <th class="text-center">Won</th>
                                                    <th class="text-center">Lost</th>
                                                    <th class="text-center">Tied</th>
                                                    <th class="text-center">PTS</th>
                                                    <th class="text-center">NRR</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody class="text-center" id="pointsTableBody">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            {{-- squad --}}
                            <div class="tab-pane" id="squad">
                                <div class="row mt-2 mb-2">
                                    <div class="col-lg-3" id="series-squads">
                                        
                                    </div>

                                    <div class="col-lg-9">
                                        <div id="series-squads-players" class="groups-list page-group">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Stats --}}
                            <div class="tab-pane mt-2" id="stats">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div id="series-stats-filters">
                                            <div class="loader-div">
                                                <div class="loader"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-9">
                                       
                                        <table class="table-striped table-responsive table-hover result-point">
                                            <thead class="point-table-head">
                                                <tr>
                                                    <th>PLAYER</th>
                                                    <th class="text-right">MATCHES</th>
                                                    <th class="text-right">INNS</th>
                                                    <th class="text-right">RUNS</th>
                                                    <th class="text-right">AVG</th>
                                                    <th class="text-right">SR</th>
                                                    <th class="text-right">4s</th>
                                                    <th class="text-right">6s</th>
                                                </tr>
                                            </thead>
                                            <tbody id="team-stats-data">
                                                <!-- Data will be populated here -->
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>

                            </div>

                            {{-- Venue --}}
                            <div class="tab-pane" id="venue">
                                <div class="pt-4 pb-4" id="series-venues">
                                    <div class="loader-div">
                                        <div class="loader"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Content Tabs -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('assets/frontend/js/cricket/series-details.js') }}"></script>
@endsection
