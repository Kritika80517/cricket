@extends('frontend.layouts.master')
@section('frontend-content')

<style>
    .match-nav li a{
        padding : 5px 10px;
        border-radius: 20px;
        font-size: 12px;
    }
    .navbar {
            display: flex;
            justify-content: left;
            align-items: left;
            list-style-type: none;
            padding: 0;
            margin: 20px 0;
        }
        .navbar li {
            margin: 0 10px;
        }
        .navbar li a {
            text-decoration: none;
            color: blue;
        }
        .navbar li:not(:last-child)::after {
            content: '|';
            color: black;
            margin-left: 10px;
        }
</style>
    <div class="section-title" style="background:url(assets/frontend/img/slide/1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Matches</h1>
                </div>

                <div class="col-md-4">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Inner Page</li>
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
                        <li class="active"><a href="#live" data-toggle="tab">Live</a></li>
                        <li><a href="#recent" data-toggle="tab">Recent</a></li>
                        <li><a href="#upcoming" data-toggle="tab">Upcoming</a></li>
                    </ul>
                    <!-- End Nav Tabs -->
                </div>
                <div class="col-lg-9 padding-top-mini">
                    <!-- Content Tabs -->
                    <div class="tab-content">
                        <!-- Live Matches -->
                        <div class="tab-pane show active" id="live">
                            <div class="panel-box" style="padding-bottom: 10px">
                                <div class="titles mb-0">
                                    <h4>Live Cricket Score</h4>
                                    <div class="mt-5 ml-4">
                                        <ul class="nav nav-tabs mb-3 match-nav" id="myTab">
                                            <li class="active"><a href="#international" data-toggle="tab">International</a></li>
                                            <li><a href="#domestic" data-toggle="tab">Domestic & Others</a></li>
                                            <li><a href="#league" data-toggle="tab">Leagues</a></li>
                                            <li><a href="#women" data-toggle="tab">Women</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="tab-content">
                                    {{-- international --}}
                                    <div class="tab-pane m-2 active" id="international">
                                        <div class="post-item p-2" >
                                            <div class=" col-lg-12" >
                                                <div class="bg-light">
                                                    <h3 class="ml-2">ICC MENS T20 WORLD CUP 2024</h3>
                                                </div>
                                                <span><a href="">India vs Australia, </a> 51st Match, Super 8 Group 1</span><br>
                                                <p>Today  •  6:00 AM at North Sound, Antigua, Sir Vivian Richards Stadium</p>
                                            </div>
                                            <div class="panel-box col-lg-4 ml-2 mb-0 bg-light">
                                                <div class="titles no-margin" style="border-left: 5px solid #01d099">
                                                    <div class="m-2 p-2">  
                                                        <span>IND<span class="ml-2"> 72(17 Ovs)</span></span><br>
                                                        <span><b>AUS     <span class="ml-2">74.1(5.4 Ovs)</span></b></span><br>
                                                        <p><a href="">Australia won by 9 </a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <ul class="navbar">
                                                    <li><a href="#">Live Score</a></li>
                                                    <li><a href="#">Scorecard</a></li>
                                                    <li><a href="#">Full Commentary</a></li>
                                                    <li><a href="#">News</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end international --}}

                                    {{-- domestic --}}
                                    <div class="tab-pane m-2" id="domestic">
                                        <div class="post-item p-2" >
                                            <div class=" col-lg-12" >
                                                <div class="bg-light ml-2">
                                                    <h3 class="">COUNTY CHAMPIONSHIP DIVISION TWO 2024</h3>
                                                </div>
                                                <span><a href="">Northamptonshire vs Glamorgan,  </a> 29th Match</span><br>
                                                <p>Jun 23 - Jun 26  •  3:30 PM at Cardiff, Sophia Gardens</p>
                                            </div>
                                            <div class="panel-box col-lg-4 ml-2 mb-0 bg-light">
                                                <div class="titles no-margin" style="border-left: 5px solid #01d099">
                                                    <div class="m-2 p-2">  
                                                        <span>NHNT <span class="ml-3">279</span></span><br>
                                                        <span><b>GLAM <span class="ml-3">390-8</span></b></span><br>
                                                        <p><a href="">Day 2: Stumps - Glamorgan lead by 111 runs</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <ul class="navbar">
                                                    <li><a href="#">Live Score</a></li>
                                                    <li><a href="#">Scorecard</a></li>
                                                    <li><a href="#">Full Commentary</a></li>
                                                    <li><a href="#">News</a></li>
                                                </ul>
                                            </div>

                                        </div>

                                        <div class="post-item p-2" >
                                            <div class=" col-lg-12" >
                                                <div class="bg-light">
                                                    <h3 class="ml-2">COUNTY CHAMPIONSHIP DIVISION TWO 2024</h3>
                                                </div>
                                                <span><a href="">Northamptonshire vs Glamorgan,  </a> 29th Match</span><br>
                                                <p>Jun 23 - Jun 26  •  3:30 PM at Cardiff, Sophia Gardens</p>
                                            </div>
                                            <div class="panel-box col-lg-4 ml-2 mb-0 bg-light">
                                                <div class="titles no-margin" style="border-left: 5px solid #01d099">
                                                <div class="m-2 p-2">    
                                                    <span>NHNT <span class="ml-3">279</span></span><br>
                                                    <span><b>GLAM <span class="ml-3">390-8</span></b></span><br>
                                                    <p><a href="">Day 2: Stumps - Glamorgan lead by 111 runs</a></p>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <ul class="navbar">
                                                    <li><a href="#">Live Score</a></li>
                                                    <li><a href="#">Scorecard</a></li>
                                                    <li><a href="#">Full Commentary</a></li>
                                                    <li><a href="#">News</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end domestic --}}

                                    {{-- league --}}
                                    <div class="tab-pane m-2" id="league">
                                        <div class="post-item p-2" >
                                            <div class=" col-lg-12" >
                                                <div class="bg-light ml-2">
                                                    <h3 class="">COUNTY CHAMPIONSHIP DIVISION TWO 2024</h3>
                                                </div>
                                                <span><a href="">Northamptonshire vs Glamorgan,  </a> 29th Match</span><br>
                                                <p>Jun 23 - Jun 26  •  3:30 PM at Cardiff, Sophia Gardens</p>
                                            </div>
                                            <div class="panel-box col-lg-4 ml-2 mb-0 bg-light">
                                                <div class="titles no-margin" style="border-left: 5px solid #01d099">
                                                <div class="m-2 p-2">  
                                                    <p><a href="">Read Preview</a></p>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <ul class="navbar">
                                                    <li><a href="#">Match Facts</a></li>
                                                    <li><a href="#">News</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="post-item p-2" >
                                            <div class=" col-lg-12" >
                                                <div class="bg-light">
                                                    <h3 class="ml-2">ICC MENS T20 WORLD CUP 2024</h3>
                                                </div>
                                                <span><a href="">India vs Australia, </a> 51st Match, Super 8 Group 1</span><br>
                                                <p>Today  •  6:00 AM at North Sound, Antigua, Sir Vivian Richards Stadium</p>
                                            </div>
                                            <div class="panel-box col-lg-4 ml-2 mb-0 bg-light">
                                                <div class="titles no-margin" style="border-left: 5px solid #01d099">
                                                <div class="m-2 p-2"> 
                                                    <p><a href="">Read Preview</a></p>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <ul class="navbar">
                                                    <li><a href="#">Match Facts</a></li>
                                                    <li><a href="#">News</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- end league --}}

                                    {{-- women --}}
                                    <div class="tab-pane m-2" id="women">
                                        <table class="table table-responsive table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width: 150px">Month</th>
                                                    <th>Series Name</th>
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
                                                </tr>
                                                
                                            </tbody>
                                        </table>
            
                                    </div>
                                    {{-- end women --}}
                                </div>
                            </div>
                            
                        </div>
                        <!-- Live Matches -->

                        <!-- Recent Matches -->
                        <div class="tab-pane show" id="recent">
                            <div class="panel-box" style="padding-bottom: 10px">
                                <div class="titles mb-0">
                                    <h4>Recent Cricket Score</h4>
                                    <div class="mt-5 ml-4">
                                        <ul class="nav nav-tabs mb-3 match-nav" id="myTab">
                                            <li class="active"><a href="#international1" data-toggle="tab" style="border-radius: 20px;">International</a></li>
                                            <li><a href="#domestic1" data-toggle="tab" style="border-radius: 20px;">Domestic & Others</a></li>
                                            <li><a href="#league1" data-toggle="tab" style="border-radius: 20px;">T20 Leagues</a></li>
                                            <li><a href="#women1" data-toggle="tab" style="border-radius: 20px;">Women</a></li>
                                        </ul>
                                    </div>
                                </div>
                               
                               <div class="tab-content">
                                 {{-- international --}}
                                 <div class="tab-pane m-2 active" id="international1">
                                    <div class="post-item p-2" >
                                        <div class=" col-lg-12" >
                                            <div class="bg-light ml-2">
                                                <h3 class="">COUNTY CHAMPIONSHIP DIVISION TWO 2024</h3>
                                            </div>
                                            <span><a href="">Northamptonshire vs Glamorgan,  </a> 29th Match</span><br>
                                            <p>Jun 23 - Jun 26  •  3:30 PM at Cardiff, Sophia Gardens</p>
                                        </div>
                                        <div class="panel-box col-lg-4 ml-2 mb-0 bg-light">
                                            <div class="titles no-margin" style="border-left: 5px solid #01d099">
                                                <div class="m-2 p-2">  
                                                    <span>NHNT <span class="ml-3">279</span></span><br>
                                                    <span><b>GLAM <span class="ml-3">390-8</span></b></span><br>
                                                    <p><a href="">Day 2: Stumps - Glamorgan lead by 111 runs</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <ul class="navbar">
                                                <li><a href="#">Live Score</a></li>
                                                <li><a href="#">Scorecard</a></li>
                                                <li><a href="#">Full Commentary</a></li>
                                                <li><a href="#">News</a></li>
                                            </ul>
                                        </div>

                                    </div>

                                    <div class="post-item p-2" >
                                        <div class=" col-lg-12" >
                                            <div class="bg-light">
                                                <h3 class="ml-2">COUNTY CHAMPIONSHIP DIVISION TWO 2024</h3>
                                            </div>
                                            <span><a href="">Northamptonshire vs Glamorgan,  </a> 29th Match</span><br>
                                            <p>Jun 23 - Jun 26  •  3:30 PM at Cardiff, Sophia Gardens</p>
                                        </div>
                                        <div class="panel-box col-lg-4 ml-2 mb-0 bg-light">
                                            <div class="titles no-margin" style="border-left: 5px solid #01d099">
                                            <div class="m-2 p-2">    
                                                <span>NHNT <span class="ml-3">279</span></span><br>
                                                <span><b>GLAM <span class="ml-3">390-8</span></b></span><br>
                                                <p><a href="">Day 2: Stumps - Glamorgan lead by 111 runs</a></p>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <ul class="navbar">
                                                <li><a href="#">Live Score</a></li>
                                                <li><a href="#">Scorecard</a></li>
                                                <li><a href="#">Full Commentary</a></li>
                                                <li><a href="#">News</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {{-- end international --}}

                                {{-- domestic --}}
                                <div class="tab-pane m-2" id="domestic1">
                                    <h3>Domestic match</h3>
                                </div>
                                {{-- end domestic --}}

                                {{-- league --}}
                                <div class="tab-pane m-2" id="league1">
                                    <h3>t20 league match</h3>
                                </div>
                                {{-- end league --}}

                                {{-- women --}}
                                <div class="tab-pane m-2" id="women1">
                                    <h3>women match</h3>
                                </div>
                                {{-- end women --}}
                               </div>
                                
                            </div>
                        </div>
                        <!-- End Recent Matches -->

                        <!-- Upcoming matches -->
                        <div class="tab-pane show" id="upcoming">
                            <div class="panel-box" style="padding-bottom: 10px">
                                <div class="titles mb-0">
                                    <h4>Upcoming Cricket Score</h4>
                                    <div class="mt-5 ml-4">
                                        <ul class="nav nav-tabs mb-3 match-nav" id="myTab">
                                            <li class="active"><a href="#international2" data-toggle="tab">International</a></li>
                                            <li><a href="#domestic2" data-toggle="tab">Domestic & Others</a></li>
                                            <li><a href="#league2" data-toggle="tab">Leagues</a></li>
                                            <li><a href="#women2" data-toggle="tab">Women</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="tab-content">
                                    {{-- international --}}
                                    <div class="tab-pane m-2 active" id="international2">
                                        <div class="post-item p-2" >
                                            <div class=" col-lg-12" >
                                                <div class="bg-light">
                                                    <h3 class="ml-2">ICC MENS T20 WORLD CUP 2024</h3>
                                                </div>
                                                <span><a href="">India vs Australia, </a> 51st Match, Super 8 Group 1</span><br>
                                                <p>Today  •  6:00 AM at North Sound, Antigua, Sir Vivian Richards Stadium</p>
                                            </div>
                                            <div class="panel-box col-lg-4 ml-2 mb-0 bg-light">
                                                <div class="titles no-margin" style="border-left: 5px solid #01d099">
                                                    <div class="m-2 p-2"> 
                                                        <p><a href="">Read Preview</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <ul class="navbar">
                                                    <li><a href="#">Match Facts</a></li>
                                                    <li><a href="#">News</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end international --}}

                                    {{-- domestic --}}
                                    <div class="tab-pane m-2" id="domestic2">
                                        <div class="post-item p-2" >
                                            <div class=" col-lg-12" >
                                                <div class="bg-light">
                                                    <h3 class="ml-2">ICC MENS T20 WORLD CUP 2024</h3>
                                                </div>
                                                <span><a href="">India vs Australia, </a> 51st Match, Super 8 Group 1</span><br>
                                                <p>Today  •  6:00 AM at North Sound, Antigua, Sir Vivian Richards Stadium</p>
                                            </div>
                                            <div class="panel-box col-lg-4 ml-2 mb-0 bg-light">
                                                <div class="titles no-margin" style="border-left: 5px solid #01d099">
                                                    <div class="m-2 p-2"> 
                                                        <p><a href="">Read Preview</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <ul class="navbar">
                                                    <li><a href="#">Match Facts</a></li>
                                                    <li><a href="#">News</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="post-item p-2" >
                                            <div class=" col-lg-12" >
                                                <div class="bg-light">
                                                    <h3 class="ml-2">COUNTY CHAMPIONSHIP DIVISION TWO 2024</h3>
                                                </div>
                                                <span><a href="">Northamptonshire vs Glamorgan,  </a> 29th Match</span><br>
                                                <p>Jun 23 - Jun 26  •  3:30 PM at Cardiff, Sophia Gardens</p>
                                            </div>
                                            <div class="panel-box col-lg-4 ml-2 mb-0 bg-light">
                                                <div class="titles no-margin" style="border-left: 5px solid #01d099">
                                                    <div class="m-2 p-2"> 
                                                        <p><a href="">Read Preview</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <ul class="navbar">
                                                    <li><a href="#">Match Facts</a></li>
                                                    <li><a href="#">News</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end domestic --}}

                                    {{-- league --}}
                                    <div class="tab-pane m-2" id="league2">
                                        <div class="post-item p-2" >
                                            <div class=" col-lg-12" >
                                                <div class="bg-light ml-2">
                                                    <h3 class="">COUNTY CHAMPIONSHIP DIVISION TWO 2024</h3>
                                                </div>
                                                <span><a href="">Northamptonshire vs Glamorgan,  </a> 29th Match</span><br>
                                                <p>Jun 23 - Jun 26  •  3:30 PM at Cardiff, Sophia Gardens</p>
                                            </div>
                                            <div class="panel-box col-lg-4 ml-2 mb-0 bg-light">
                                                <div class="titles no-margin" style="border-left: 5px solid #01d099">
                                                <div class="m-2 p-2">  
                                                    <p><a href="">Read Preview</a></p>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <ul class="navbar">
                                                    <li><a href="#">Match Facts</a></li>
                                                    <li><a href="#">News</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="post-item p-2" >
                                            <div class=" col-lg-12" >
                                                <div class="bg-light">
                                                    <h3 class="ml-2">ICC MENS T20 WORLD CUP 2024</h3>
                                                </div>
                                                <span><a href="">India vs Australia, </a> 51st Match, Super 8 Group 1</span><br>
                                                <p>Today  •  6:00 AM at North Sound, Antigua, Sir Vivian Richards Stadium</p>
                                            </div>
                                            <div class="panel-box col-lg-4 ml-2 mb-0 bg-light">
                                                <div class="titles no-margin" style="border-left: 5px solid #01d099">
                                                <div class="m-2 p-2"> 
                                                    <p><a href="">Read Preview</a></p>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <ul class="navbar">
                                                    <li><a href="#">Match Facts</a></li>
                                                    <li><a href="#">News</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- end league --}}

                                    {{-- women --}}
                                    <div class="tab-pane m-2" id="women2">
                                        <div class="post-item p-2" >
                                            <div class=" col-lg-12" >
                                                <div class="bg-light">
                                                    <h3 class="ml-2">ICC MENS T20 WORLD CUP 2024</h3>
                                                </div>
                                                <span><a href="">India vs Australia, </a> 51st Match, Super 8 Group 1</span><br>
                                                <p>Today  •  6:00 AM at North Sound, Antigua, Sir Vivian Richards Stadium</p>
                                            </div>
                                            <div class="panel-box col-lg-4 ml-2 mb-0 bg-light">
                                                <div class="titles no-margin" style="border-left: 5px solid #01d099">
                                                <div class="m-2 p-2"> 
                                                    <p><a href="">Read Preview</a></p>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <ul class="navbar">
                                                    <li><a href="#">Match Facts</a></li>
                                                    <li><a href="#">News</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end women --}}
                                </div>
                            </div>
                        </div>
                        <!-- End Upcoming matches -->

                       
                    </div>
                    <!-- Content Tabs -->
                </div>

               

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                var target = $(e.target).attr("href"); // activated tab
                $('.show').removeClass('active');
                $(target).addClass('active');
            });
        });
    </script>
@endsection
