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
                            <li>Players Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- {{dd($battingData)}} --}}
    <section class="content-info">

        <!-- Single Team Tabs -->
        <div class="single-player-tabs">
           <div class="container">
                <div class="row">
                    <!-- Side info single team-->
                    <div class="col-lg-4 col-xl-3">

                        <div class="item-player single-player">
                            <div class="head-player">
                                <img src="https://static.cricbuzz.com/a/img/v1/200x200/i1/c{{$data['faceImageId']}}/{{$data['name']}}.jpg" alt="location-team">
                            </div>
                            <div class="info-player">
                                {{-- <span class="number-player">
                                    10
                                </span> --}}
                                <h4>
                                   {{$data['name']}}
                                    <span>{{ $data['role'] }}</span>
                                </h4>
                                <ul>
                                    <li><strong>TEAM NAME:</strong> <span> {{$data['intlTeam'] ?? '--'}} </span>
                                    <li><strong>DOB:</strong> <span>{{ $data['DoB']  ?? '--'}}</span></li>
                                    <li><strong>Height:</strong> <span>{{ $data['height']  ?? '--'}}</span></li>
                                    <li><strong>Bat:</strong> <span>{{ $data['bat']  ?? '--'}}</span></li>
                                    <li><strong>Bowl:</strong> <span>{{ $data['bowl']  ?? '--'}}</span></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Attack -->
                        <div class="panel-box">
                            <div class="titles no-margin">
                                <h4><i class="fa-solid fa-ranking-star"></i>ICC Rankings</h4>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Test</th>
                                        <th>ODI</th>
                                        <th>T20</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Batting
                                        </td>
                                        <td>{{ $data['rankings']['bat']['testRank']  ?? '--'}}</td>
                                        <td>{{ $data['rankings']['bat']['odiRank'] ?? '--'}}</td>
                                        <td>{{ $data['rankings']['bat']['t20Rank'] ?? '--'}}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Bowling
                                        </td>
                                        <td>{{ $data['rankings']['bowl']['testRank'] ?? '--' }}</td>
                                        <td>{{ $data['rankings']['bowl']['odiRank'] ?? '--' }}</td>
                                        <td>{{ $data['rankings']['bowl']['t20Rank'] ?? '--' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            
                            
                        </div>

                        <div class="panel-box">
                            <div class="titles no-margin">
                                <h4><i class="fa fa-user"></i>Career Information</h4>
                            </div>
                            <div class="p-2">
                                <p>{{$data['teams']}}</p>
                            </div>
                        </div>
                        <!-- End Attack -->
                    </div>
                    <!-- end Side info single team-->

                    <div class="col-lg-8 col-xl-9">
                        <!-- Nav Tabs -->
                        <ul class="nav nav-tabs" id="myTab">
                           <li class="" aria-expanded="false"><a href="#overview" data-toggle="tab" class="active" aria-expanded="true">About</a></li>
                           <li><a href="#batingcareer" data-toggle="tab" class="" aria-expanded="false">BATTIG CAREER</a></li>
                           <li><a href="#bowlingcareer" data-toggle="tab" class="" aria-expanded="false">BOWLING CAREER</a></li>
                        </ul>
                        <!-- End Nav Tabs -->

                        <!-- Content Tabs -->
                        <div class="tab-content">
                            <!-- Tab One - overview -->
                            <div class="tab-pane active" id="overview" aria-expanded="true">

                                <div class="panel-box padding-b">
                                  <div class="titles">
                                      <h4>Profile</h4>
                                  </div>
                                    <div class="row">
                                       <div class="col-lg-12 col-xl-4">
                                           <img src="https://static.cricbuzz.com/a/img/v1/200x200/i1/c{{$data['faceImageId']}}/{{$data['name']}}.jpg" alt="">
                                       </div>

                                       <div class="col-lg-12 col-xl-8">
                                           <p>
                                                {{$data['bio']}}
                                           </p>

                                       </div>
                                   </div>
                               </div>
                            </div>
                            <!-- Tab One - overview -->

                            <!-- Tab Theree - career -->
                            <div class="tab-pane" id="batingcareer" aria-expanded="false">
                                <div class="col-lg-12">
                                    <table class="table-striped table-responsive table-hover career">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>M</th>
                                                <th>Inn</th>
                                                <th>NO</th>
                                                <th>Runns</th>
                                                <th>HS</th>
                                                <th>Avg</th>
                                                <th>BF</th>
                                                <th>SR</th>
                                                <th>100</th>
                                                <th>200</th>
                                                <th>50</th>
                                                <th>4s</th>
                                                <th>6s</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($battingData['values'] as $item)
                                               <tr>
                                                    @foreach ($item['headers'] as $value)

                                                        <td> {{ $value }} </td>
                                                    @endforeach
                                                   @foreach ($item['values'] as $value)
                                                       <td>{{ $value }}</td>
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
                                                       <td></td>
                                                    @endforeach
                                                 </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Tab Theree - career -->

                            <!-- Tab Theree - stats -->
                            <div class="tab-pane" id="bowlingcareer" aria-expanded="false">
                                <div class="col-lg-12">
                                    <table class="table-striped table-responsive table-hover career">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>M</th>
                                                <th>Inn</th>
                                                <th>B</th>
                                                <th>Runns</th>
                                                <th>Wkts</th>
                                                <th>BBI</th>
                                                <th>BBM</th>
                                                <th>Econ</th>
                                                <th>Avg</th>
                                                <th>SR</th>
                                                <th>5W</th>
                                                <th>10W</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> 2017/2018</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
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