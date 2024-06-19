@extends('frontend.layouts.master')
@section('frontend-content')
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
                            <li>Inner Page</li>
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
                        <li><a href="#currentMatches" data-toggle="tab">Current Matches</a></li>
                        <li><a href="#futureMatches" data-toggle="tab">Current & Future Matches</a></li>
                        <li><a href="#matchByDay" data-toggle="tab">Match By Day</a></li>
                        <li><a href="#team" data-toggle="tab">Team</a></li>
                        <li><a href="#seriesArchive" data-toggle="tab">Series Archive</a></li>
                    </ul>
                    <!-- End Nav Tabs -->
                </div>
                <div class="col-lg-12 padding-top-mini">
                    <!-- Content Tabs -->
                    <div class="tab-content">
                        <!-- Tab One - current Matches -->
                        <div class="tab-pane fade show active" id="currentMatches">

                            <div class="panel-box padding-b">
                                <div class="titles mb-0">
                                    <h4>Live Cricket Score</h4>
                                    <div class="mt-5 ml-4">
                                        <ul class="nav nav-tabs mb-3" id="myTab2">
                                            <li class="active"><a href="#live" data-toggle="tab">Live</a></li>
                                            <li><a href="#recent" data-toggle="tab">Recent</a></li>
                                            <li><a href="#upcoming" data-toggle="tab">Upcoming</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane  row" >
                                    <div class="col-lg-9 padding-top-mini">
                                        <div class="tab-content">
                                            <!-- Content live tab -->
                                            <div class="tab-pane fade show active" id="live">
                                                <h5>Live</h5>
                                            </div>
                                            {{-- end live tab --}}

                                            <!-- Content live tab -->
                                            <div class="tab-pane" id="recent">
                                                <h5>recent</h5>
                                            </div>
                                            {{-- end live tab --}}

                                            <!-- Content live tab -->
                                            <div class="tab-pane " id="upcoming">
                                                <h5>upcoming</h5>
                                            </div>
                                            {{-- end live tab --}}

                                        </div>

                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- Tab One - current Matches -->

                        <!-- Tab Two - future Matches -->
                        <div class="tab-pane fade active" id="futureMatches">
                            <div class="panel-box" style="padding-bottom: 10px">
                                <div class="titles mb-0">
                                    <h4>Cricket Schedule</h4>
                                    <div class="mt-5 ml-4">
                                        <ul class="nav nav-tabs mb-3" id="myTab">
                                            <li><a href="#international" data-toggle="tab" style="border-radius: 20px;">International</a></li>
                                            <li><a href="#domestic" data-toggle="tab" style="border-radius: 20px;">Domestic & Others</a></li>
                                            <li><a href="#league" data-toggle="tab" style="border-radius: 20px;">T20 Leagues</a></li>
                                            <li><a href="#women" data-toggle="tab" style="border-radius: 20px;">Women</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="tab-content">
                                    {{-- international --}}
                                <div class="tab-pane m-2 active" id="international">
                                    <table class="table table-responsive table-hover">
                                        <thead>
                                            <tr>
                                                <th style="width: 150px">Month</th>
                                                <th>Series Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Jun 19, 07:00 </td>
                                                <td>
                                                    <strong>Colombia</strong><br>
                                                    <small class="meta-text">GROUP H.</small><br>
                                                    <small class="meta-text">Mordovia Arena,Saransk</small>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jun 19, 07:00 </td>
                                                <td>
                                                    <strong>Colombia</strong><br>
                                                    <small class="meta-text">GROUP H.</small><br>
                                                    <small class="meta-text">Mordovia Arena,Saransk</small>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jun 19, 07:00 </td>
                                                <td>
                                                    <strong>Colombia</strong><br>
                                                    <small class="meta-text">GROUP H.</small><br>
                                                    <small class="meta-text">Mordovia Arena,Saransk</small>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jun 19, 07:00 </td>
                                                <td>
                                                    <strong>Colombia</strong><br>
                                                    <small class="meta-text">GROUP H.</small><br>
                                                    <small class="meta-text">Mordovia Arena,Saransk</small>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
        
                                </div>
                                {{-- end international --}}

                                {{-- domestic --}}
                                <div class="tab-pane m-2" id="domestic">
                                    <table class="table table-responsive table-hover">
                                        <thead>
                                            <tr>
                                                <th style="width: 150px">Month</th>
                                                <th>Series Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Jun 19, 07:00 </td>
                                                <td>
                                                    <strong>Colombia</strong><br>
                                                    <small class="meta-text">GROUP H.</small><br>
                                                    <small class="meta-text">Mordovia Arena,Saransk</small>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jun 19, 07:00 </td>
                                                <td>
                                                    <strong>Colombia</strong><br>
                                                    <small class="meta-text">GROUP H.</small><br>
                                                    <small class="meta-text">Mordovia Arena,Saransk</small>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jun 19, 07:00 </td>
                                                <td>
                                                    <strong>Colombia</strong><br>
                                                    <small class="meta-text">GROUP H.</small><br>
                                                    <small class="meta-text">Mordovia Arena,Saransk</small>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jun 19, 07:00 </td>
                                                <td>
                                                    <strong>Colombia</strong><br>
                                                    <small class="meta-text">GROUP H.</small><br>
                                                    <small class="meta-text">Mordovia Arena,Saransk</small>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Jun 19, 07:00 </td>
                                                <td>
                                                    <strong>Colombia</strong><br>
                                                    <small class="meta-text">GROUP H.</small><br>
                                                    <small class="meta-text">Mordovia Arena,Saransk</small>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
        
                                </div>
                                {{-- end domestic --}}

                                {{-- league --}}
                                <div class="tab-pane m-2" id="league">
                                    <table class="table table-responsive table-hover">
                                        <thead>
                                            <tr>
                                                <th style="width: 150px">Month</th>
                                                <th>Series Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Jun 19, 07:00 </td>
                                                <td>
                                                    <strong>Colombia</strong><br>
                                                    <small class="meta-text">GROUP H.</small><br>
                                                    <small class="meta-text">Mordovia Arena,Saransk</small>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jun 19, 07:00 </td>
                                                <td>
                                                    <strong>Colombia</strong><br>
                                                    <small class="meta-text">GROUP H.</small><br>
                                                    <small class="meta-text">Mordovia Arena,Saransk</small>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
        
                                </div>
                                {{-- end league --}}

                                {{-- women --}}
                                <div class="tab-pane m-2" id="women">
                                    <table class="table table-responsive table-hover">
                                        <thead>
                                            <tr>
                                                <th style="width: 150px">Month</th>
                                                <th>Series Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Jun 19, 07:00 </td>
                                                <td>
                                                    <strong>Colombia</strong><br>
                                                    <small class="meta-text">GROUP H.</small><br>
                                                    <small class="meta-text">Mordovia Arena,Saransk</small>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
        
                                </div>
                                {{-- end women --}}
                                </div>
                            </div>
                        </div>
                        <!-- End Tab Two - future Matches -->

                        <!-- Tab Theree - matchByDay -->
                        <div class="tab-pane" id="matchByDay">

                            <table class="table-striped table-responsive table-hover">
                                <thead>
                                    <tr>
                                        <th>Team A</th>
                                        <th class="text-center">VS</th>
                                        <th>Team B</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="img/clubs-logos/colombia.png" alt="icon">
                                            <strong>Colombia</strong><br>
                                            <small class="meta-text">GROUP H.</small>
                                        </td>
                                        <td class="text-center">Vs</td>
                                        <td>
                                            <img src="img/clubs-logos/japan.png" alt="icon1">
                                            <strong>Japan</strong><br>
                                            <small class="meta-text">GROUP H.</small>
                                        </td>
                                        <td>
                                            Jun 19, 07:00<br>
                                            <small class="meta-text">Mordovia Arena,Saransk</small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="img/clubs-logos/pol.png" alt="icon1">
                                            <strong>Poland</strong><br>
                                            <small class="meta-text">GROUP H.</small>
                                        </td>
                                        <td class="text-center">Vs</td>
                                        <td>
                                            <img src="img/clubs-logos/colombia.png" alt="icon">
                                            <strong>Colombia</strong><br>
                                            <small class="meta-text">GROUP H.</small>
                                        </td>
                                        <td>
                                            Jun 24, 13:00<br>
                                            <small class="meta-text">Kazan Arena,Kazan</small>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <!-- End Tab Theree - matchByDay -->

                        <!-- Tab Theree - teams -->
                        <div class="tab-pane" id="team">
                            <div class="recent-results results-page">
                                <div class="info-results">
                                    <ul>
                                        <li>
                                            <span class="head">
                                                Portugal Vs Spain <span class="date">27 Jun 2017</span>
                                            </span>

                                            <div class="goals-result">
                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/por.png" alt="">
                                                    Portugal
                                                </a>

                                                <span class="goals">
                                                    <b>2</b> - <b>3</b>
                                                    <a href="single-result.html" class="btn theme">View More</a>
                                                </span>

                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/esp.png" alt="">
                                                    Spain
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <span class="head">
                                                Rusia Vs Colombia <span class="date">30 Jun 2017</span>
                                            </span>

                                            <div class="goals-result">
                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/rusia.png" alt="">
                                                    Rusia
                                                </a>

                                                <span class="goals">
                                                    <b>2</b> - <b>3</b>
                                                    <a href="single-result.html" class="btn theme">View More</a>
                                                </span>

                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/colombia.png" alt="">
                                                    Colombia
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <span class="head">
                                                Uruguay Vs Portugal <span class="date">31 Jun 2017</span>
                                            </span>

                                            <div class="goals-result">
                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/uru.png" alt="">
                                                    Uruguay
                                                </a>

                                                <span class="goals">
                                                    <b>2</b> - <b>3</b>
                                                    <a href="single-result.html" class="btn theme">View More</a>
                                                </span>

                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/por.png" alt="">
                                                    Portugal
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <span class="head">
                                                Uruguay Vs Portugal <span class="date">31 Jun 2017</span>
                                            </span>

                                            <div class="goals-result">
                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/uru.png" alt="">
                                                    Uruguay
                                                </a>

                                                <span class="goals">
                                                    <b>2</b> - <b>3</b>
                                                    <a href="single-result.html" class="btn theme">View More</a>
                                                </span>

                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/por.png" alt="">
                                                    Portugal
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <span class="head">
                                                Uruguay Vs Portugal <span class="date">31 Jun 2017</span>
                                            </span>

                                            <div class="goals-result">
                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/uru.png" alt="">
                                                    Uruguay
                                                </a>

                                                <span class="goals">
                                                    <b>2</b> - <b>3</b>
                                                    <a href="single-result.html" class="btn theme">View More</a>
                                                </span>

                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/por.png" alt="">
                                                    Portugal
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <span class="head">
                                                Uruguay Vs Portugal <span class="date">31 Jun 2017</span>
                                            </span>

                                            <div class="goals-result">
                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/uru.png" alt="">
                                                    Uruguay
                                                </a>

                                                <span class="goals">
                                                    <b>2</b> - <b>3</b>
                                                    <a href="single-result.html" class="btn theme">View More</a>
                                                </span>

                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/por.png" alt="">
                                                    Portugal
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <span class="head">
                                                Uruguay Vs Portugal <span class="date">31 Jun 2017</span>
                                            </span>

                                            <div class="goals-result">
                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/uru.png" alt="">
                                                    Uruguay
                                                </a>

                                                <span class="goals">
                                                    <b>2</b> - <b>3</b>
                                                    <a href="single-result.html" class="btn theme">View More</a>
                                                </span>

                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/por.png" alt="">
                                                    Portugal
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <span class="head">
                                                Portugal Vs Spain <span class="date">27 Jun 2017</span>
                                            </span>

                                            <div class="goals-result">
                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/por.png" alt="">
                                                    Portugal
                                                </a>

                                                <span class="goals">
                                                    <b>2</b> - <b>3</b>
                                                    <a href="single-result.html" class="btn theme">View More</a>
                                                </span>

                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/esp.png" alt="">
                                                    Spain
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <span class="head">
                                                Uruguay Vs Portugal <span class="date">31 Jun 2017</span>
                                            </span>

                                            <div class="goals-result">
                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/uru.png" alt="">
                                                    Uruguay
                                                </a>

                                                <span class="goals">
                                                    <b>2</b> - <b>3</b>
                                                    <a href="single-result.html" class="btn theme">View More</a>
                                                </span>

                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/por.png" alt="">
                                                    Portugal
                                                </a>
                                            </div>
                                        </li>

                                        <li>
                                            <span class="head">
                                                Portugal Vs Spain <span class="date">27 Jun 2017</span>
                                            </span>

                                            <div class="goals-result">
                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/por.png" alt="">
                                                    Portugal
                                                </a>

                                                <span class="goals">
                                                    <b>2</b> - <b>3</b>
                                                    <a href="single-result.html" class="btn theme">View More</a>
                                                </span>

                                                <a href="single-team.html">
                                                    <img src="img/clubs-logos/esp.png" alt="">
                                                    Spain
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Tab Theree - team -->

                        <!-- Tab Theree - series Archive -->
                        <div class="tab-pane" id="seriesArchive">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="stats-info">
                                        <ul>
                                            <li>
                                                Matches Played
                                                <h3>866</h3>
                                            </li>

                                            <li>
                                                Wins
                                                <h3>328</h3>
                                            </li>

                                            <li>
                                                Losses
                                                <h3>317</h3>
                                            </li>

                                            <li>
                                                Goals
                                                <h3>1,188</h3>
                                            </li>

                                            <li>
                                                Goals Conceded
                                                <h3>1,170</h3>
                                            </li>

                                            <li>
                                                Clean Sheets
                                                <h3>226</h3>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-xl-4">
                                    <!-- Attack -->
                                    <div class="panel-box">
                                        <div class="titles no-margin">
                                            <h4><i class="fa fa-calendar"></i>Attack</h4>
                                        </div>
                                        <ul class="list-panel">
                                            <li>
                                                <p>Goals <span>1,188</span></p>
                                            </li>
                                            <li>
                                                <p>Goals Per Match <span>1.37</span></p>
                                            </li>
                                            <li>
                                                <p>Shots <span>4,621</span></p>
                                            </li>
                                            <li>
                                                <p>Shooting Accuracy % <span>32%</span></p>
                                            </li>
                                            <li>
                                                <p>Penalties Scored <span>30</span></p>
                                            </li>
                                            <li>
                                                <p>Big Chances Created <span>293</span></p>
                                            </li>
                                            <li>
                                                <p>Hit Woodwork <span>107</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Attack -->
                                </div>

                                <div class="col-lg-6 col-xl-4">
                                    <!-- Attack -->
                                    <div class="panel-box">
                                        <div class="titles no-margin">
                                            <h4><i class="fa fa-calendar"></i>Team Play</h4>
                                        </div>
                                        <ul class="list-panel">
                                            <li>
                                                <p>Passes <span>140,417</span></p>
                                            </li>
                                            <li>
                                                <p>Passes Per Match <span>162.14</span></p>
                                            </li>
                                            <li>
                                                <p>Pass Accuracy % <span>76%</span></p>
                                            </li>
                                            <li>
                                                <p>Crosses <span>8,148</span></p>
                                            </li>
                                            <li>
                                                <p>Cross Accuracy % <span>22%</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Attack -->
                                </div>

                                <div class="col-lg-6 col-xl-4">
                                    <!-- Attack -->
                                    <div class="panel-box">
                                        <div class="titles no-margin">
                                            <h4><i class="fa fa-calendar"></i>Defence</h4>
                                        </div>
                                        <ul class="list-panel">
                                            <li>
                                                <p>Clean Sheets <span>226</span></p>
                                            </li>
                                            <li>
                                                <p>Goals Conceded <span>1,170</span></p>
                                            </li>
                                            <li>
                                                <p>Goals Conceded Per Match <span>1.35</span></p>
                                            </li>
                                            <li>
                                                <p>Saves <span>392</span></p>
                                            </li>
                                            <li>
                                                <p>Tackles <span>7,438</span></p>
                                            </li>
                                            <li>
                                                <p>Tackle Success % <span>75%</span></p>
                                            </li>
                                            <li>
                                                <p>Blocked Shots <span>1,208</span></p>
                                            </li>
                                            <li>
                                                <p>Interceptions <span>5,334</span></p>
                                            </li>
                                            <li>
                                                <p>Clearances <span>11,436</span></p>
                                            </li>
                                            <li>
                                                <p>Headed Clearance <span>3,710</span></p>
                                            </li>
                                            <li>
                                                <p>Aerial Battles/Duels Won <span>25,401</span></p>
                                            </li>
                                            <li>
                                                <p>Errors Leading To Goal <span>59</span></p>
                                            </li>
                                            <li>
                                                <p>Own Goals <span>27</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Attack -->
                                </div>
                            </div>

                        </div>
                        <!-- End Tab Theree - series Archive -->
                    </div>
                    <!-- Content Tabs -->
                </div>

                <!-- Side info single team-->
                {{-- <div class="col-lg-3 padding-top-mini">
                <!-- Diary -->
                <div class="panel-box">
                    <div class="titles">
                        <h4><i class="fa fa-calendar"></i>Diary</h4>
                    </div>

                    <!-- List Diary -->
                    <ul class="list-diary">
                        <!-- Item List Diary -->
                        <li>
                            <h6>GROUP A <span>14 JUN 2018 - 18:00</span></h6>
                            <ul class="club-logo">
                                <li>
                                    <img src="img/clubs-logos/rusia.png" alt="">
                                    <span>RUSSIA</span>
                                </li>
                                <li>
                                    <img src="img/clubs-logos/arabia.png" alt="">
                                    <span>SAUDI ARABIA</span>
                                </li>
                            </ul>
                        </li>
                        <!-- End Item List Diary -->

                        <!-- Item List Diary -->
                        <li>
                            <h6>GROUP E <span>22 JUN 2018 - 15:00</span></h6>
                            <ul class="club-logo">
                                <li>
                                    <img src="img/clubs-logos/bra.png" alt="">
                                    <span>BRAZIL</span>
                                </li>
                                <li>
                                    <img src="img/clubs-logos/costa-rica.png" alt="">
                                    <span>COSTA RICA</span>
                                </li>
                            </ul>
                        </li>
                        <!-- End Item List Diary -->

                        <!-- Item List Diary -->
                        <li>
                            <h6>GROUP H <span>19 JUN 2018 - 15:00</span></h6>
                            <ul class="club-logo">
                                <li>
                                    <img src="img/clubs-logos/colombia.png" alt="">
                                    <span>COLOMBIA</span>
                                </li>
                                <li>
                                    <img src="img/clubs-logos/japan.png" alt="">
                                    <span>JAPAN</span>
                                </li>
                            </ul>
                        </li>
                        <!-- End Item List Diary -->

                        <!-- Item List Diary -->
                        <li>
                            <h6>GROUP C <span>16 JUN 2018 - 15:00</span></h6>
                            <ul class="club-logo">
                                <li>
                                    <img src="img/clubs-logos/fra.png" alt="">
                                    <span>FRANCE</span>
                                </li>
                                <li>
                                    <img src="img/clubs-logos/aus.png" alt="">
                                    <span>AUSTRALIA</span>
                                </li>
                            </ul>
                        </li>
                        <!-- End Item List Diary -->
                    </ul>
                    <!-- End List Diary -->
                </div>
                <!-- End Diary -->

                <!-- Video presentation -->
                <div class="panel-box">
                    <div class="titles no-margin">
                        <h4>Presentation</h4>
                    </div>
                    <!-- Locations Video -->
                    <div class="row">
                        <iframe src="https://www.youtube.com/embed/AfOlAUd7u4o" class="video"></iframe>
                        <div class="info-panel">
                            <h4>Rio de Janeiro</h4>
                            <p>Lorem ipsum dolor sit amet, sit amet, consectetur adipisicing elit, elit, incididunt ut labore et dolore magna aliqua sit amet, consectetur adipisicing elit,</p>
                        </div>
                    </div>
                    <!-- End Locations Video -->
                </div>
                <!-- End Video presentation-->

                <!-- Widget Text-->
                <div class="panel-box">
                    <div class="titles no-margin">
                        <h4>Widget Image</h4>
                    </div>
                    <img src="img/slide/1.jpg" alt="">
                    <div class="row">
                        <div class="info-panel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, ut sit amet, consectetur adipisicing elit, labore et dolore.</p>
                        </div>
                    </div>
                </div>
                <!-- End Widget Text-->
            </div> --}}
                <!-- end Side info single team-->

            </div>
        </div>
    </div>
@endsection
