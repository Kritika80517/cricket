@extends('frontend.layouts.master')
@section('frontend-content')

<style>
    .item-player .info-player {
        padding: 35px 0 0 0;
        position: relative;
    }
    .item-player .info-player .number-player {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(0, 0, 0, 0.8);
    border-radius: 50%;
    position: absolute;
    top: -25px;
    left: 50%;
    margin-left: -25px;
    color: #fff;
    font-size: 1rem;
    font-weight: bold;
}
</style>

    <div class="section-title single-player" style="background:url(/assets/frontend/img/slide/3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Single Player</h1>
                </div>

                <div class="col-md-4">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>Inner Page</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="content-info">

        <!-- Single Team Tabs -->
        <div class="single-player-tabs">
           <div class="container">
                <div class="row">
                    <!-- Side info single team-->
                    <div class="col-lg-4 col-xl-3">

                        <div class="item-player single-player">
                            <div class="head-player">
                                <img src="{{asset('assets/frontend/img/players/6.jpg')}}" alt="location-team">
                            </div>
                            <div class="info-player">
                                <span class="number-player">
                                    10
                                </span>
                                <h4>
                                    Jamez Rodriguez
                                    <span>Forward</span>
                                </h4>
                                <ul>
                                    <li>
                                        <strong>CLUB NAME:</strong> <span><img src="{{asset('assets/frontend/img/clubs-logos/colombia.png')}}" alt=""> Colombia </span>
                                    </li><li><strong>MATCHES:</strong> <span>90</span></li>
                                    <li><strong>AGE:</strong> <span>28</span></li>
                                    <li><strong>Goals:</strong> <span>108</span></li>
                                    <li><strong>Discipline:</strong> <span>4 fouls against</span></li>
                                    <li><strong>Passing:</strong> <span>40 free kicks</span></li>
                                </ul>

                                <h6>Follow Jamez Rodriguez</h6>

                                <ul class="social-player">
                                    <li>
                                        <div>
                                            <a href="#" class="facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <a href="#" class="twitter-icon">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <a href="#" class="youtube">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Attack -->
                        <div class="panel-box">
                            <div class="titles no-margin">
                                <h4><i class="fa fa-user"></i>Personal Info</h4>
                            </div>
                            <ul class="list-panel">
                                <li><p>Weight <span>70 Kg</span></p></li>
                                <li><p>Height <span>1.70 Mts</span></p></li>
                                <li><p>Nationality <span>Colombia</span></p></li>
                                <li><p>Place of Birth <span>Cucuta</span></p></li>
                                <li><p>Date of Birth <span>March 5th, 1989</span></p></li>
                            </ul>
                        </div>
                        <!-- End Attack -->
                    </div>
                    <!-- end Side info single team-->

                    <div class="col-lg-8 col-xl-9">
                        <!-- Nav Tabs -->
                        <ul class="nav nav-tabs" id="myTab">
                           <li class="" aria-expanded="false"><a href="#overview" data-toggle="tab" class="active" aria-expanded="true">About</a></li>
                           <li><a href="#career" data-toggle="tab" class="" aria-expanded="false">BATTIG CAREER</a></li>
                           <li><a href="#stats" data-toggle="tab" class="" aria-expanded="false">BOWLING CAREER</a></li>
                        </ul>
                        <!-- End Nav Tabs -->

                        <!-- Content Tabs -->
                        <div class="tab-content">
                            <!-- Tab One - overview -->
                            <div class="tab-pane active" id="overview" aria-expanded="true">

                                <div class="panel-box padding-b">
                                  <div class="titles">
                                      <h4>Jamez overview</h4>
                                  </div>
                                    <div class="row">
                                       <div class="col-lg-12 col-xl-4">
                                           <img src="img/clubs-teams/single-team.jpg" alt="">
                                       </div>

                                       <div class="col-lg-12 col-xl-8">
                                           <p>The Colombia national football team (Spanish: Selección de fútbol de Colombia) represents Colombia in international football competitions and is overseen by the Colombian Football Federation. It is a member of the CONMEBOL and is currently ranked thirteenth in the FIFA World Rankings.[3] The team are nicknamed Los Cafeteros due to the coffee production in their country.</p>

                                            <p>Since the mid-1980s, the national team has been a symbol fighting the country's negative reputation. This has made the sport popular and made the national team a sign of nationalism, pride and passion for many Colombians worldwide.</p>
                                       </div>
                                   </div>
                               </div>
                            </div>
                            <!-- Tab One - overview -->

                            <!-- Tab Theree - career -->
                            <div class="tab-pane" id="career" aria-expanded="false">
                                <div class="col-lg-12">
                                    <table class="table-striped table-responsive table-hover career">
                                        <thead>
                                            <tr>
                                                <th>Season</th>
                                                <th>Club</th>
                                                <th>Apps(Subs)</th>
                                                <th>Goals</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    2017/2018
                                                </td>
                                                <td>
                                                    <img src="img/clubs-logos/colombia.png" alt="icon1">
                                                    Japan
                                                </td>
                                                <td>22(0)</td>
                                                <td>
                                                    50
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2017/2018
                                                </td>
                                                <td>
                                                    <img src="img/clubs-logos/japan.png" alt="icon1">
                                                    Japan
                                                </td>
                                                <td>22(0)</td>
                                                <td>
                                                    50
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2017/2018
                                                </td>
                                                <td>
                                                    <img src="img/clubs-logos/bra.png" alt="icon1">
                                                    Japan
                                                </td>
                                                <td>22(0)</td>
                                                <td>
                                                    50
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2017/2018
                                                </td>
                                                <td>
                                                    <img src="img/clubs-logos/arg.png" alt="icon1">
                                                    Japan
                                                </td>
                                                <td>22(0)</td>
                                                <td>
                                                    50
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2017/2018
                                                </td>
                                                <td>
                                                    <img src="img/clubs-logos/uru.png" alt="icon1">
                                                    Japan
                                                </td>
                                                <td>22(0)</td>
                                                <td>
                                                    50
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2017/2018
                                                </td>
                                                <td>
                                                    <img src="img/clubs-logos/nga.png" alt="icon1">
                                                    Japan
                                                </td>
                                                <td>22(0)</td>
                                                <td>
                                                    50
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2017/2018
                                                </td>
                                                <td>
                                                    <img src="img/clubs-logos/mex.png" alt="icon1">
                                                    Japan
                                                </td>
                                                <td>22(0)</td>
                                                <td>
                                                    50
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2017/2018
                                                </td>
                                                <td>
                                                    <img src="img/clubs-logos/rusia.png" alt="icon1">
                                                    Japan
                                                </td>
                                                <td>22(0)</td>
                                                <td>
                                                    50
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2017/2018
                                                </td>
                                                <td>
                                                    <img src="img/clubs-logos/aus.png" alt="icon1">
                                                    Japan
                                                </td>
                                                <td>22(0)</td>
                                                <td>
                                                    50
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2017/2018
                                                </td>
                                                <td>
                                                    <img src="img/clubs-logos/arabia.png" alt="icon1">
                                                    Japan
                                                </td>
                                                <td>22(0)</td>
                                                <td>
                                                    50
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Tab Theree - career -->

                            <!-- Tab Theree - stats -->
                            <div class="tab-pane" id="stats" aria-expanded="false">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="stats-info">
                                            <ul>
                                                <li>
                                                    Appearances
                                                    <h3>50</h3>
                                                </li>

                                                <li>
                                                    Goals
                                                    <h3>10</h3>
                                                </li>

                                                <li>
                                                    Wins
                                                    <h3>16</h3>
                                                </li>

                                                <li>
                                                    Losses
                                                    <h3>5</h3>
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
                                                <li><p>Goals <span>60</span></p></li>
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
                            <!-- End Tab Theree - stats -->
                        </div>
                        <!-- Content Tabs -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Team Tabs -->
    </section>

@endsection