@extends('frontend.layouts.master')
@section('page-title', 'Team Detail')
@section('website-content')

    <div class="inner-page-banner">
        <div class="container">
        </div>
    </div>
    <div class="inner-information-text">
        <div class="container">
        <h3>Team Details</h3>
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Team Details</li>
        </ul>
        </div>
    </div>
    <section id="contant" class="contant main-heading team">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <h4>India team</h4>
                        </div>

                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" id="home-tab2" data-toggle="tab" href="#home"
                                        role="tab" aria-controls="home" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="schedule-tab2" data-toggle="tab"
                                        href="#schedule" role="tab" aria-controls="schedule"
                                        aria-selected="false">Schedule</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="results-tab2" data-toggle="tab" href="#results"
                                        role="tab" aria-controls="results" aria-selected="false">Results</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="news-tab2" data-toggle="tab" href="#news"
                                        role="tab" aria-controls="news" aria-selected="false">News</a>
                                </li>

                                {{-- <li class="nav-item">
                                    <a class="nav-link" id="videos-tab2" data-toggle="tab" href="#videos"
                                        role="tab" aria-controls="videos" aria-selected="false">Videos</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="photos-tab2" data-toggle="tab" href="#photos"
                                        role="tab" aria-controls="photos" aria-selected="false">Photos</a>
                                </li> --}}
                                
                                <li class="nav-item">
                                    <a class="nav-link" id="stats-tab2" data-toggle="tab" href="#stats"
                                        role="tab" aria-controls="stats" aria-selected="false">Stats</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="player-tab2" data-toggle="tab" href="#player"
                                        role="tab" aria-controls="Player" aria-selected="false">Players</a>
                                </li>
                            </ul>

                            <div class="tab-content tab-bordered" id="myTab3Content">

                                {{-- home --}}
                                <div class="tab-pane fade active show" id="home" role="tabpanel"
                                    aria-labelledby="home-tab2">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>

                                {{-- schedule --}}
                                <div class="tab-pane fade" id="schedule" role="tabpanel" aria-labelledby="schedule">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Match Details</th>
                                                    <th>Time</th>
                                                </tr>
                                            </thead>
                                            <tbody>  
                                                <tr class="border-bottom">
                                                    <td>4-4-2023</td>
                                                    <td>details</td>
                                                    <td>fdgjhfh</td>
                                                </tr>    
                                                <tr class="border-bottom">
                                                    <td>4-4-2023</td>
                                                    <td>details</td>
                                                    <td>fdgjhfh</td>
                                                </tr>
                                                <tr class="border-bottom">
                                                    <td>4-4-2023</td>
                                                    <td>details</td>
                                                    <td>fdgjhfh</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                {{-- results --}}
                                <div class="tab-pane fade" id="results" role="tabpanel" aria-labelledby="results-tab2">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Match Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>  
                                                <tr class="border-bottom">
                                                    <td>4-4-2023</td>
                                                    <td>details</td>
                                                </tr>    
                                                <tr class="border-bottom">
                                                    <td>4-4-2023</td>
                                                    <td>details</td>
                                                </tr>
                                                <tr class="border-bottom">
                                                    <td>4-4-2023</td>
                                                    <td>details</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                {{-- news --}}
                                <div class="tab-pane fade" id="news" role="tabpanel"
                                    aria-labelledby="news-tab2">
                                    <ul class="list-unstyled">
                                        
                                        <li class="media">
                                            <img class="mr-0" src="{{ asset('assets/admin/img/logo.png') }}" width="80" height="80" alt="Generic placeholder image">
                                            <!-- You can replace the src with the actual image URL -->
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-1">latest News</h5>
                                                <p>Namibia became the first side to successfully</p>
                                            </div>
                                        </li>
                                            
                                    </ul>

                                </div>

                                {{-- videos --}}
                                {{-- <div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="videos-tab2">
                                    <p>videos</p>
                                </div> --}}

                                {{-- photos --}}
                                {{-- <div class="tab-pane fade" id="photos" role="tabpanel" aria-labelledby="photos-tab2">
                                    <p>photos</p>
                                </div> --}}

                                {{-- stats --}}
                                <div class="tab-pane fade" id="stats" role="tabpanel" aria-labelledby="stats-tab2">
                                    <p>stats</p>
                                </div>

                                {{-- players --}}
                                <div class="tab-pane fade" id="player" role="tabpanel" aria-labelledby="player-tab2">
                                    <p>players</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
