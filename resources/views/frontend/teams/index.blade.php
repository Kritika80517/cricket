@extends('frontend.layouts.master')
@section('frontend-content')
<section class="content-info">

    <div class="section-title" style="background:url(assets/frontend/img/slide/1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Teams List</h1>
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
    <!-- Nav Filters -->
    <div class="portfolioFilter align-items: center">
        <div class="container" style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap;">
            {{-- <h5><i class="fa fa-filter" aria-hidden="true"></i>Filter By:</h5> --}}
            <a href="#" data-filter="*" class="current">Show All</a>
            <a href="#" data-filter=".international" >International</a>
            <a href="#" data-filter=".domestic">Domestic</a>
            <a href="#" data-filter=".league">league</a>
            <a href="#" data-filter=".women">Women</a>
            {{-- <a href="#" data-filter=".group-e">Group E</a>
            <a href="#" data-filter=".group-f">Group F</a>
            <a href="#" data-filter=".group-g">Group G</a>
            <a href="#" data-filter=".group-h">Group H</a> --}}
        </div>
    </div>
    <!-- End Nav Filters -->

    <div class="container padding-top">
        <div class="row portfolioContainer" style="position: relative; height: 3290.62px;">
            <!-- Item Team international-->
            <div class="col-md-6 col-lg-4 col-xl-3 international" style="position: absolute; left: 0px; top: 0px;">
                <div class="item-team">
                    <div class="head-team">
                        <img src="{{asset('assets/frontend/img/clubs-teams/rusia.jpg')}}" alt="location-team">
                        <div class="overlay"><a href="single-team.html">+</a></div>
                    </div>
                    <div class="info-team">
                        <span class="logo-team">
                            <img src="{{asset('assets/frontend/img/clubs-logos/rusia.png')}}" alt="logo-team">
                        </span>
                        <h4>Rusia</h4>
                        <span class="location-team">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Stadium
                        </span>
                        <span class="group-team">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            Group A
                        </span>
                    </div>
                    <a href="{{url('/teams/info')}}" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
           
            <div class="col-md-6 col-lg-4 col-xl-3 international" style="position: absolute; left: 325px; top: 0px;">
                <div class="item-team">
                    <div class="head-team">
                        <img src="{{asset('assets/frontend/img/clubs-teams/arabia.jpg')}}" alt="location-team">
                        <div class="overlay"><a href="single-team.html">+</a></div>
                    </div>
                    <div class="info-team">
                        <span class="logo-team">
                            <img src="{{asset('assets/frontend/img/clubs-logos/arabia.png')}}" alt="logo-team">
                        </span>
                        <h4>Saudi Arabia</h4>
                        <span class="location-team">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Stadium
                        </span>
                        <span class="group-team">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            Group A
                        </span>
                    </div>
                    <a href="single-team.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 col-xl-3 international" style="position: absolute; left: 650px; top: 0px;">
                <div class="item-team">
                    <div class="head-team">
                        <img src="{{asset('assets/frontend/img/clubs-teams/egypt.jpg')}}" alt="location-team">
                        <div class="overlay"><a href="single-team.html">+</a></div>
                    </div>
                    <div class="info-team">
                        <span class="logo-team">
                            <img src="{{asset('assets/frontend/img/clubs-logos/egy.png')}}" alt="logo-team">
                        </span>
                        <h4>Egypt</h4>
                        <span class="location-team">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Stadium
                        </span>
                        <span class="group-team">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            Group A
                        </span>
                    </div>
                    <a href="single-team.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 col-xl-3 international" style="position: absolute; left: 975px; top: 0px;">
                <div class="item-team">
                    <div class="head-team">
                        <img src="{{asset('assets/frontend/img/clubs-teams/uruguay.jpg')}}" alt="location-team">
                        <div class="overlay"><a href="single-news.html">+</a></div>
                    </div>
                    <div class="info-team">
                        <span class="logo-team">
                            <img src="{{asset('assets/frontend/img/clubs-logos/uru.png')}}" alt="logo-team">
                        </span>
                        <h4>Uruguay</h4>
                        <span class="location-team">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Stadium
                        </span>
                        <span class="group-team">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            Group A
                        </span>
                    </div>
                    <a href="single-team.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <!-- End Item Team international-->

            <!-- Item Team domestic-->
            <div class="col-md-6 col-lg-4 col-xl-3 domestic" style="position: absolute; left: 0px; top: 411px;">
                <div class="item-team">
                    <div class="head-team">
                        <img src="{{asset('assets/frontend/img/clubs-teams/portugal.jpg')}}" alt="location-team">
                        <div class="overlay"><a href="single-team.html">+</a></div>
                    </div>
                    <div class="info-team">
                        <span class="logo-team">
                            <img src="{{asset('assets/frontend/img/clubs-logos/por.png')}}" alt="logo-team">
                        </span>
                        <h4>Portugal</h4>
                        <span class="location-team">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Stadium
                        </span>
                        <span class="group-team">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            Group B
                        </span>
                    </div>
                    <a href="single-team.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 col-xl-3 domestic" style="position: absolute; left: 325px; top: 411px;">
                <div class="item-team">
                    <div class="head-team">
                        <img src="{{asset('assets/frontend/img/clubs-teams/spain.jpg')}}" alt="location-team">
                        <div class="overlay"><a href="single-team.html">+</a></div>
                    </div>
                    <div class="info-team">
                        <span class="logo-team">
                            <img src="{{asset('assets/frontend/img/clubs-logos/esp.png')}}" alt="logo-team">
                        </span>
                        <h4>Spain</h4>
                        <span class="location-team">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Stadium
                        </span>
                        <span class="group-team">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            Group B
                        </span>
                    </div>
                    <a href="single-team.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
           
            <div class="col-md-6 col-lg-4 col-xl-3 domestic" style="position: absolute; left: 650px; top: 411px;">
                <div class="item-team">
                    <div class="head-team">
                        <img src="{{asset('assets/frontend/img/clubs-teams/morocco.jpg')}}" alt="location-team">
                        <div class="overlay"><a href="single-team.html">+</a></div>
                    </div>
                    <div class="info-team">
                        <span class="logo-team">
                            <img src="{{asset('assets/frontend/img/clubs-logos/mar.png')}}" alt="logo-team">
                        </span>
                        <h4>Morocco</h4>
                        <span class="location-team">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Stadium
                        </span>
                        <span class="group-team">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            Group B
                        </span>
                    </div>
                    <a href="single-team.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 col-xl-3 domestic" style="position: absolute; left: 975px; top: 411px;">
                <div class="item-team">
                    <div class="head-team">
                        <img src="{{asset('assets/frontend/img/clubs-teams/iran.jpg')}}" alt="location-team">
                        <div class="overlay"><a href="single-team.html">+</a></div>
                    </div>
                    <div class="info-team">
                        <span class="logo-team">
                            <img src="{{asset('assets/frontend/img/clubs-logos/irn.png')}}" alt="logo-team">
                        </span>
                        <h4>Ir Iran</h4>
                        <span class="location-team">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Stadium
                        </span>
                        <span class="group-team">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            Group B
                        </span>
                    </div>
                    <a href="single-team.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <!-- End Item Team domestic-->

            <!-- Item Team league-->
            <div class="col-md-6 col-lg-4 col-xl-3 league" style="position: absolute; left: 0px; top: 822px;">
                <div class="item-team">
                    <div class="head-team">
                        <img src="{{asset('assets/frontend/img/clubs-teams/france.jpg')}}" alt="location-team">
                        <div class="overlay"><a href="single-team.html">+</a></div>
                    </div>
                    <div class="info-team">
                        <span class="logo-team">
                            <img src="{{asset('assets/frontend/img/clubs-logos/fra.png')}}" alt="logo-team">
                        </span>
                        <h4>France</h4>
                        <span class="location-team">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Stadium
                        </span>
                        <span class="group-team">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            Group C
                        </span>
                    </div>
                    <a href="single-team.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 col-xl-3 league" style="position: absolute; left: 325px; top: 822px;">
                <div class="item-team">
                    <div class="head-team">
                        <img src="{{asset('assets/frontend/img/clubs-teams/australia.jpg')}}" alt="location-team">
                        <div class="overlay"><a href="single-team.html">+</a></div>
                    </div>
                    <div class="info-team">
                        <span class="logo-team">
                            <img src="{{asset('assets/frontend/img/clubs-logos/aus.png')}}" alt="logo-team">
                        </span>
                        <h4>Australia</h4>
                        <span class="location-team">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Stadium
                        </span>
                        <span class="group-team">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            Group C
                        </span>
                    </div>
                    <a href="single-team.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 col-xl-3 league" style="position: absolute; left: 650px; top: 822px;">
                <div class="item-team">
                    <div class="head-team">
                        <img src="{{asset('assets/frontend/img/clubs-teams/peru.jpeg')}}" alt="location-team">
                        <div class="overlay"><a href="single-team.html">+</a></div>
                    </div>
                    <div class="info-team">
                        <span class="logo-team">
                            <img src="{{asset('assets/frontend/img/clubs-logos/per.png')}}" alt="logo-team">
                        </span>
                        <h4>Peru</h4>
                        <span class="location-team">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Stadium
                        </span>
                        <span class="group-team">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            Group C
                        </span>
                    </div>
                    <a href="single-team.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 col-xl-3 league" style="position: absolute; left: 975px; top: 822px;">
                <div class="item-team">
                    <div class="head-team">
                        <img src="{{asset('assets/frontend/img/clubs-teams/denmark.jpg')}}" alt="location-team">
                        <div class="overlay"><a href="single-news.html">+</a></div>
                    </div>
                    <div class="info-team">
                        <span class="logo-team">
                            <img src="{{asset('assets/frontend/img/clubs-logos/den.png')}}" alt="logo-team">
                        </span>
                        <h4>Denmark</h4>
                        <span class="location-team">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Stadium
                        </span>
                        <span class="group-team">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            Group C
                        </span>
                    </div>
                    <a href="single-team.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <!-- End Item Team league-->

            <!-- Item Team Women-->
            <div class="col-md-6 col-lg-4 col-xl-3 women" style="position: absolute; left: 0px; top: 1233px;">
                <div class="item-team">
                    <div class="head-team">
                        <img src="{{asset('assets/frontend/img/clubs-teams/argentina.jpg')}}" alt="location-team">
                        <div class="overlay"><a href="single-team.html">+</a></div>
                    </div>
                    <div class="info-team">
                        <span class="logo-team">
                            <img src="{{asset('assets/frontend/img/clubs-logos/arg.png')}}" alt="logo-team">
                        </span>
                        <h4>Argentina</h4>
                        <span class="location-team">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Stadium
                        </span>
                        <span class="group-team">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            Group D
                        </span>
                    </div>
                    <a href="single-team.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
           
            <div class="col-md-6 col-lg-4 col-xl-3 women" style="position: absolute; left: 325px; top: 1233px;">
                <div class="item-team">
                    <div class="head-team">
                        <img src="{{asset('assets/frontend/img/clubs-teams/iceland.jpg')}}" alt="location-team">
                        <div class="overlay"><a href="single-team.html">+</a></div>
                    </div>
                    <div class="info-team">
                        <span class="logo-team">
                            <img src="{{asset('assets/frontend/img/clubs-logos/isl.png')}}" alt="logo-team">
                        </span>
                        <h4>Iceland</h4>
                        <span class="location-team">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Stadium
                        </span>
                        <span class="group-team">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            Group D
                        </span>
                    </div>
                    <a href="single-team.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
           
            <div class="col-md-6 col-lg-4 col-xl-3 women" style="position: absolute; left: 650px; top: 1233px;">
                <div class="item-team">
                    <div class="head-team">
                        <img src="{{asset('assets/frontend/img/clubs-teams/croatia.jpg')}}" alt="location-team">
                        <div class="overlay"><a href="single-team.html">+</a></div>
                    </div>
                    <div class="info-team">
                        <span class="logo-team">
                            <img src="{{asset('assets/frontend/img/clubs-logos/cro.png')}}" alt="logo-team">
                        </span>
                        <h4>Croatia</h4>
                        <span class="location-team">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Stadium
                        </span>
                        <span class="group-team">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            Group D
                        </span>
                    </div>
                    <a href="single-team.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
           
            <div class="col-md-6 col-lg-4 col-xl-3 women" style="position: absolute; left: 975px; top: 1233px;">
                <div class="item-team">
                    <div class="head-team">
                        <img src="{{asset('assets/frontend/img/clubs-teams/nigeria.jpg')}}" alt="location-team">
                        <div class="overlay"><a href="single-team.html">+</a></div>
                    </div>
                    <div class="info-team">
                        <span class="logo-team">
                            <img src="{{asset('assets/frontend/img/clubs-logos/nga.png')}}" alt="logo-team">
                        </span>
                        <h4>Nigeria</h4>
                        <span class="location-team">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Stadium
                        </span>
                        <span class="group-team">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            Group D
                        </span>
                    </div>
                    <a href="single-team.html" class="btn">Team Profile <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <!-- End Item Team women-->
           
        </div>
    </div>

    
</section>
 
@endsection