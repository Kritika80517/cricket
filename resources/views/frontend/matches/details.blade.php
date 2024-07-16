@extends('frontend.layouts.master')
@section('frontend-content')
    <style>
        #team1-players,
        #team1-bench {
            border-right: 2px solid;
        }
    </style>


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

    @php
        $matchInfo = $matchInfo['matchInfo'];
        $matchStartTimestamp = $matchInfo['matchStartTimestamp'];
        $matchCompleteTimestamp = $matchInfo['matchCompleteTimestamp'];
        $team1 = $matchInfo['team1'];
        $team2 = $matchInfo['team2'];

        $startDateTime = new DateTime();
        $startDateTime->setTimestamp($matchStartTimestamp / 1000);

        $completeDateTime = new DateTime();
        $completeDateTime->setTimestamp($matchCompleteTimestamp / 1000);

        $startTimeFormatted = $startDateTime->format('g:i A'); // Format as 8:30 PM
        $completeTimeFormattedGMT = $completeDateTime->setTimezone(new DateTimeZone('GMT'))->format('g:i A'); // Format as 3:00 PM GMT
        $completeTimeFormattedLocal = $completeDateTime
            ->setTimezone(new DateTimeZone(date_default_timezone_get()))
            ->format('g:i A'); // Format as 5:00 PM Local
    @endphp
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
                        {{-- <li><a href="#point_table" data-toggle="tab">Point Table</a></li> --}}
                        <li><a href="#match_facts" data-toggle="tab"> Match Facts</a></li>
                        <li><a href="#news" data-toggle="tab">News </a></li>
                    </ul>
                    <!-- End Nav Tabs -->
                </div>
                {{-- {{dd($matchInfo)}} --}}
                <div class="col-lg-12">
                    <div class="panel-box">
                        <div class="titles mb-0">
                            <h4>{{ $matchInfo['team1']['name'] }} vs
                                {{ $matchInfo['team2']['name'] }},
                                {{ $matchInfo['matchDescription'] }} - Live Cricket Score, Commentary</h4>
                        </div>
                        <!-- Content Tabs -->
                        <div class="tab-content">
                            {{-- commentary tab --}}
                            <div class="tab-pane fade show active ml-5 mr-5" id="commentary">
                                <div class="post-item mt-2 mb-0">
                                    {{-- Upcoming --}}
                                    {{-- {{dd($matchInfo, $commentry)}} --}}
                                    @if (
                                        $matchInfo['complete'] == false &&
                                            ($matchInfo['state'] !== 'inprogress' && $matchInfo['state'] !== 'stump'))
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h4>Start Time</h4>
                                                <h3>{{ $startTimeFormatted }}</h3>
                                            </div>
                                            <div class="col-md-4">
                                                <h3>{{ $completeTimeFormattedGMT }}</h3>
                                            </div>
                                            <div class="col-md-4">
                                                <h3>{{ $completeTimeFormattedLocal }}</h3>
                                            </div>

                                            <div class="col-12 mt-2">
                                                <h4>{{ $matchInfo['status'] }}</h4>
                                            </div>
                                        </div>

                                        {{-- Completed --}}
                                    @elseif(
                                        $matchInfo['complete'] == true &&
                                            isset($commentry['miniscore']) &&
                                            $commentry['matchHeader']['state'] == 'Complete')
                                        <p>{{ $commentry['miniscore']['matchScoreDetails']['inningsScoreList'][1]['batTeamName'] }}
                                            {{ $commentry['miniscore']['matchScoreDetails']['inningsScoreList'][1]['score'] ?? 0 }}/{{ $commentry['miniscore']['matchScoreDetails']['inningsScoreList'][1]['wickets'] ?? 0 }}
                                            ({{ $commentry['miniscore']['matchScoreDetails']['inningsScoreList'][1]['overs'] ?? 0 }})
                                        </p>
                                        <p><b>{{ $commentry['miniscore']['matchScoreDetails']['inningsScoreList'][0]['batTeamName'] }}
                                                {{ $commentry['miniscore']['matchScoreDetails']['inningsScoreList'][0]['score'] ?? 0 }}/{{ $commentry['miniscore']['matchScoreDetails']['inningsScoreList'][0]['wickets'] ?? 0 }}
                                                ({{ $commentry['miniscore']['matchScoreDetails']['inningsScoreList'][0]['overs'] ?? 0 }})</b>
                                        </p> <br>
                                        <p>{{ $commentry['miniscore']['status'] ?? 0 }}</p> <br>
                                        <p>Players Of The Match :
                                            {{ $commentry['matchHeader']['playersOfTheMatch'][0]['name'] ?? '' }}</p>

                                        {{-- Live --}}
                                    @elseif(
                                        $matchInfo['complete'] == false &&
                                            ($matchInfo['state'] == 'inprogress' || $matchInfo['state'] == 'stump'))
                                        <p>{{ $commentry['miniscore']['matchScoreDetails']['inningsScoreList'][1]['batTeamName'] }}
                                            {{ $commentry['miniscore']['matchScoreDetails']['inningsScoreList'][1]['score'] ?? 0 }}/{{ $commentry['miniscore']['matchScoreDetails']['inningsScoreList'][1]['wickets'] ?? 0 }}
                                            ({{ $commentry['miniscore']['matchScoreDetails']['inningsScoreList'][1]['overs'] ?? 0 }})
                                        </p>
                                        <p><b>{{ $commentry['miniscore']['matchScoreDetails']['inningsScoreList'][0]['batTeamName'] }}
                                                {{ $commentry['miniscore']['matchScoreDetails']['inningsScoreList'][0]['score'] ?? 0 }}/{{ $commentry['miniscore']['matchScoreDetails']['inningsScoreList'][0]['wickets'] ?? 0 }}
                                                ({{ $commentry['miniscore']['matchScoreDetails']['inningsScoreList'][0]['overs'] ?? 0 }})</b>
                                        </p> <br>
                                        <p>{{ $commentry['miniscore']['status'] ?? 0 }}</p>
                                    @endif

                                </div>

                                <div class="post-item mt-2 p-2">
                                    @foreach ($commentry['commentaryList'] as $content)
                                        @php
                                            $commText = $content['commText'] ?? '';

                                            // Check if 'commentaryFormats' and 'bold' keys exist
                                            if (isset($content['commentaryFormats']['bold'])) {
                                                $formatIds = $content['commentaryFormats']['bold']['formatId'];
                                                $formatValues = $content['commentaryFormats']['bold']['formatValue'];

                                                // Replace placeholders with bold text
                                                foreach ($formatIds as $index => $placeholder) {
                                                    if (isset($formatValues[$index])) {
                                                        $commText = str_replace($placeholder, '<strong>' . $formatValues[$index] . '</strong>', $commText);
                                                    }
                                                }
                                            }
                                            
                                            // Convert newlines to <br> tags for better formatting
                                            $commText = nl2br($commText);
                                        @endphp
                                        <p>{!! $commText !!}</p>
                                        <br>
                                    @endforeach


                                </div>
                            </div>

                            {{-- scorecard tab --}}
                            <div class="tab-pane" id="scorecard">
                                <div class="mt-2 ml-3">
                                    <h5>{{ $matchInfo['team1']['name'] }}</h5>
                                </div>
                                <div class="row mt-2 mb-2">
                                    <div class="col-lg-12">
                                        <table class="table mt-2" border="1" id="scorecard-table">
                                            <thead class="table-dark">
                                                <td colspan="5">{{ $matchInfo['team2']['name'] }} Innings</td>
                                                <td colspan="2">{{$commentry['miniscore']['matchScoreDetails']['inningsScoreList'][1]['score']}} - {{$commentry['miniscore']['matchScoreDetails']['inningsScoreList'][1]['wickets']}} ({{$commentry['miniscore']['matchScoreDetails']['inningsScoreList'][1]['overs']}})</td>
                                            </thead>
                                            <thead class="bg-light">
                                                <tr>
                                                    <th colspan="2">Batter</th>
                                                    <th>R</th>
                                                    <th>B</th>
                                                    <th>4s</th>
                                                    <th>6s</th>
                                                    <th>SR</th>
                                                </tr>
                                            </thead>
                                            <tbody id="scorecard-bat-body">
                                            </tbody>
                                        </table>
                                        <table>
                                            <thead class="table-dark">
                                                <th>Fall of Wickets</th>
                                            </thead>
                                            <tbody id="scorecard-fallofwickets-body">
                                            </tbody>
                                        </table>
                                        <table class="table mt-2" border="1" id="scorecard-bowl-table">
                                            <thead class="bg-light">
                                                <tr>
                                                    <th>Bowler</th>
                                                    <th>O</th>
                                                    <th>M</th>
                                                    <th>R</th>
                                                    <th>W</th>
                                                    <th>NB</th>
                                                    <th>WD</th>
                                                    <th>ECO</th>
                                                </tr>
                                            </thead>
                                            <tbody id="scorecard-bowl-body">
                                                <!-- Dynamic rows for bowlers will be appended here -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                {{-- team 2 --}}
                                <div class="row mt-2 mb-2">
                                    <div class="col-lg-12">
                                        <table class="table mt-2" border="1" id="scorecard-table">
                                            <thead class="table-dark">
                                                <td colspan="5">{{ $matchInfo['team1']['name'] }} Innings</td>
                                                <td colspan="2">{{$commentry['miniscore']['matchScoreDetails']['inningsScoreList'][0]['score']}} - {{$commentry['miniscore']['matchScoreDetails']['inningsScoreList'][0]['wickets']}} ({{$commentry['miniscore']['matchScoreDetails']['inningsScoreList'][0]['overs']}})</td>
                                            </thead>
                                            <thead class="bg-light">
                                                <tr>
                                                    <th colspan="2">Batter</th>
                                                    <th>R</th>
                                                    <th>B</th>
                                                    <th>4s</th>
                                                    <th>6s</th>
                                                    <th>SR</th>
                                                </tr>
                                            </thead>
                                            <tbody id="scorecard-bat-body-2">
                                            </tbody>
                                        </table>
                                        <table>
                                            <thead class="table-dark">
                                                <th>Fall of Wickets</th>
                                            </thead>
                                            <tbody id="scorecard-fallofwickets-body-2">
                                            </tbody>
                                        </table>
                                        <table class="table mt-2" border="1" id="scorecard-bowl-table">
                                            <thead class="bg-light">
                                                <tr>
                                                    <th>Bowler</th>
                                                    <th>O</th>
                                                    <th>M</th>
                                                    <th>R</th>
                                                    <th>W</th>
                                                    <th>NB</th>
                                                    <th>WD</th>
                                                    <th>ECO</th>
                                                </tr>
                                            </thead>
                                            <tbody id="scorecard-bowl-body-2">
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                            {{-- squads tab --}}

                            <div class="tab-pane" id="squads">
                                <div class="row">
                                    
                                    <div class="col-12" id="team-display"></div>

                                    <div class="col-12 text-center font-weight-bold py-2">Playing XI</div>

                                    <div class="col-6" id="team1-players">
                                        <!-- Players for Team 1 will be inserted here -->
                                       
                                    </div>

                                    <div class="col-6" id="team2-players">
                                        <!-- Players for Team 2 will be inserted here -->
                                    </div>

                                    <div class="col-12 text-center font-weight-bold py-2">Bench</div>

                                    <div class="col-6" id="team1-bench">
                                        <!-- Bench players for Team 1 will be inserted here -->
                                    </div>

                                    <div class="col-6" id="team2-bench">
                                        <!-- Bench players for Team 2 will be inserted here -->
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
                            {{-- <div class="tab-pane mt-2" id="point_table">
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
                                                    <input class="form-control" placeholder="Search..." name="email"
                                                        type="email" required="required">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="submit"
                                                            name="subscribe">Go!</button>
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

                            </div> --}}

                            {{-- match_facts --}}
                            <div class="tab-pane" id="match_facts">
                                {{-- match info --}}
                                <div class="row mt-2 mb-2">
                                    <div class="col-lg-12">
                                        <h5 class="bg-dark p-2" style="color: #fff">Match Info</h5>
                                        <div class="row">
                                            <table>
                                                <tr>
                                                    <td>Match :</td>
                                                    <td>{{ $team1['shortName'] }} vs {{ $team2['shortName'] }}, {{ $matchInfo['matchDescription'] }}, {{ $matchInfo['series']['name'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Date :</td>
                                                    <td>Wednesday, July 03, 2024</td>
                                                </tr>
                                                <tr>
                                                    <td>Toss :</td>
                                                    <td>Rwanda won the toss and opt to bat</td>
                                                </tr>
                                                <tr>
                                                    <td>Time :</td>
                                                    <td>{{$startTimeFormatted}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Venue :</td>
                                                    <td>{{ $matchInfo['venue']['name'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Umpires :</td>
                                                    <td>{{ $matchInfo['umpire1']['name'] ?? '' }}, {{ $matchInfo['umpire2']['name'] ?? '' }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Third Umpire :</td>
                                                    <td>{{ $matchInfo['umpire3']['name'] ?? '' }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Match Referee :</td>
                                                    <td>{{ $matchInfo['referee']['name']?? '' }}</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">{{$team1['name']}} Squad :</td>
                                                </tr>
                                                <tr>
                                                    <td>Playing :</td>
                                                    <td>
                                                        @foreach ($team1['playerDetails'] as $player)
                                                            @if (isset($player['substitute']) && $player['substitute'] == false)
                                                                <a href="{{ url('/') }}">{{ $player['name'] }}</a> @if (!$loop->last), @endif
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bench :</td>
                                                    <td>
                                                        @foreach ($team1['playerDetails'] as $player)
                                                            @if (isset($player['substitute']) && $player['substitute'] == true)
                                                                <a href="{{ url('/') }}">{{ $player['name'] }}</a> @if (!$loop->last), @endif
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Support Staff :</td>
                                                    <td>
                                                        @foreach ($team1['playerDetails'] as $player)
                                                            @if (isset($player['isSupportStaff']) && $player['isSupportStaff'] == true)
                                                                <a href="{{ url('/') }}">{{ $player['name'] }}</a> @if (!$loop->last), @endif
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">{{$team2['name']}} Squad :</td>
                                                </tr>
                                                <tr>
                                                    <td>Playing :</td>
                                                    <td>
                                                        
                                                        @foreach ($team2['playerDetails'] as $player)
                                                            @if (isset($player['substitute']) && $player['substitute'] == false)
                                                                <a href="{{ url('/') }}">{{ $player['name'] }}</a> @if (!$loop->last), @endif
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bench :</td>
                                                    <td>
                                                        @foreach ($team2['playerDetails'] as $player)
                                                            @if (isset($player['substitute']) && $player['substitute'] == true)
                                                                <a href="{{ url('/') }}">{{ $player['name'] }}</a> @if (!$loop->last), @endif
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Support Staff :</td>
                                                    <td>
                                                        @foreach ($team2['playerDetails'] as $player)
                                                            @if (isset($player['isSupportStaff']) && $player['isSupportStaff'] == true)
                                                                <a href="{{ url('/') }}">{{ $player['name'] }}</a> @if (!$loop->last), @endif
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                </tr>
                                            </table>
                                            
                                        </div>
                                    </div>
                                </div>
                                {{-- Venue Guide --}}
                                <div class="row mt-2 mb-2">
                                    <div class="col-lg-12">
                                        <h5 class="bg-dark p-2" style="color: #fff">Venue Guide</h5>
                                        <div class="row">
                                            <div class="col-lg-3" style="border-bottom: 1">
                                                <p>Stadium : </p>
                                                <p>City :</p>
                                                {{-- <p>Capacity :</p>
                                                <p>Ends :</p> --}}
                                                <p>Hosts to :</p>
                                            </div>
                                            <div class="col-lg-9">
                                                <p>{{ $matchInfo['venue']['name'] }}</p>
                                                <p>{{ $matchInfo['venue']['city'] }}</p>
                                                <p>{{ $matchInfo['venue']['country'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="row mt-2 mb-2">
                                    <div class="col-lg-12">
                                        <h5 class="bg-dark p-2" style="color: #fff">Broadcast Guide</h5>
                                        <div class="row">
                                            <div class="col-lg-3" style="border-bottom: 1">
                                                <p>Streaming : </p>
                                                <p>TV :</p>
                                            </div>
                                            <div class="col-lg-9">
                                                <p>Aga Khan Sports Club Ground</p>
                                                <p>Nairobi</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>

                            {{-- news --}}
                            <div class="tab-pane" id="news">
                                <div id="news" class="pt-4 pb-4">
                                    {{-- <div class="loader-div">
                                        <div class="loader"></div>
                                    </div> --}}
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
    <script src="{{ asset('assets/frontend/js/cricket/match-details.js') }}"></script>
@endsection
