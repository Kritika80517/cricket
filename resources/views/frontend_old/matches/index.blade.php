@extends('frontend.layouts.master')
@section('page-title', 'Matche')
@section('website-content')

<style>
    .sidebar {
        padding: 0;
        list-style: none;
        background-color: #f8f9fa;
        height: 100%;
        margin-top: 20px;
    }

    .sidebar li {
        padding: 10px;
        border-bottom: 1px solid #ddd;
        text-align: left;

    }

    .sidebar li a {
        color: #333;
        text-decoration: none;
    }

    .sidebar li.active,
    .sidebar li:hover {
        background-color: #cfcfcf;
    }

    .sidebar li.active a,
    .sidebar li:hover a {
        color: #000;
    }

    .table-responsive {
        margin-top: 20px;
        text-align: left;
    }
    .section-title {
            font-size: 20px;
            font-weight: bold;
            margin: 20px 0;
            text-align: left;
            color: #000
        }
        .player-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .player {
            display: flex;
            align-items: center;
        }
        .player img {
            width: 50px;
            height: 50px;
            /* border-radius: 50%; */
            margin-right: 10px;
        }
        .player-name {
            font-size: 16px;
            position: static;
            background: none;
        }

        .nav {
        border: none !important;
        /* display: flex !important; */
        justify-content: start !important;
        margin-bottom: 20px;
    }

    .nav li a {
        color: #000;
    }

    .nav li a:hover {
        color: #000 !important;
    }

    .nav-pills>li {
        width: auto !important;
    }
    .match-card {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .match-card h3 {
            margin-top: 0;
        }
        .match-card p {
            margin: 5px 0;
        }
        .score-box {
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            background-color: #f9f9f9;
            display: inline-block;
            margin-right: 10px;
        }
        .score-box p {
            margin: 0;
            text-align: center;
        }
        .result {
            font-weight: bold;
            color: green;
        }
        .links {
            margin-top: 10px;
        }
        .links a {
            margin-right: 15px;
            color: #007BFF;
            text-decoration: none;
        }
        .links a:hover {
            text-decoration: underline;
        }
        h3{
             
            text-align:left; 
            margin-left: 20px
        }
</style>

<div class="inner-page-banner">
    <div class="container">
    </div>
</div>
<div class="inner-information-text">
    <div class="container">
        <h3>Matches</h3>
        <ul class="breadcrumb">
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="active">Matches</li>
        </ul>
    </div>
</div>
<section id="contant" class="contant main-heading team">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h4 style="text-align: left; margin-left:20px">Live Cricket Score</h4>
                    </div>

                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                            <li class="nav-item active">
                                <a class="nav-link active " id="live-tab2" data-toggle="tab" href="#live2" role="tab" aria-controls="live" aria-selected="true">Live</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="recent-tab2" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="false">Recent</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="upcoming-tab2" data-toggle="tab" href="#upcoming" role="tab" aria-controls="upcoming" aria-selected="false">Upcoming</a>
                            </li>
                        </ul>

                        <div class="tab-content tab-bordered" id="myTab3Content">

                            {{-- live --}}
                            <div class="tab-pane  active " id="live2" role="tabpanel" aria-labelledby="live-tab2">
                                <div class="container">
                                    <h4 style="text-align: left; margin-bottom: 15px;">Top Stories</h4>
                                    <table class="table">
                                        <tbody style="text-align: left">
                                            <tr>
                                                <td style="width: 250px;"> <img src="https://via.placeholder.com/250" alt="News Image" width="200" height="150" class="img-fluid"></td>
                                                <td>
                                                    Ireland hope to spring surprise as India begin their campaign<br>
                                                    With the conditions in New York unpredictable,
                                                    Ireland hope to continue their giant-killing spree.<br>
                                                    <span>Jun 04 2024</span>
                                                </td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>

                            {{-- schedule --}}
                            <div class="tab-pane fade" id="recent" role="tabpanel" aria-labelledby="recent-tab2">
                                <div class="container">
                                    <ul class="nav nav-pills border-0">
                                        <li class="active">
                                            <a class="btn btn-outlinep-primary" href="#1a" data-toggle="tab">International</a>
                                        </li>
                                        <li><a class="btn" href="#3a" data-toggle="tab">League</a></li>
                                        <li><a class="btn" href="#2a" data-toggle="tab">Domestic</a></li>
                                        <li><a class="btn" href="#4a" data-toggle="tab">Women</a></li>
                                    </ul>

                                    <div class="tab-content clearfix">
                                        <div class="tab-pane active" id="1a">
                                            <div class="row" id="international-teams-container">
                                                <h3 style="margin-top: 20px;">ICC Mens T20 World Cup 2024</h3>

                                               
                                                    <h3>Sri Lanka vs Bangladesh, 15th Match, Group D</h3>
                                                    <p>Today • 6:00 AM at Dallas, Grand Prairie Stadium</p>
                                                    <div class="score-box">
                                                        <p>SL</p>
                                                        <p>124-9 (20 Ovs)</p> <br>
                                                        <p>BAN</p>
                                                        <p>125-8 (19 Ovs)</p><br>
                                                        <p class="result">Bangladesh won by 2 wkts</p>
                                                    </div>
                                                   
                                                    <div class="links">
                                                        <a href="#">Live Score</a>
                                                        <a href="#">Scorecard</a>
                                                        <a href="#">Full Commentary</a>
                                                        <a href="#">News</a>
                                                    </div>
                                                
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="2a">
                                            <div class="row" id="domestic-teams-container"></div>
                                        </div>
                                        <div class="tab-pane" id="3a">
                                            <div class="row" id="league-teams-container"></div>
                                        </div>
                                        <div class="tab-pane" id="4a">
                                            <div class="row" id="women-teams-container"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            {{-- results --}}
                            <div class="tab-pane fade" id="upcoming" role="tabpanel" aria-labelledby="upcoming-tab2">
                                <div class="container">
                                    <h4 style="text-align: left; margin-bottom: 15px;">{{request()->teamName ?? ''}} Cricket Team Results</h4>

                                    <table class="table table-striped">
                                        <thead style="background-color: lightgray">
                                            <tr>
                                                <th style="width: 250px">Date</th>
                                                <th>Match Details</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align: left" id="results-table">
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            {{-- news --}}
                            <div class="tab-pane fade" id="news" role="tabpanel" aria-labelledby="news-tab2">
                                <div class="container" style="margin-top: 20px">
                                    <table class="table">
                                        <tbody style="text-align: left" id="news-table">
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            {{-- stats --}}
                            <div class="tab-pane fade" id="stats" role="tabpanel" aria-labelledby="stats-tab2">
                                <div class="container">
                                    <div class="col-md-3">
                                        <ul class="sidebar">
                                            <li style=" background-color:  #000; color:#fff">Batting</li>
                                            <li class="active"><a href="#">Most Runs</a></li>
                                            <li><a href="#">Highest Scores</a></li>
                                            <li><a href="#">Best Batting Average</a></li>
                                            <li><a href="#">Best Batting Strike Rate</a></li>
                                            <li><a href="#">Most Hundreds</a></li>

                                            <li style=" background-color:  #000; color:#fff">Bowling</li>
                                            <li><a href="#">Most Wickets</a></li>
                                            <li><a href="#">Best Bowling Average</a></li>
                                            <li><a href="#">Best Bowling</a></li>
                                            <li><a href="#">Most 5 Wickets Haul</a></li>
                                            <li><a href="#">Best Economy</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="table-responsive">
                                            <table class="table  table-bordered">
                                                <thead style="background-color: lightgray">
                                                    <tr>
                                                        <th>PLAYER</th>
                                                        <th>MATCHES</th>
                                                        <th>INNS</th>
                                                        <th>RUNS</th>
                                                        <th>AVG</th>
                                                        <th>SR</th>
                                                        <th>4s</th>
                                                        <th>6s</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="#">Sachin Tendulkar</a></td>
                                                        <td>200</td>
                                                        <td>329</td>
                                                        <td>15,921</td>
                                                        <td>54</td>
                                                        <td>54</td>
                                                        <td>2,058</td>
                                                        <td>69</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- players --}}
                            <div class="tab-pane fade" id="player" role="tabpanel" aria-labelledby="player-tab2">
                                <div class="container" id="team-player">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection