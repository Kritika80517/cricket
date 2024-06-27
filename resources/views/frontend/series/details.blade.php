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
                    <h1>Series</h1>
                </div>

                <div class="col-md-4">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Series</li>
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

                                <div class="post-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="img-hover">
                                                <img src="{{ asset('assets/frontend/img/blog/2.jpg') }}" alt=""
                                                    class="img-responsive">
                                                <div class="overlay"><a href="single-news.html">+</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h5><a href="single-news.html">Russia 2018’s potential classic match-ups</a>
                                            </h5>
                                            <span class="data-info">January 9, 2014 </span>
                                            <p>Our goal is very clear, it didn’t change after the draw. We should qualify
                                                for the knockout stage.<a href="single-news.html">Read More [+]</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Schedule tab --}}
                            <div class="tab-pane" id="schedule">
                                <div class="row mt-2 mb-2">
                                    <div class="col-lg-12">
                                        <table class="table mt-2" border="1" id="series-schedules"
                                            style="min-height: 200px;">
                                            {{-- <div class="loader-div">
                                                <div class="loader"></div>
                                            </div> --}}
                                            <thead>
                                                <tr>
                                                    <th style="width: 150px">Date</th>
                                                    <th>Match Details</th>
                                                    <th>Time</th>
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
                                                    <td>07:00 </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            {{-- News tab --}}
                            <div class="tab-pane" id="news">
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
                                                    <th class="text-center">NR</th>
                                                    <th class="text-center">PTS</th>
                                                    <th class="text-center">NRR</th>
                                                    <th class="text-center">D</th>
                                                </tr>
                                            </thead>

                                            <tbody class="text-center">
                                                <tr>
                                                    <td class="text-left">
                                                        <img src="{{ asset('assets/frontend/img/clubs-logos/colombia.png') }}"
                                                            alt="Colombia"><span>Colombia</span>
                                                    </td>
                                                    <td>38</td>
                                                    <td>26</td>
                                                    <td>9</td>
                                                    <td>3</td>
                                                    <td>73</td>
                                                    <td>32</td>
                                                    <td>+41</td>
                                                    <td>87</td>
                                                </tr>

                                                <tr>
                                                    <td class="text-left">
                                                        <img src="{{ asset('assets/frontend/img/clubs-logos/bra.png') }}"
                                                            alt="Brazil"><span>Brazil</span>
                                                    </td>
                                                    <td>38</td>
                                                    <td>24</td>
                                                    <td>7</td>
                                                    <td>7</td>
                                                    <td>83</td>
                                                    <td>38</td>
                                                    <td>+45</td>
                                                    <td>79</td>
                                                </tr>

                                                <tr>
                                                    <td class="text-left">
                                                        <img src="{{ asset('assets/frontend/img/clubs-logos/arg.png') }}"
                                                            alt="Argentina"><span>Argentina</span>
                                                    </td>
                                                    <td>38</td>
                                                    <td>22</td>
                                                    <td>9</td>
                                                    <td>7</td>
                                                    <td>71</td>
                                                    <td>36</td>
                                                    <td>+35</td>
                                                    <td>75</td>
                                                </tr>

                                                <tr>
                                                    <td class="text-left">
                                                        <img src="{{ asset('assets/frontend/img/clubs-logos/japan.png') }}"
                                                            alt="Japan"><span>Japan</span>
                                                    </td>
                                                    <td>38</td>
                                                    <td>20</td>
                                                    <td>10</td>
                                                    <td>8</td>
                                                    <td>62</td>
                                                    <td>37</td>
                                                    <td>+25</td>
                                                    <td>70</td>
                                                </tr>

                                                <tr>
                                                    <td class="text-left">
                                                        <img src="{{ asset('assets/frontend/img/clubs-logos/sen.png') }}"
                                                            alt="Senegal"><span>Senegal</span>
                                                    </td>
                                                    <td>38</td>
                                                    <td>19</td>
                                                    <td>7</td>
                                                    <td>12</td>
                                                    <td>58</td>
                                                    <td>53</td>
                                                    <td>+5</td>
                                                    <td>64</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            {{-- squad --}}
                            <div class="tab-pane" id="squad">
                                <div class="row mt-2 mb-2">
                                    <div class="col-lg-3">
                                        <div class="panel-box">
                                            <div class="titles no-margin">
                                                <h4><i class="fa fa-soccer-ball-o"></i>ODI</h4>
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
                                        <div class="groups-list page-group">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <h5><a href="groups.html">BATTERS</a></h5>
                                                    <div class="player-item">
                                                        <img src="{{asset('assets/frontend/img/players/6.jpg')}}" alt="Rohit Sharma">
                                                        <div>
                                                            <div class="player-name">Rohit Sharma (Captain)</div>
                                                            <div class="player-role">Batter</div>
                                                        </div>
                                                    </div>
                                                    <div class="player-item">
                                                        <img src="{{asset('assets/frontend/img/players/6.jpg')}}" alt="Rohit Sharma">
                                                        <div>
                                                            <div class="player-name">Virat Kohli</div>
                                                            <div class="player-role">Batter</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 mt-4">
                                                    <div class="player-item">
                                                        <img src="{{asset('assets/frontend/img/players/6.jpg')}}" alt="Yashasvi Jaiswal">
                                                        <div>
                                                            <div class="player-name">Yashasvi Jaiswal</div>
                                                            <div class="player-role">Batter</div>
                                                        </div>
                                                    </div>
                                                    <div class="player-item">
                                                        <img src="{{asset('assets/frontend/img/players/6.jpg')}}" alt="Suryakumar Yadav">
                                                        <div>
                                                            <div class="player-name">Suryakumar Yadav</div>
                                                            <div class="player-role">Batter</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <h5><a href="groups.html">ALL ROUNDERS</a></h5>
                                                    <div class="player-item">
                                                        <img src="{{asset('assets/frontend/img/players/6.jpg')}}" alt="Rohit Sharma">
                                                        <div>
                                                            <div class="player-name">Rohit Sharma (Captain)</div>
                                                            <div class="player-role">Batter</div>
                                                        </div>
                                                    </div>
                                                    <div class="player-item">
                                                        <img src="{{asset('assets/frontend/img/players/6.jpg')}}" alt="Rohit Sharma">
                                                        <div>
                                                            <div class="player-name">Virat Kohli</div>
                                                            <div class="player-role">Batter</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 mt-4">
                                                    <div class="player-item">
                                                        <img src="{{asset('assets/frontend/img/players/6.jpg')}}" alt="Yashasvi Jaiswal">
                                                        <div>
                                                            <div class="player-name">Yashasvi Jaiswal</div>
                                                            <div class="player-role">Batter</div>
                                                        </div>
                                                    </div>
                                                    <div class="player-item">
                                                        <img src="{{asset('assets/frontend/img/players/6.jpg')}}" alt="Suryakumar Yadav">
                                                        <div>
                                                            <div class="player-name">Suryakumar Yadav</div>
                                                            <div class="player-role">Batter</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <h5><a href="group-list.html">WICKET KEEPERS</a></h5>
                                                    <div class="player-item">
                                                        <img src="{{asset('assets/frontend/img/players/6.jpg')}}" alt="Rohit Sharma">
                                                        <div>
                                                            <div class="player-name">Rohit Sharma (Captain)</div>
                                                            <div class="player-role">Batter</div>
                                                        </div>
                                                    </div>
                                                    <div class="player-item">
                                                        <img src="{{asset('assets/frontend/img/players/6.jpg')}}" alt="Rohit Sharma">
                                                        <div>
                                                            <div class="player-name">Virat Kohli</div>
                                                            <div class="player-role">Batter</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12 mt-4">
                                                    <div class="player-item">
                                                        <img src="{{asset('assets/frontend/img/players/6.jpg')}}" alt="Yashasvi Jaiswal">
                                                        <div>
                                                            <div class="player-name">Yashasvi Jaiswal</div>
                                                            <div class="player-role">Batter</div>
                                                        </div>
                                                    </div>
                                                    <div class="player-item">
                                                        <img src="{{asset('assets/frontend/img/players/6.jpg')}}" alt="Suryakumar Yadav">
                                                        <div>
                                                            <div class="player-name">Suryakumar Yadav</div>
                                                            <div class="player-role">Batter</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <h5><a href="group-list.html">BOWLERS</a></h5>
                                                    <div class="player-item">
                                                        <img src="{{asset('assets/frontend/img/players/6.jpg')}}" alt="Rohit Sharma">
                                                        <div>
                                                            <div class="player-name">Rohit Sharma (Captain)</div>
                                                            <div class="player-role">Batter</div>
                                                        </div>
                                                    </div>
                                                    <div class="player-item">
                                                        <img src="{{asset('assets/frontend/img/players/6.jpg')}}" alt="Rohit Sharma">
                                                        <div>
                                                            <div class="player-name">Virat Kohli</div>
                                                            <div class="player-role">Batter</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Stats --}}
                            <div class="tab-pane mt-2" id="stats">
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

                            {{-- Venue --}}
                            <div class="tab-pane" id="venue">
                                <div class="post-item">
                                    <div class="row mt-2">
                                        <div class="col-md-4">
                                            <div class="img-hover">
                                                <img src="{{ asset('assets/frontend/img/blog/1.jpg') }}" alt=""
                                                    class="img-responsive">
                                                <div class="overlay"><a href="/">+</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h5><a href="/">Mahinda Rajapaksa International Stadium</a></h5>
                                            <span class="data-info">Hambantota</span>
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
