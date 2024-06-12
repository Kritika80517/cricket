@extends('frontend.layouts.master')
@section('frontend-content')

<div class="section-title-team">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="row">
                    <div class="col-md-9">
                        <h1>{{ request()->teamName ?? "" }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-image-team" style="background:url(/assets/frontend/img/clubs-teams/colombia.jpg);"></div>
</div>

<section class="content-info">

    <!-- Single Team Tabs -->
    <div class="single-team-tabs">
       <div class="container">
            <div class="row">
                <!-- Left Content - Tabs and Carousel -->
                <div class="col-xl-12 col-md-12">
                    <!-- Nav Tabs -->
                    <ul class="nav nav-tabs" id="myTab">
                       <li class="" aria-expanded="false"><a href="#overview" data-toggle="tab" class="active" aria-expanded="true">Overview</a></li>
                       <li><a href="#schedule" data-toggle="tab" class="" aria-expanded="false">SCHEDULE</a></li>
                       <li><a href="#results" data-toggle="tab" class="" aria-expanded="false">RESULTS</a></li>
                       <li><a href="#news" data-toggle="tab" class="" aria-expanded="false">NEWS</a></li>
                       <li><a href="#stats" data-toggle="tab" class="" aria-expanded="false">STATS</a></li>
                       <li><a href="#players" data-toggle="tab" class="" aria-expanded="false">PLAYERS</a></li>
                    </ul>
                    <!-- End Nav Tabs -->
                </div>

                <div class="col-lg-9">
                    <!-- Content Tabs -->
                    <div class="tab-content">
                        <!-- Tab One - overview -->
                        <div class="tab-pane active" id="overview" aria-expanded="true">

                           <div class="panel-box padding-b">
                              <div class="titles">
                                  <h4>Top Stories</h4>
                              </div>
                              <div id="top-stories">
                                <div class="loader-div" >
                                    <div class="loader"></div>
                                </div>
                              </div>
                           </div>

                           <!--Latest Photos-->
                           {{-- <div class="row">
                              <div class="col-md-12">
                                  <h3 class="clear-title">Latest Club News</h3>
                              </div>

                              <!--Item Club News -->
                              <div class="col-lg-6 col-xl-4">
                                   <!-- Widget Text-->
                                    <div class="panel-box">
                                        <div class="titles no-margin">
                                            <h4><a href="#">World football's dates.</a></h4>
                                        </div>
                                        <a href="#"><img src="{{asset('assets/frontend/img/blog/1.jpg')}}" alt=""></a>
                                        <div class="row">
                                           <div class="info-panel">
                                                <p>Fans from all around the world can apply for 2018 FIFA World Cup™ tickets as the first window of sales.</p>
                                           </div>
                                        </div>
                                    </div>
                                    <!-- End Widget Text-->
                               </div>
                               <!--End Item Club News -->

                               <!--Item Club News -->
                              <div class="col-lg-6 col-xl-4">
                                   <!-- Widget Text-->
                                    <div class="panel-box">
                                        <div class="titles no-margin">
                                            <h4><a href="#">Mbappe’s year to remember</a></h4>
                                        </div>
                                        <a href="#"><img src="{{asset('assets/frontend/img/blog/2.jpg')}}" alt=""></a>
                                        <div class="row">
                                           <div class="info-panel">
                                                <p>Tickets may be purchased online by using Visa payment cards or Visa Checkout. Visa is the official.</p>
                                           </div>
                                        </div>
                                    </div>
                                    <!-- End Widget Text-->
                               </div>
                               <!--End Item Club News -->

                               <!--Item Club News -->
                              <div class="col-lg-6 col-xl-4">
                                   <!-- Widget Text-->
                                    <div class="panel-box">
                                        <div class="titles no-margin">
                                            <h4><a href="#">Egypt are one family</a></h4>
                                        </div>
                                        <a href="#"><img src="{{asset('assets/frontend/img/blog/3.jpg')}}" alt=""></a>
                                        <div class="row">
                                           <div class="info-panel">
                                                <p>Successful applicants who have applied for supporter tickets and conditional supporter tickets will.</p>
                                           </div>
                                        </div>
                                    </div>
                                    <!-- End Widget Text-->
                               </div>
                               <!--End Item Club News -->
                           </div> --}}
                           <!--End Latest Photos-->

                           <!--Latest video -->
                           {{-- <div class="row no-line-height">
                              <div class="col-md-12">
                                  <h3 class="clear-title">Latest Videos</h3>
                              </div>

                              <div class="col-lg-6 col-xl-4">
                                   <!-- Widget Text-->
                                    <div class="panel-box">
                                        <div class="titles no-margin">
                                            <h4><a href="#">Eliminatory to the world.</a></h4>
                                        </div>
                                        <iframe class="video" src="" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen=""></iframe>
                                    </div>
                                    <!-- End Widget Text-->
                               </div>
                               <!--End Item Club News -->

                               <!--Item Club News -->
                              <div class="col-lg-6 col-xl-4">
                                   <!-- Widget Text-->
                                    <div class="panel-box">
                                        <div class="titles no-margin">
                                            <h4><a href="#">Colombia classification</a></h4>
                                        </div>
                                        <iframe class="video" src="" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen=""></iframe>
                                    </div>
                                    <!-- End Widget Text-->
                               </div>
                               <!--End Item Club News -->

                               <!--Item Club News -->
                              <div class="col-lg-6 col-xl-4">
                                   <!-- Widget Text-->
                                    <div class="panel-box">
                                        <div class="titles no-margin">
                                            <h4><a href="#">World Cup goal</a></h4>
                                        </div>
                                        <iframe class="video" src="" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen=""></iframe>
                                    </div>
                                    <!-- End Widget Text-->
                               </div>
                               <!--End Item Club News -->
                           </div> --}}
                           <!--End Items Club video -->
                        </div>
                        <!-- Tab One - overview -->

                        {{-- Team Schedules --}}
                        <div class="tab-pane" id="schedule" aria-expanded="false">

                            <table class="table-striped table-responsive table-hover">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Match Details</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody id="teams-schedules">
                                 
                                </tbody>
                            </table>

                        </div>

                        {{-- Team Results --}}
                        <div class="tab-pane" id="results" aria-expanded="false">
                            <table class="table-striped table-responsive table-hover">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Match Details</th>
                                    </tr>
                                </thead>
                                <tbody id="teams-results">
                                 
                                </tbody>
                            </table>
                        </div>

                        {{-- Team News --}}
                        <div class="tab-pane " id="news" aria-expanded="true">

                            <div style="padding: 20px 0;" class="panel-box" id="teams-news">
                                <div class="loader-div">
                                    <div class="loader"></div>
                                </div>
                            </div>
 
                        </div>
                        
                        {{-- Team Stats --}}
                        <div class="tab-pane" id="stats" aria-expanded="false">

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
                                            <li><p>Goals <span>1,188</span></p></li>
                                            <li><p>Goals Per Match <span>1.37</span></p></li>
                                            <li><p>Shots <span>4,621</span></p></li>
                                            <li><p>Shooting Accuracy % <span>32%</span></p></li>
                                            <li><p>Penalties Scored <span>30</span></p></li>
                                            <li><p>Big Chances Created <span>293</span></p></li>
                                            <li><p>Hit Woodwork <span>107</span></p></li>
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
                                            <li><p>Passes <span>140,417</span></p></li>
                                            <li><p>Passes Per Match <span>162.14</span></p></li>
                                            <li><p>Pass Accuracy % <span>76%</span></p></li>
                                            <li><p>Crosses <span>8,148</span></p></li>
                                            <li><p>Cross Accuracy % <span>22%</span></p></li>
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
                                            <li><p>Clean Sheets <span>226</span></p></li>
                                            <li><p>Goals Conceded <span>1,170</span></p></li>
                                            <li><p>Goals Conceded Per Match <span>1.35</span></p></li>
                                            <li><p>Saves <span>392</span></p></li>
                                            <li><p>Tackles <span>7,438</span></p></li>
                                            <li><p>Tackle Success % <span>75%</span></p></li>
                                            <li><p>Blocked Shots <span>1,208</span></p></li>
                                            <li><p>Interceptions <span>5,334</span></p></li>
                                            <li><p>Clearances <span>11,436</span></p></li>
                                            <li><p>Headed Clearance <span>3,710</span></p></li>
                                            <li><p>Aerial Battles/Duels Won <span>25,401</span></p></li>
                                            <li><p>Errors Leading To Goal <span>59</span></p></li>
                                            <li><p>Own Goals <span>27</span></p></li>
                                        </ul>
                                    </div>
                                    <!-- End Attack -->
                                </div>
                            </div>

                        </div>

                        {{-- team Players --}}
                        <div class="tab-pane" id="players" aria-expanded="false">
                            <div class="row" id="team-players">

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3">
                   <!-- Diary -->
                    <div class="panel-box">
                        <div class="titles m-0">
                            <h4><i class="fa fa-calendar"></i>MATCHES</h4>
                        </div>

                        <div class="recent-results m-0">
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
                                            </span>
    
                                            <a href="single-team.html">
                                                <img src="img/clubs-logos/por.png" alt="">
                                                    Portugal
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Diary -->
                </div>
                <!-- end Side info single team-->

            </div>
        </div>
    </div>
    <!-- Single Team Tabs -->

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/frontend/js/cricket/teams-details.js') }}"></script>
    
</section>

@endsection