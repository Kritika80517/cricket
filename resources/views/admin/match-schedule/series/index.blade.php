@extends('admin.layouts.master')
@section('pagetitle', 'Series')
@section('admin-content')
    <!-- Main Content -->
    <style>
        .nav-pills li {
            margin-right: 25px;
            border-radius: 50% !important;
        }

        .loader {
            border: 6px solid #f3f3f3;
            border-top: 6px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 2s linear infinite;
            position: fixed;
            top: 55%;
            left: 57%;
            margin-top: -60px;
            margin-left: -60px;
            z-index: 1000;
            background: #a0cae5;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Series List</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Series</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div style="min-height: 300px;" class="card">
                            <div class="card-header d-md-flex justify-content-between">
                                <h4>{{ request()->seriesName ?? 'Series' }}</h4>
                                <div class="">
                                    {{-- @php
                                // Fetch archived league data
                                $type = 'league';
                                $response = cricketAPI("/series/v1/archives/" . $type);

                                if ($response->successful()) {
                                $league_data = $response->json(); // Directly assign the decoded response
                                } else {
                                $league_data = [];
                                }

                                $type = 'international';
                                $response = cricketAPI("/series/v1/archives/" . $type);
                                $international_data_select = [];

                                if ($response->successful()) {
                                    $international_data_select = $response->json(); // Directly assign the decoded response
                                }
                             
                                @endphp --}}

                                    {{-- <select class="form-control" name="" id="">
                                    <option value=""> Select Series type </option>
                                    @foreach ($international_data_select['seriesMapProto'][0]['series'] as $item)
                                    <option>{{ $item['name']??'' }} </option>
                                    @endforeach
                                </select> --}}
                                </div>
                            </div>

                            <div class="card-body">
                                @if (request()->has('seriesId'))
                                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active show" id="home-tab2" data-toggle="tab" href="#home2"
                                                role="tab" aria-controls="home" aria-selected="true">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="schedule_results2" data-toggle="tab"
                                                href="#schedule_results" role="tab" aria-controls="schedule_results"
                                                aria-selected="false">Schedule & Results</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="news-tab2" data-toggle="tab" href="#news"
                                                role="tab" aria-controls="news" aria-selected="false">News</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="videos-tab2" data-toggle="tab" href="#videos"
                                                role="tab" aria-controls="contact" aria-selected="false">Videos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab2" data-toggle="tab" href="#points_table"
                                                role="tab" aria-controls="contact" aria-selected="false">Points
                                                Table</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab2" data-toggle="tab" href="#squads"
                                                role="tab" aria-controls="contact" aria-selected="false">Squads</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab2" data-toggle="tab" href="#photos"
                                                role="tab" aria-controls="contact" aria-selected="false">Photos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="stats-tab2" data-toggle="tab" href="#stats"
                                                role="tab" aria-controls="contact" aria-selected="false">Stats</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="venue-tab2" data-toggle="tab" href="#venue"
                                                role="tab" aria-controls="contact" aria-selected="false">Venues</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content tab-bordered" id="myTab3Content">
                                        <div class="tab-pane fade active show" id="home2" role="tabpanel"
                                            aria-labelledby="home-tab2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </div>

                                        <div class="tab-pane fade" id="schedule_results" role="tabpanel"
                                            aria-labelledby="schedule_results2">
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
                                                        @foreach ($matches['matchDetails'] as $item)
                                                            @if (isset($item['matchDetailsMap']))
                                                                @foreach ($item['matchDetailsMap']['match'] as $match)
                                                                    @php
                                                                        $startDate = \Carbon\Carbon::createFromTimestampMs($match['matchInfo']['startDate'],)->format('M d, D');
                                                                        $team1 = $match['matchInfo']['team1']['teamName'];
                                                                        $team2 =$match['matchInfo']['team2']['teamName'];
                                                                        $matchDesc = $match['matchInfo']['matchDesc'];
                                                                        $ground =  $match['matchInfo']['venueInfo']['ground'];
                                                                        $city = $match['matchInfo']['venueInfo']['city'];
                                                                        $status = $match['matchInfo']['status'];
                                                                        $localTime = \Carbon\Carbon::createFromTimestampMs($match['matchInfo']['startDate'], )->format('h:i A');
                                                                        $gmtTime =
                                                                            \Carbon\Carbon::createFromTimestampMs( $match['matchInfo']['startDate'],)->setTimezone('GMT')->format('h:i A') . ' GMT';
                                                                        $localTimeWithOffset =\Carbon\Carbon::createFromTimestampMs($match['matchInfo']['startDate'],)->format('h:i A') . ' LOCAL';
                                                                    @endphp
                                                                    <tr class="border-bottom">
                                                                        <td>{{ $startDate }}</td>
                                                                        <td>
                                                                            {{ $team1 }} vs {{ $team2 }},
                                                                            {{ $matchDesc }}<br>
                                                                            {{ $ground }}, {{ $city }}<br>
                                                                            <span class="text-primary">{{ $status }}</span>
                                                                        </td>
                                                                        <td>
                                                                            {{ $localTime }}<br>
                                                                            {{ $gmtTime }} /
                                                                            {{ $localTimeWithOffset }}
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            @endif
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="news" role="tabpanel"
                                            aria-labelledby="news-tab2">
                                            <ul class="list-unstyled">
                                                @foreach ($news['storyList'] as $key => $item)
                                                    @if (isset($item['story']))
                                                        @php
                                                            $story = $item['story'];
                                                            $imageId = $story['imageId'];
                                                            $imageUrl = cricketAPI(
                                                                '/img/v1/i1/c' . $imageId . '/i.jpg',
                                                            )->body();
                                                            $base64Image =
                                                                'data:image/jpeg;base64,' . base64_encode($imageUrl);
                                                        @endphp

                                                        <li class="media">
                                                            <img class="mr-3" src="{{ $base64Image }}"
                                                                alt="Generic placeholder image">
                                                            <!-- You can replace the src with the actual image URL -->
                                                            <div class="media-body">
                                                                <h5 class="mt-0 mb-1">{{ $story['hline'] }}</h5>
                                                                <p>{{ $story['intro'] }}</p>
                                                            </div>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>

                                        </div>

                                        {{-- videos --}}
                                        <div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="videos-tab2">

                                        </div>

                                        {{-- stats --}}
                                        <div class="tab-pane fade" id="stats" role="tabpanel" aria-labelledby="stats-tab2">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <table class="table table-hover">
                                                        @foreach ($stats['types'] as $key => $item)
                                                            <thead class="bg-dark text-light">
                                                                {{-- {{dd($item)}} --}}
                                                                <tr class="border-bottom">
                                                                    <th scope="col">{{$item ['header']}}</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="border-bottom">
                                                                    <td>{{$item ['header']}}</td>
                                                                </tr>
                                                            </tbody>
                                                        @endforeach
                                                    </table>
                                                </div>

                                                <div class="col-md-10">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr class="border-bottom">
                                                                <th>Player</th>
                                                                <th>Matches</th>
                                                                <th>Inns</th>
                                                                <th>Runs</th>
                                                                <th>Avg</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        {{-- @foreach ($stats['odiStatsList'] as $key => $item)
                                                            @if (isset($item['values']))
                                                                @foreach ($item['values'] as $value)
                                                                    @if (isset($value[1]))
                                                                        <table class="table table-striped">
                                                                            <tbody>
                                                                                <tr class="border-bottom">
                                                                                    <td>{{ $value[1] }}</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                         @endforeach --}}
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- venue --}}
                                        <div class="tab-pane fade" id="venue" role="tabpanel" aria-labelledby="venue-tab2">
                                            <div class="table-responsive row">
                                                <table class="table table-striped">
                                                    @foreach ($venue['seriesVenue'] as $key => $item)
                                                        <thead>
                                                            <tr>
                                                                {{-- <th colspan="4" class="text-center">{{ $item['country'] }}</th> --}}
                                                                <th></th>
                                                                <th>{{ $item['country'] }}</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="border-bottom">
                                                                <td>
                                                                    <img src="{{ asset('assets/admin/img/logo.png') }}" alt="Logo" width="80" height="80">
                                                                </td>
                                                                <td>{{ $item['ground'] }}<br>
                                                                    <span>{{ $item['city'] }}</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </div>


                                    </div>
                                @else
                                    <ul class="nav nav-pills" id="myTab3" role="tablist">
                                        <li class="nav-item">
                                            <a class="series nav-link active" id="international-tab3" data-toggle="tab"
                                                href="#international" role="tab" aria-controls="international"
                                                data-type="international" aria-selected="true">International</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="series nav-link" id="domestic_others-tab3" data-toggle="tab"
                                                href="#domestic_others" role="tab" aria-controls="domestic_others"
                                                data-type="domestic" aria-selected="false">Domestic & Others</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="series nav-link" id="T20_leagues-tab3" data-toggle="tab"
                                                href="#T20_leagues" role="tab" aria-controls="T20_leagues"
                                                data-type="league" aria-selected="false">T20 Leagues</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="series nav-link" id="women-tab3" data-toggle="tab" href="#women"
                                                role="tab" aria-controls="women" data-type="women"
                                                aria-selected="false">Women</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="myTabContent2">
                                        <div class="tab-pane fade show active" id="international" role="tabpanel"
                                            aria-labelledby="international-tab3">
                                            <!-- Data will be loaded here -->
                                            <div class="spinner-border" id="spinner" role="status"><span
                                                    class="sr-only">Loading...</span></div>
                                        </div>
                                        <div class="tab-pane fade" id="domestic_others" role="tabpanel"
                                            aria-labelledby="domestic_others-tab3">
                                            <!-- Data will be loaded here -->
                                        </div>
                                        <div class="tab-pane fade" id="T20_leagues" role="tabpanel"
                                            aria-labelledby="T20_leagues-tab3">
                                            <!-- Data will be loaded here -->
                                        </div>
                                        <div class="tab-pane fade" id="women" role="tabpanel"
                                            aria-labelledby="women-tab3">
                                            <!-- Data will be loaded here -->
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>


    <!--End Main Content -->

    {{-- screipt --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabLinks = document.querySelectorAll('.series.nav-link');
            const baseUrl = "{{ url('admin/cricket-schedule/series/') }}";

            tabLinks.forEach(tabLink => {
                tabLink.addEventListener('click', function(event) {
                    event.preventDefault();

                    const tabPane = document.querySelector(this.getAttribute('href'));
                    const dataType = this.getAttribute('data-type');

                    if (!tabPane.classList.contains('loaded')) {
                        showLoader(tabPane);
                        fetchSeriesData(dataType, tabPane);
                    }
                });
            });

            function showLoader(tabPane) {
                tabPane.innerHTML =
                    '<div class="loader" id="spinner" role="status"><span class="sr-only">Loading...</span></div>';
            }

            function fetchSeriesData(type, tabPane) {
                const url = `${baseUrl}/${type}`;
                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        tabPane.innerHTML = renderSeriesTable(data);
                        tabPane.classList.add('loaded');
                    })
                    .catch(error => {
                        console.error('Error fetching data:', error);
                        tabPane.innerHTML = '<p>Error loading data.</p>';
                    });
            }

            function renderSeriesTable(data) {
                let table = `<table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 20%;">Month</th>
                                    <th>Series Name</th>
                                </tr>
                            </thead>
                            <tbody>`;

                data.seriesMapProto.forEach(item => {
                    table += `<tr>
                            <td rowspan="${item.series.length}">${item.date}</td>
                            <td class="border-bottom">
                                <a href="${baseUrl}?seriesId=${item.series[0].id}&seriesName=${item.series[0].name}" data-series-id="${item.series[0].id}">${item.series[0].name}</a>
                            </td>
                        </tr>`;
                    for (let i = 1; i < item.series.length; i++) {
                        table += `<tr>
                                <td class="border-bottom">
                                    <a href="${baseUrl}?seriesId=${item.series[i].id}&seriesName=${item.series[i].name}" data-series-id="${item.series[i].id}">${item.series[i].name}</a>
                                </td>
                            </tr>`;
                    }
                });


                table += `</tbody></table>`;
                return table;
            }

            // Trigger click on the active tab to load data initially
            document.querySelector('.series.nav-link.active').click();
        });

        // Match details API's
    </script>
@endsection
