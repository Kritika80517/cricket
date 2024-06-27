@extends('frontend.layouts.master')
@section('frontend-content')
<div class="section-title big-title" style="background:url(assets/frontend/img/locations/3.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1> About Us</h1>
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

<section class="content-info">

    <!-- White Section -->
    <div class="white-section paddings">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="{{asset(getKeyValue('about_image'))}}" alt="">
                </div>
                <div class="col-lg-7">
                    {{-- <h4 class="subtitle">
                       <span>Company Value</span>
                        Who Are You
                    </h4>
                    <p>The top seeds in Groups C and D both have designs on winning their respective sections. But if one of them advances as a group winner and the other as a runner-up, then we will be seeing Lionel Messi facing off against Antoine Griezmann either in Kazan (30 June) or Nizhny Novgorod (1 July), depending on their team’s group placings.</p> --}}
                    {!! getKeyValue('about_us') !!}
                   
                </div>
            </div>

            {{-- <div class="row padding-top">
                <div class="col-md-6 col-xl-3">
                    <div class="item-boxed-service">
                        <h4>Soccer Team </h4>
                        <p>Best Sports Features</p>
                        <a href="#"><i class="fa fa-plus-circle"></i>View More</a>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="item-boxed-service">
                        <h4>Club Features</h4>
                        <p>Best Sports Features</p>
                        <a href="#"><i class="fa fa-plus-circle"></i>View More</a>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="item-boxed-service">
                        <h4>Won cups</h4>
                        <p>Best Sports Features</p>
                        <a href="#"><i class="fa fa-plus-circle"></i>View More</a>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="item-boxed-service">
                        <h4>Technical body</h4>
                        <p>Best Sports Features</p>
                        <a href="#"><i class="fa fa-plus-circle"></i>View More</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- End White Section -->

    <!-- Parallax Section -->
    <div class="parallax-section" style="background:url(assets/frontend/img/slide/3.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <h1 class="big-title">We are a great team</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gray Section -->

    <!-- White Section -->
    <div class="white-section paddings">
        <div class="container">
           <!--Items Club News -->
           <div class="row">
              <div class="col-md-12">
                  <h3 class="clear-title">Latest News</h3>
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
           </div>
           <!--End Items Club News -->
        </div>
    </div>
    <!-- End White Section -->
    
</section>
@endsection