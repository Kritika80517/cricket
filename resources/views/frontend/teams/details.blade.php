@extends('frontend.layouts.master')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="{{ asset('assets/frontend/js/cricket/teams-details.js') }}"></script>
<style>
    .stateFiltersActive.active {
    background-color: #dfebf6 !important; /* Example of active state styling */
    color: #333 !important; /* Example of text color change for active state */
}
</style>
@section('frontend-content')
    <div class="section-title-team">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="row">
                        <div class="col-md-9">
                            <h1>{{ request()->teamName ?? '' }}</h1>
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
                            <li class="" aria-expanded="false"><a href="#overview" data-toggle="tab" class="active"
                                    aria-expanded="true">Overview</a></li>
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
                                        <div class="loader-div">
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
                                    <div class="col-lg-3">
                                        <div id="team-stats-filters">

                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <table class="table-striped table-responsive table-hover result-point">
                                            <thead class="point-table-head">
                                                <tr class="">
                                                    <th class="">PLAYER</th>
                                                    <th class="text-right">MATCHES</th>
                                                    <th class="text-right">INNS</th>
                                                    <th class="text-right">RUNS</th>
                                                    <th class="text-right">AVG</th>
                                                    {{-- <th class="text-right">SR</th>
                                                    <th class="text-right">4s</th>
                                                    <th class="text-right">6s</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody id="team-stats-data">
                                                {{-- <tr>
                                                    <td>Anup Kumar</td>
                                                    <td>123</td>
                                                    <td>12</td>
                                                    <td>23</td>
                                                    <td>34</td>
                                                    <td>45</td>
                                                    <td>56</td>
                                                    <td>56</td>
                                                </tr> --}}
                                            </tbody>
                                        </table>
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
                                    <ul id="teams-matches">
                                        <div class="loader-div">
                                            <div class="loader"></div>
                                        </div>
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



    </section>
@endsection
