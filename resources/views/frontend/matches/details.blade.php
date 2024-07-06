@extends('frontend.layouts.master')
@section('frontend-content')
@extends('frontend.layouts.master')
@section('frontend-content')

    <div class="section-title" style="background:url(/assets/frontend/img/slide/1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1> Match </h1>
                </div>

                <div class="col-md-4">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Match Details</li>
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
                        <li class="active"><a href="#commentary" data-toggle="tab">Commentary </a></li>
                        <li><a href="#scorecard" data-toggle="tab">Scorecard </a></li>
                        <li><a href="#squads" data-toggle="tab">Squads </a></li>
                        {{-- <li><a href="#full_commentary" data-toggle="tab">Full Commentary</a></li> --}}
                        <li><a href="#point_table" data-toggle="tab">Point Table</a></li>
                        <li><a href="#match_facts" data-toggle="tab"> Match Facts</a></li>
                        <li><a href="#news" data-toggle="tab">News </a></li>
                        {{-- <li><a href="#venue" data-toggle="tab">Venues</a></li> --}}
                    </ul>
                    <!-- End Nav Tabs -->
                </div>
                <div class="col-lg-12">
                    <div class="panel-box">
                        <div class="titles mb-0">
                            <h4>Kenya vs Rwanda, 9th Match - Live Cricket Score, Commentary</h4>
                        </div>
                        <!-- Content Tabs -->
                        <div class="tab-content">
                            {{-- commentary tab --}}
                            <div class="tab-pane fade show active ml-5 mr-5" id="commentary">
                                <div class="post-item mt-2 mb-0">
                                    <div class="">
                                        <p >RWA 168/1 (20)</p> 
                                        <p ><b>KEN 172/6 (17.4)</b></p> <br>
                                        <p>Kenya won by 4 wkts</p> <br>
                                        <p>PLAYER OF THE MATCH</p>
                                        <p><a href="">Neil Mugabe</a></p> 
                                    </div>
                                </div>

                                <div class="post-item mt-2 p-2">

                                    <div class="">
                                        <h4>Match result: Kenya won by 4 wickets</h4>
                                        <p><b>17.4</b> Eric Kubwimana to Jasraj Kundi, <b> FOUR</b></p>
                                        <p><b>17.4</b> Eric Kubwimana to Jasraj Kundi, <b> FOUR</b></p><br>
                                        <h4>Eric Kubwimana [1.0-0-17-0] is back into the attack</h4>
                                    </div>
                                    <div class="">
                                        <table>
                                            <thead>
                                                <th></th>
                                            </thead>
                                            <tbody>
                                                <td>17</td>
                                                <td><p>Runs Scored: <b>11
                                                    W Wd 4 1 2 1 2</b></p></td>
                                                <td><p>Runs Scored: <b>11
                                                    W Wd 4 1 2 1 2</b></p></td>
                                                <td><p>Shem Ngoche <span>7(3)</span></p> 
                                                    <p>Jasraj Kundi <span>24(14) </span></p></td>
                                                <td>Zappy Bimenyimana
                                                    3-0-24-3</td>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="">
                                        <p><b>16.6</b> appy Bimenyimana to Shem Ngoche,  <b>  2 runs</b></p>
                                        <p><b>16.6</b> appy Bimenyimana to Shem Ngoche,  <b>  2 runs</b></p>
                                        <p><b>17.4</b> Eric Kubwimana to Jasraj Kundi, <b> FOUR</b></p><br>
                                        <h4>Shem Ngoche, right handed bat, comes to the crease</h4>
                                        <p><b>16.1</b>Zappy Bimenyimana to Neil Mugabe, out Caught by Emmanuel Sebareme !! 
                                            <span>Neil Mugabe c Emmanuel Sebareme b Zappy Bimenyimana 71(46) [4s-5 6s-4]</span>
                                        </p>
                                        <p>Zappy Bimenyimana to Neil Mugabe, <b>THATS OUT!!</b> Caught!!</p> <br>
                                        <h5>Zappy Bimenyimana [2.0-0-13-2] is back into the attack</h5>
                                    </div>

                                    <div class="mt-2">
                                        <table>
                                            <thead>
                                                <th></th>
                                            </thead>
                                            <tbody>
                                                <td>17</td>
                                                <td><p>Runs Scored: <b>11
                                                    W Wd 4 1 2 1 2</b></p></td>
                                                <td><p>Runs Scored: <b>11
                                                    W Wd 4 1 2 1 2</b></p></td>
                                                <td><p>Shem Ngoche <span>7(3)</span></p> 
                                                    <p>Jasraj Kundi <span>24(14) </span></p></td>
                                                <td>Zappy Bimenyimana
                                                    3-0-24-3</td>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="">
                                        <p><b>16.6</b> appy Bimenyimana to Shem Ngoche,  <b>  2 runs</b></p>
                                        <p><b>16.6</b> appy Bimenyimana to Shem Ngoche,  <b>  2 runs</b></p>
                                        <p><b>17.4</b> Eric Kubwimana to Jasraj Kundi, <b> FOUR</b></p><br>
                                    </div>
                                </div>
                            </div>

                            {{-- scorecard tab --}}
                            <div class="tab-pane" id="scorecard">
                                <div class="mt-2 ml-3">
                                    <h5>Kenya won by 4 wkts</h5>
                                </div>
                                <div class="row mt-2 mb-2">
                                    <div class="col-lg-12">
                                        <table class="table mt-2" border="1"  >
                                            <thead class="table-dark">
                                                <th>Rwanda Innings</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>168-1 (20 Ov)</th>
                                            </thead>
                                            <thead class="bg-light">
                                                <th >Batter</th>
                                                <th>R</th>
                                                <th>B</th>
                                                <th>4s</th>
                                                <th>6s</th>
                                                <th>SR</th>
                                            </thead>
                                            <tbody>
                                                <tr >
                                                    <td><a href="">Didier Ndikubwimana (wk)</a>lbw b Shem Ngoche</td>
                                                    <td>50</td>
                                                    <td>42</td>
                                                    <td>7</td>
                                                    <td>0</td>
                                                    <td>119.05</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="">Didier Ndikubwimana (wk)</a>lbw b Shem Ngoche</td>
                                                    <td>50</td>
                                                    <td>42</td>
                                                    <td>7</td>
                                                    <td>0</td>
                                                    <td>119.05</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row mt-2 mb-2">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-6" style="border-bottom: 1">
                                                <p>Extras </p>
                                                <p>Total</p>
                                                <p> Did not Bat  </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p><b>10</b> (b 0, lb 1, w 9, nb 0, p 0) </p>
                                                <p><b>168</b> (1 wkts, 20 Ov)</p>
                                                <p> <a href="">Clinton Rubagumya (c) , Orchide Tuyisenge , Yves Cyusa , Emmanuel Sebareme , Zappy Bimenyimana , Eric Kubwimana , Martin Akayezu , Muhammad Nadir</a>  </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="bg-light p-1">
                                            <h5>Fall of Wickets</h5>
                                        </div>
                                        <p><span>114-1</span>
                                            <a href="">Didier Ndikubwimana</a>,(12.6)
                                        </p>
                                    </div>
                                </div>

                                <div class="row mt-2 mb-2">
                                    <div class="col-lg-12">
                                        <table class="table mt-2" border="1">
                                            <thead class="bg-light">
                                                <th>Bowler</th>
                                                <th>O</th>
                                                <th>M</th>
                                                <th>R</th>
                                                <th>W</th>
                                                <th>NB</th>
                                                <th>WD</th>
                                                <th>ECO</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="">Didier Ndikubwimana (wk)</a>lbw b Shem Ngoche</td>
                                                    <td>50</td>
                                                    <td>42</td>
                                                    <td>7</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>119.05</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-lg-12">
                                        <table class="table mt-2" border="1">
                                            <thead class="bg-light">
                                                <th>Powerplays</th>
                                                <th>Over</th>
                                                <th>Run</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="">Didier Ndikubwimana (wk)</a>lbw b Shem Ngoche</td>
                                                    <td>50</td>
                                                    <td>42</td>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                {{-- team 2 --}}
                                <div class="row mt-2 mb-2">
                                    <div class="col-lg-12">
                                        <table class="table mt-2" border="1" >
                                            <thead class="table-dark">
                                                <th>Kenya Innings</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>172-6 (17.4 Ov)</th>
                                            </thead>
                                            <thead class="bg-light">
                                                <th>Batter</th>
                                                <th>R</th>
                                                <th>B</th>
                                                <th>4s</th>
                                                <th>6s</th>
                                                <th>SR</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="">Didier Ndikubwimana (wk)</a>lbw b Shem Ngoche</td>
                                                    <td>50</td>
                                                    <td>42</td>
                                                    <td>7</td>
                                                    <td>0</td>
                                                    <td>119.05</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="row mt-2 mb-2">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-6" style="border-bottom: 1">
                                                <p>Extras </p>
                                                <p>Total</p>
                                                <p> Did not Bat  </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p><b>10</b> (b 0, lb 1, w 9, nb 0, p 0) </p>
                                                <p><b>168</b> (1 wkts, 20 Ov)</p>
                                                <p> <a href="">Gerard Mwendwa , Vraj Patel , Peter Langat</a>  </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="bg-light p-1">
                                            <h5>Fall of Wickets</h5>
                                        </div>
                                        <p><span>114-1</span>
                                            <a href="">Didier Ndikubwimana</a>,(12.6)
                                        </p>
                                        <p><span>114-1</span>
                                            <a href="">Didier Ndikubwimana</a>,(12.6)
                                        </p>
                                        <p><span>114-1</span>
                                            <a href="">Didier Ndikubwimana</a>,(12.6)
                                        </p>
                                        
                                    </div>
                                </div>

                                <div class="row mt-2 mb-2">
                                    <div class="col-lg-12">
                                        <table class="table mt-2" border="1">
                                            <thead class="bg-light">
                                                <th>Bowler</th>
                                                <th>O</th>
                                                <th>M</th>
                                                <th>R</th>
                                                <th>W</th>
                                                <th>NB</th>
                                                <th>WD</th>
                                                <th>ECO</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="">Didier Ndikubwimana (wk)</a>lbw b Shem Ngoche</td>
                                                    <td>50</td>
                                                    <td>42</td>
                                                    <td>7</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>119.05</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-lg-12">
                                        <table class="table mt-2" border="1">
                                            <thead class="bg-light">
                                                <th>Powerplays</th>
                                                <th>Over</th>
                                                <th>Run</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="">Didier Ndikubwimana (wk)</a>lbw b Shem Ngoche</td>
                                                    <td>50</td>
                                                    <td>42</td>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                {{-- match info --}}
                                <div class="row mt-2 mb-2">
                                    <div class="col-lg-12">
                                        <h5 class="bg-dark p-2" style="color: #fff">Match Info</h5>
                                        <div class="row">
                                            <div class="col-lg-3" style="border-bottom: 1">
                                                <p>Match </p>
                                                <p>Date</p>
                                                <p> Toss  </p>
                                            </div>
                                            <div class="col-lg-9">
                                                <p>KEN vs RWA, 9th Match, Kenya Quadrangular Cup 2024</p>
                                                <p>Wednesday, July 03, 2024</p>
                                                <p>Rwanda won the toss and opt to bat</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- squads tab --}}
                            <div class="tab-pane" id="squads">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div  style="display: flex; justify-content: space-between;" class="p-2 bg-light">
                                            <a href="#!">
                                                <img src="{{asset('assets/frontend/img/players/1.jpg')}}" width="50px" height="50px" alt="img">
                                                <span>KEN</span>
                                            </a>
                                            <a href="#!" style="text-align: right">
                                                <img src="{{asset('assets/frontend/img/players/1.jpg')}}" width="50px" height="50px" alt="img">
                                                <span>RWA</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                {{-- players XI --}}
                                <div class="row">
                                    <div class="col-lg-12 p-2" style="display: flex; justify-content: center; align-items: center;">
                                        <h5>Playing XI</h5>
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <ul>
                                            <li>
                                                <p><img src="{{asset('assets/frontend/img/players/1.jpg')}}" width="50px" height="50px" alt="img">
                                                Rushab Patel</p>
                                                <span>Batter</span>
                                            </li>
                                            <li>
                                                <p><img src="{{asset('assets/frontend/img/players/1.jpg')}}" width="50px" height="50px" alt="img">
                                                Rushab Patel</p>
                                                <span>Batter</span>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul>
                                            <li>
                                                <p><img src="{{asset('assets/frontend/img/players/1.jpg')}}" width="50px" height="50px" alt="img">
                                                Rushab Patel</p>
                                                <span>Batter</span>
                                            </li>
                                            <li>
                                                <p><img src="{{asset('assets/frontend/img/players/1.jpg')}}" width="50px" height="50px" alt="img">
                                                Rushab Patel</p>
                                                <span>Batter</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- bench players --}}
                                <div class="row">
                                    <div class="col-lg-12 p-2" style="display: flex; justify-content: center; align-items: center;">
                                        <h5>Bench</h5>
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <ul>
                                            <li>
                                                <p><img src="{{asset('assets/frontend/img/players/1.jpg')}}" width="50px" height="50px" alt="img">
                                                Rushab Patel</p>
                                                <span>Batter</span>
                                            </li>
                                            <li>
                                                <p><img src="{{asset('assets/frontend/img/players/1.jpg')}}" width="50px" height="50px" alt="img">
                                                Rushab Patel</p>
                                                <span>Batter</span>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul>
                                            <li>
                                                <p><img src="{{asset('assets/frontend/img/players/1.jpg')}}" width="50px" height="50px" alt="img">
                                                Rushab Patel</p>
                                                <span>Batter</span>
                                            </li>
                                            <li>
                                                <p><img src="{{asset('assets/frontend/img/players/1.jpg')}}" width="50px" height="50px" alt="img">
                                                Rushab Patel</p>
                                                <span>Batter</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            {{-- full_commentary --}}
                            {{-- <div class="tab-pane" id="full_commentary">
                                <div class="row mt-2 mb-2">
                                    <div class="col-lg-3" id="series-squads">
                                        
                                    </div>

                                    <div class="col-lg-9">
                                        <div id="series-squads-players" class="groups-list page-group">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- point_table --}}
                            <div class="tab-pane mt-2" id="point_table">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="panel-box" id="team-stats-filters">

                                            <div class="titles no-margin">
                                                <h4><i class="fa fa-soccer-ball-o"></i>Batting</h4>
                                            </div>
                                            <div class="info-panel p-0">
                                                <ul class="list-panel" id="Batting-list">

                                                    <li class="no-margin stateFiltersActive">
                                                        <a data-value="mostRuns"
                                                            class="pl-2 stateFilter btn bg-none">Nepal</a>
                                                    </li>
                                                    <li class="no-margin stateFiltersActive">
                                                        <a data-value="mostRuns"
                                                            class="pl-2 stateFilter btn bg-none">Namibia</a>
                                                    </li>
                                                    <li class="no-margin stateFiltersActive">
                                                        <a data-value="mostRuns"
                                                            class="pl-2 stateFilter btn bg-none">Netherlands</a>
                                                    </li>
                                                    <li class="no-margin stateFiltersActive">
                                                        <a data-value="mostRuns"
                                                            class="pl-2 stateFilter btn bg-none">Canada</a>
                                                    </li>
                                                    <li class="no-margin stateFiltersActive">
                                                        <a data-value="mostRuns"
                                                            class="pl-2 stateFilter btn bg-none">Scotland</a>
                                                    </li>
                                                    <li class="no-margin stateFiltersActive">
                                                        <a data-value="mostRuns"
                                                            class="pl-2 stateFilter btn bg-none">United Arab Emirates</a>
                                                    </li>

                                                </ul>

                                            </div>
                                        </div>

                                        <div class="panel-box" id="team-stats-filters">

                                            <div class="titles no-margin">
                                                <h4><i class="fa fa-soccer-ball-o"></i>Bowling</h4>
                                            </div>
                                            <div class="info-panel p-0">
                                                <ul class="list-panel" id="Batting-list">

                                                    <li class="no-margin stateFiltersActive">
                                                        <a data-value="mostRuns"
                                                            class="pl-2 stateFilter btn bg-none">Nepal</a>
                                                    </li>
                                                    <li class="no-margin stateFiltersActive">
                                                        <a data-value="mostRuns"
                                                            class="pl-2 stateFilter btn bg-none">Namibia</a>
                                                    </li>
                                                    <li class="no-margin stateFiltersActive">
                                                        <a data-value="mostRuns"
                                                            class="pl-2 stateFilter btn bg-none">Netherlands</a>
                                                    </li>
                                                    <li class="no-margin stateFiltersActive">
                                                        <a data-value="mostRuns"
                                                            class="pl-2 stateFilter btn bg-none">Canada</a>
                                                    </li>
                                                    <li class="no-margin stateFiltersActive">
                                                        <a data-value="mostRuns"
                                                            class="pl-2 stateFilter btn bg-none">Scotland</a>
                                                    </li>
                                                    <li class="no-margin stateFiltersActive">
                                                        <a data-value="mostRuns"
                                                            class="pl-2 stateFilter btn bg-none">United Arab Emirates</a>
                                                    </li>

                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div>
                                            <h4>Match Type</h4>
                                            <form class="search" action="#" method="Post">
                                                <div class="input-group">
                                                    <input class="form-control" placeholder="Search..." name="email" type="email" required="required">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="submit" name="subscribe">Go!</button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                        <table class="table-striped table-responsive table-hover result-point">
                                            <thead class="point-table-head">
                                                <tr class="">
                                                    <th class="">PLAYER</th>
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
                                                <tr>
                                                    <td><a href="">MS Dhoni</a></td>
                                                    <td>123</td>
                                                    <td>12</td>
                                                    <td>23</td>
                                                    <td>34</td>
                                                    <td>45</td>
                                                    <td>56</td>
                                                    <td>56</td>
                                                </tr>

                                                <tr>
                                                    <td><a href="">Rohti Sharma</a></td>
                                                    <td>123</td>
                                                    <td>12</td>
                                                    <td>23</td>
                                                    <td>34</td>
                                                    <td>45</td>
                                                    <td>56</td>
                                                    <td>56</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                            {{-- match_facts --}}
                            <div class="tab-pane" id="match_facts">
                                {{-- match info --}}
                                <div class="row mt-2 mb-2">
                                    <div class="col-lg-12">
                                        <h5 class="bg-dark p-2" style="color: #fff">Match Info</h5>
                                        <div class="row">
                                            <div class="col-lg-3" style="border-bottom: 1">
                                                <p>Match </p>
                                                <p>Date</p>
                                                <p> Toss  </p>
                                            </div>
                                            <div class="col-lg-9">
                                                <p>KEN vs RWA, 9th Match, Kenya Quadrangular Cup 2024</p>
                                                <p>Wednesday, July 03, 2024</p>
                                                <p>Rwanda won the toss and opt to bat</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Venue Guide--}}
                                <div class="row mt-2 mb-2">
                                    <div class="col-lg-12">
                                        <h5 class="bg-dark p-2" style="color: #fff">Venue Guide</h5>
                                        <div class="row">
                                            <div class="col-lg-3" style="border-bottom: 1">
                                                <p>Stadium: </p>
                                                <p>City</p>
                                            </div>
                                            <div class="col-lg-9">
                                                <p>Aga Khan Sports Club Ground</p>
                                                <p>Nairobi</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- news --}}
                            <div class="tab-pane mt-2" id="news">
                                <div class="post-item">
                                    <div class="row mt-2">
                                        <div class="col-md-4">
                                            <div class="img-hover">
                                                <img src="{{ asset('assets/frontend/img/blog/1.jpg') }}" alt=""
                                                    class="img-responsive">
                                                <div class="overlay"><a href="single-news.html">+</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h5><a href="single-news.html">Group Stage Breakdown</a></h5>
                                            <span class="data-info">January 3, 2014</span>
                                            <p>While familiar with fellow European nation France, Hareide admits that South
                                                American side Peru.<a href="single-news.html">Read More [+]</a></p>
                                        </div>
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


@endsection