@extends('frontend.layouts.master')
@section('page-title', 'Team Detail')
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

</style>
<div class="inner-page-banner">
    <div class="container">
    </div>
</div>
<div class="inner-information-text">
    <div class="container">
        <h3>Team Details</h3>
        <ul class="breadcrumb">
            <li><a href="{{url('/')}}">Home</a></li>
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
                        <h4 style="text-align: left; margin-left:20px">{{request()->teamName ?? ''}} National Cricket Team</h4>
                    </div>

                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                            <li class="nav-item active">
                                <a class="nav-link active " id="home-tab2" data-toggle="tab" href="#home2" role="tab" aria-controls="home" aria-selected="true">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="schedule-tab2" data-toggle="tab" href="#schedule" role="tab" aria-controls="schedule" aria-selected="false">Schedule</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="results-tab2" data-toggle="tab" href="#results" role="tab" aria-controls="results" aria-selected="false">Results</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="news-tab2" data-toggle="tab" href="#news" role="tab" aria-controls="news" aria-selected="false">News</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="stats-tab2" data-toggle="tab" href="#stats" role="tab" aria-controls="stats" aria-selected="false">Stats</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="player-tab2" data-toggle="tab" href="#player" role="tab" aria-controls="Player" aria-selected="false">Players</a>
                            </li>
                        </ul>

                        <div class="tab-content tab-bordered" id="myTab3Content">

                            {{-- home --}}
                            <div class="tab-pane  active " id="home2" role="tabpanel" aria-labelledby="home-tab2">
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
                                            <tr>
                                                <td style="width: 250px;"><img src="https://via.placeholder.com/250" alt="News Image" width="200" height="150" class="img-fluid"></td>
                                                <td>
                                                    Tried to convince Dravid to stay on as coach: Rohit<br>
                                                    IThe current head coach has confirmed that he's not seeking extension and that the ongoing
                                                    T20 World Cup will be his last assignment in the role<br>
                                                    Nassau County International Cricket Stadium, New York<br>
                                                    <span>Jun 04 2024</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 250px;"> <img src="https://via.placeholder.com/250" alt="News Image" width="200" height="150" class="img-fluid"></td>
                                                <td>
                                                    Ireland hope to spring surprise as India begin their campaign<br>
                                                    With the conditions in New York unpredictable, Ireland
                                                    hope to continue their giant-killing spree.<br>
                                                    <span>Jun 04 2024</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>

                            {{-- schedule --}}
                            <div class="tab-pane fade" id="schedule" role="tabpanel" aria-labelledby="schedule-tab2">
                                <div class="container">
                                    <h4 style="text-align: left; margin-bottom: 15px;">{{request()->teamName ?? ''}} Cricket Team Schedule</h4>

                                    <table class="table table-striped">
                                        <thead style="background-color: lightgray">
                                            <tr>
                                                <th style="width: 250px">Date</th>
                                                <th>Match Details</th>
                                                <th>Time</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align: left" id="teams-schedules">
                                           
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            {{-- results --}}
                            <div class="tab-pane fade" id="results" role="tabpanel" aria-labelledby="results-tab2">
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
                                <p>players</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {

        // Teams schedules
        $.ajax({
            url: '/teams/schedules/?teamId='+fetchIdFromUrl(),
            type: 'GET',
            success: function(response) {
                let matches = response.teamMatchesData[0].matchDetailsMap.match;
                matches.forEach(match => {
                    let matchInfo = match.matchInfo;
                    let startDate = new Date(parseInt(matchInfo.startDate));
                    let endDate = new Date(parseInt(matchInfo.endDate));

                    let row = `
                        <tr>
                            <td>${startDate.toDateString()}</td>
                            <td>
                                <a href="#">${matchInfo.team1.teamName} vs ${matchInfo.team2.teamName}, ${matchInfo.matchDesc}</a><br>
                                ${matchInfo.seriesName}<br>
                                ${matchInfo.venueInfo.ground}, ${matchInfo.venueInfo.city}<br>
                                <span style="color: orange;">Match starts at ${startDate.toUTCString()}</span>
                            </td>
                            <td>
                                ${startDate.toLocaleTimeString()}<br>
                                ${endDate.toLocaleTimeString()} GMT / LOCAL
                            </td>
                        </tr>
                    `;
                    $('#teams-schedules').append(row);
                });
            }
        });

        // Team result
        $.ajax({
            url: '/teams/results?teamId='+fetchIdFromUrl(),
            type: 'GET',
            success: function(response) {
                response.teamMatchesData.forEach(teamMatch => {
                    if (teamMatch.matchDetailsMap) {
                        let matchDetailsMap = teamMatch.matchDetailsMap;
                        var row = null;
                        
                        // Iterate over all keys in matchDetailsMap
                        Object.keys(matchDetailsMap).forEach(key => {
                            if (Array.isArray(matchDetailsMap[key])) {
                                var utcDate = null;
                                let matches = matchDetailsMap[key];
                                matches.forEach(match => {
                                    let matchInfo = match.matchInfo;
                                    let matchScore = match.matchScore;
                                    
                                    let startDate = new Date(parseInt(matchInfo.startDate));
                                    console.log(startDate.toUTCString());
                                   
                                    row += `
                                        <tr>
                                            <td>${startDate.toDateString()}</td>
                                            <td>
                                                <a href="#">${matchInfo.team1.teamName} vs ${matchInfo.team2.teamName}, ${matchInfo.matchDesc}</a><br>
                                                ${matchInfo.seriesName}<br>
                                                ${matchInfo.venueInfo.ground}, ${matchInfo.venueInfo.city}<br>
                                                <span style="color: rgb(61, 61, 241);">${matchInfo.status}</span><br>

                                            </td>
                                           
                                        </tr>
                                    `;
                                    
                                });
                                $('#results-table').append(row);
                            }
                        });
                    }
                });
            }
        });

        // Team News
        $.ajax({
            url: '/teams/news?teamId='+fetchIdFromUrl(),
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                // Extract the list of news stories from the response
                let storyList = response.storyList;

                // Iterate over each news story and create HTML elements to display them
                storyList.forEach(storyItem => {
                    if (storyItem.story) {
                        let story = storyItem.story;
                        console.log(story);
                        // Create HTML elements dynamically
                        let newsImage = `<img src="https://www.cricbuzz.com/a/img/v1/152x152/i1/c${story.imageId}/cms-img.jpg" alt="${story.hline}" width="200" height="150" class="img-fluid">`;
                        let newsLink = `<a href="#">${story.hline}</a>`;
                        let newsIntro = `<br>${story.intro}`;
                        let pubTime = new Date(parseInt(story.pubTime)).toDateString();

                        // Create a row for each news story
                        let row = `
                            <tr>
                                <td style="width: 250px;">${newsImage}</td>
                                <td>
                                    ${newsLink}${newsIntro}<br>
                                    <span>${pubTime}</span>
                                </td>
                            </tr>
                        `;
                        
                        $('#news-table').append(row);
                    }
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching news data:', error);
            }
        });

    });


    function fetchIdFromUrl() {
        const urlParams = new URLSearchParams(window.location.search);
        const teamId = urlParams.get('teamId');
        return teamId;
   }
</script>
@endsection
