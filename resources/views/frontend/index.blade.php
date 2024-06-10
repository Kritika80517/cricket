@extends('frontend.layouts.master')
@section('frontend-content')
    <!-- section-hero-posts-->
    <div class="hero-header">
        <!-- Hero Slider-->
        <div id="hero-slider" class="hero-slider">
            <!-- Item Slide-->
            <div class="item-slider" style="background:url({{asset('assets/frontend/img/slide/3.jpg')}});">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-lg-7">
                            <div class="info-slider">
                                <h1>Group Stage Breakdown</h1>
                                <p>While familiar with fellow European nation France, Hareide admits that South American side Peru.</p>
                                <a href="#" class="btn-iw outline">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Item Slide-->
            <!-- Item Slide-->
            <div class="item-slider" style="background:url({{asset('assets/frontend/img/slide/2.jpg')}});">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-lg-7">
                            <div class="info-slider">
                                <h1>World Cup rivalries reprised</h1>
                                <p>The outdoor exhibition on Manezhnaya Square comprises 11 figures that symbolise the main sites of interest.</p>
                                <a href="#" class="btn-iw outline">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Item Slide-->
            <!-- Item Slide-->
            <div class="item-slider" style="background:url({{asset('assets/frontend/img/slide/1.jpg')}});">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-lg-7">
                            <div class="info-slider">
                                <h1>Group Stage Breakdown</h1>
                                <p>While familiar with fellow European nation France, Hareide admits that South American side Peru.</p>
                                <a href="#" class="btn-iw outline">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Item Slide-->
        </div>
        <!-- End Hero Slider-->
    </div>
    <!-- End section-hero-posts-->
    <!-- Section Area - Content Central -->
    <section class="content-info">
        <!-- White Section -->
        <div class="white-section paddings">
            <i class="fa fa-soccer-ball-o right icon-big"></i>
            <div class="container">
                <div class="row next-match">
                    <div class="col-lg-12">
                        <p class="title-counter">
                            <i class="fa fa-clock-o"></i>
                            Countdown Till Start
                        </p>
                        <div id="event-one" class="counter"></div>
                    </div>
                    <div class="col-lg-5">
                        <div class="team">
                        <a href="../../sportscup/run/single-team.html">
                                Colombia
                                <img src="../../sportscup/run/img/clubs-logos/colombia.png" alt="club-logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="vs-match">
                            VS
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="team right">
                            <a href="../../sportscup/run/single-team.html">
                                <img src="../../sportscup/run/img/clubs-logos/arg.png" alt="club-logo">
                                Argentina
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <ul class="date-match">
                            <li><i class="fa fa-calendar"></i>14 June, 2018</li>
                            <li><i class="fa fa-clock-o"></i>Kick-of, 12:00 PM</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End White Section -->
        <!-- Parallax Section - Players -->
        <div class="parallax-section parallax-total" style="background:url(../../sportscup/run/img/slide/1.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="text-center padding-bottom">
                            <h2>We have earned the trust of <span class="text-resalt">25,869</span> Club Members.</h2>
                            <p>Duis non lorem porta,  eros sit amet, tempor sem. semper a tempus et.</p>
                        </div>
                    </div>
                    <!-- Item Player -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="item-player">
                            <div class="head-player">
                                <img src="../../sportscup/run/img/players/1.jpg" alt="location-team">
                                <div class="overlay"><a href="../../sportscup/run/single-player.html">+</a></div>
                            </div>
                            <div class="info-player">
                                <span class="number-player">
                                    13
                                </span>
                                <h4>
                                    Cristiano Ronaldo
                                    <span>Forward</span>
                                </h4>
                                <ul class="no-margin">
                                    <li>
                                        <strong>NATIONALITY</strong> <span><img src="../../sportscup/run/img/clubs-logos/por.png" alt=""> Portugal </span
                                    </li>
                                </ul>
                            </div>
                            <a href="../../sportscup/run/single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!-- End Item Player -->
                    <!-- Item Player -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="item-player">
                            <div class="head-player">
                                <img src="../../sportscup/run/img/players/2.jpg" alt="location-team">
                                <div class="overlay"><a href="../../sportscup/run/single-player.html">+</a></div>
                            </div>
                            <div class="info-player">
                                <span class="number-player">
                                    10
                                </span>
                                <h4>
                                    Lionel Messi
                                    <span>Defender</span>
                                </h4>
                                <ul class="no-margin">
                                    <li>
                                        <strong>NATIONALITY</strong> <span><img src="../../sportscup/run/img/clubs-logos/arg.png" alt=""> Argentina </span
                                    </li>
                                </ul>
                            </div>
                            <a href="../../sportscup/run/single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!-- End Item Player -->
                    <!-- Item Player -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="item-player">
                            <div class="head-player">
                                <img src="../../sportscup/run/img/players/3.jpg" alt="location-team">
                                <div class="overlay"><a href="../../sportscup/run/single-player.html">+</a></div>
                            </div>
                            <div class="info-player">
                                <span class="number-player">
                                    5
                                </span>
                                <h4>
                                    Neymar
                                    <span>Midfielder</span>
                                </h4>
                                <ul class="no-margin">
                                    <li>
                                        <strong>NATIONALITY</strong> <span><img src="../../sportscup/run/img/clubs-logos/bra.png" alt=""> Brazil </span
                                    </li>
                                </ul>
                            </div>
                            <a href="../../sportscup/run/single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!-- End Item Player -->
                    <!-- Item Player -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="item-player">
                            <div class="head-player">
                                <img src="../../sportscup/run/img/players/4.jpg" alt="location-team">
                                <div class="overlay"><a href="../../sportscup/run/single-player.html">+</a></div>
                            </div>
                            <div class="info-player">
                                <span class="number-player">
                                    2
                                </span>
                                <h4>
                                    Luis Suárez
                                    <span>Goalkeeper</span>
                                </h4>
                                <ul class="no-margin">
                                    <li>
                                        <strong>NATIONALITY</strong> <span><img src="../../sportscup/run/img/clubs-logos/uru.png" alt=""> Uruguay </span
                                    </li>
                                </ul>
                            </div>
                            <a href="../../sportscup/run/single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!-- End Item Player -->
                    </div>
            </div>
        </div>
        <!-- End Gray Section - Players -->
        <!-- White Section -->
        <div class="paddings">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <!-- Point Table -->
                        <div class="panel-box">
                            <div class="titles no-margin border-0">
                                <h4>Points Table</h4>
                            </div>
                            <table class="table-striped table-responsive table-hover result-point small">
                                <thead class="point-table-head">
                                    <tr>
                                        <th class="text-left">No</th>
                                        <th class="text-left">TEAM</th>
                                        <th class="text-center">P</th>
                                        <th class="text-center">W</th>
                                        <th class="text-center">D</th>
                                        <th class="text-center">PTS</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td class="text-left number">1 <i class="fa fa-caret-up" aria-hidden="true"></i></td>
                                        <td class="text-left">
                                        <a href="../../sportscup/run/single-team.html">
                                                <img src="../../sportscup/run/img/clubs-logos/colombia.png" alt="Colombia"><span>Colombia</span>
                                            </a>
                                        </td>
                                        <td>38</td>
                                        <td>26</td>
                                        <td>9</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left number">2 <i class="fa fa-caret-up" aria-hidden="true"></i></td>
                                        <td class="text-left">
                                        <a href="../../sportscup/run/single-team.html">
                                                <img src="../../sportscup/run/img/clubs-logos/bra.png" alt="Brazil"><span>Brazil</span>
                                            </a>
                                        </td>
                                        <td>38</td>
                                        <td>24</td>
                                        <td>7</td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left number">3 <i class="fa fa-caret-up" aria-hidden="true"></i></td>
                                        <td class="text-left">
                                        <a href="../../sportscup/run/single-team.html">
                                                <img src="../../sportscup/run/img/clubs-logos/arg.png" alt="Argentina"><span>Argentina</span>
                                            </a>
                                        </td>
                                        <td>38</td>
                                        <td>22</td>
                                        <td>9</td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left number">4<i class="fa fa-caret-down" aria-hidden="true"></i></td>
                                        <td class="text-left">
                                        <a href="../../sportscup/run/single-team.html">
                                                <img src="../../sportscup/run/img/clubs-logos/japan.png" alt="Japan"><span>Japan</span>
                                            </a>
                                        </td>
                                        <td>38</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left number">5  <i class="fa fa-caret-up" aria-hidden="true"></td>
                                        <td class="text-left">
                                        <a href="../../sportscup/run/single-team.html">
                                                <img src="../../sportscup/run/img/clubs-logos/sen.png" alt="Senegal"><span>Senegal</span>
                                            </a>
                                        </td>
                                        <td>38</td>
                                        <td>19</td>
                                        <td>7</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left number">6<i class="fa fa-caret-down" aria-hidden="true"></i></td>
                                        <td class="text-left">
                                        <a href="../../sportscup/run/single-team.html">
                                                <img src="../../sportscup/run/img/clubs-logos/pol.png" alt="Poland"><span>Poland</span>
                                            </a>
                                        </td>
                                        <td>38</td>
                                        <td>18</td>
                                        <td>8</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left number">7<i class="fa fa-caret-down" aria-hidden="true"></i></td>
                                        <td class="text-left">
                                        <a href="../../sportscup/run/single-team.html">
                                                <img  src="../../sportscup/run/img/clubs-logos/rusia.png" alt="Russia"><span>Russia</span>
                                            </a>
                                        </td>
                                        <td>38</td>
                                        <td>18</td>
                                        <td>6</td>
                                        <td>14</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left number">8<i class="fa fa-caret-up" aria-hidden="true"></i></td>
                                        <td class="text-left">
                                        <a href="../../sportscup/run/single-team.html">
                                                <img src="../../sportscup/run/img/clubs-logos/irn.png" alt="Iran"><span>Iran</span>
                                            </a>
                                        </td>
                                        <td>38</td>
                                        <td>12</td>
                                        <td>11</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left number">9 <i class="fa fa-circle" aria-hidden="true"></i></td>
                                        <td class="text-left">
                                            <a href="../../sportscup/run/single-team.html">
                                                <img src="../../sportscup/run/img/clubs-logos/esp.png" alt="Spain"><span>Spain</span>
                                            </a>
                                        </td>
                                        <td>38</td>
                                        <td>26</td>
                                        <td>9</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left number">10<i class="fa fa-circle" aria-hidden="true"></i></td>
                                        <td class="text-left">
                                            <a href="../../sportscup/run/single-team.html">
                                                <img src="../../sportscup/run/img/clubs-logos/fra.png" alt="France">
                                                <span>France</span>
                                            </a>
                                        </td>
                                        <td>38</td>
                                        <td>24</td>
                                        <td>7</td>
                                        <td>7</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="../../sportscup/run/table-point.html" class="btn-iw full no-margin">View Full Table</a>
                        </div>
                        <!-- End Point Table -->
                        <!-- Video presentation -->
                        <div class="panel-box">
                            <div class="titles no-margin">
                                <h4>Presentation</h4>
                            </div>
                            <!-- Locations Video -->
                            <div class="row">
                                <iframe src="https://www.youtube.com/embed/AfOlAUd7u4o" class="video"></iframe>
                                <div class="info-panel">
                                    <h4>Rio de Janeiro</h4>
                                    <p>Lorem ipsum dolor sit amet, sit amet, consectetur adipisicing elit, elit, incididunt ut labore et dolore magna aliqua sit amet, consectetur adipisicing elit,</p>
                                </div>
                            </div>
                            <!-- End Locations Video -->
                        </div>
                        <!-- End Video presentation-->
                    </div>
                    <div class="col lg-8">
                        <!-- Recent Post -->
                        <div class="panel-box">
                            <div class="titles">
                                <h4>Recent News</h4>
                            </div>
                            <!-- Post Item -->
                            <div class="post-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="img-hover">
                                        <img src="../../sportscup/run/img/blog/1.jpg" alt="" class="img-responsive">
                                        <div class="overlay"><a href="../../sportscup/run/single-news.html">+</a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h5><a href="../../sportscup/run/single-news.html">Group Stage Breakdown</a></h5>
                                        <span class="data-info">January 3, 2014  / <i class="fa fa-comments"></i><a href="#">0</a></span>
                                        <p>While familiar with fellow European nation France, Hareide admits that South American side Peru.<a href="../../sportscup/run/single-news.html">Read More [+]</a></p>
                                    </div>
                            </div>
                            </div>
                            <!-- End Post Item -->
                            <!-- Post Item -->
                            <div class="post-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="img-hover">
                                        <img src="../../sportscup/run/img/blog/2.jpg" alt="" class="img-responsive">
                                        <div class="overlay"><a href="../../sportscup/run/single-news.html">+</a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h5><a href="../../sportscup/run/single-news.html">Russia 2018’s potential classic match-ups</a></h5>
                                        <span class="data-info">January 9, 2014  / <i class="fa fa-comments"></i><a href="#">5</a></span>
                                        <p>Our goal is very clear, it didn’t change after the draw. We should qualify for the knockout stage.<a href="../../sportscup/run/single-news.html">Read More [+]</a></p>
                                    </div>
                            </div>
                            </div>
                            <!-- End Post Item -->
                            <!-- Post Item -->
                            <div class="post-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="img-hover">
                                        <img src="../../sportscup/run/img/blog/3.jpg" alt="" class="img-responsive">
                                        <div class="overlay"><a href="../../sportscup/run/single-news.html">+</a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h5><a href="../../sportscup/run/single-news.html">World Cup rivalries reprised</a></h5>
                                        <span class="data-info">January  4, 2014  / <i class="fa fa-comments"></i><a href="#">3</a></span>
                                        <p>The outdoor exhibition on Manezhnaya Square comprises 11 figures that symbolise the main sites of interest.<a href="../../sportscup/run/single-news.html">Read More [+]</a></p>
                                    </div>
                            </div>
                            </div>
                            <!-- End Post Item -->
                            <!-- Post Item -->
                            <div class="post-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="img-hover">
                                        <img src="../../sportscup/run/img/blog/4.jpg" alt="" class="img-responsive">
                                        <div class="overlay"><a href="../../sportscup/run/single-news.html">+</a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h5><a href="../../sportscup/run/single-news.html">All set for your trip to Russia?</a></h5>
                                        <span class="data-info">January 8, 2014  / <i class="fa fa-comments"></i><a href="#">2</a></span>
                                        <p>Colombia play Japan on 19 June at the Mordovia Arena, where the piling and casting operations.<a href="../../sportscup/run/single-news.html">Read More [+]</a></p>
                                    </div>
                            </div>
                            </div>
                            <!-- End Post Item -->
                        </div>
                        <!-- End Recent Post -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End White Section -->
        <!-- End gray Section -->
        <div class="dark-section paddings">
            <div class="container">
                <div class="row">
                    <!-- Top player -->
                    <div class="col-lg-4">
                    <div class="player-ranking">
                            <h5><a href="../../sportscup/run/group-list.html">Top players</a></h5>
                            <div class="info-player">
                                <ul>
                                    <li>
                                    <span class="position">
                                        1
                                    </span>
                                    <a href="../../sportscup/run/single-team.html">
                                            <img src="../../sportscup/run/img/players/1.jpg" alt="">
                                            Cristiano R.
                                        </a>
                                        <span class="points">
                                            90
                                        </span>
                                    </li>
                                    <li>
                                    <span class="position">
                                        2
                                    </span>
                                    <a href="../../sportscup/run/single-team.html">
                                            <img src="../../sportscup/run/img/players/2.jpg" alt="">
                                            Lionel Messi
                                        </a>
                                        <span class="points">
                                            88
                                        </span>
                                    </li>
                                    <li>
                                    <span class="position">
                                        3
                                    </span>
                                    <a href="../../sportscup/run/single-team.html">
                                            <img src="../../sportscup/run/img/players/3.jpg" alt="">
                                            Neymar
                                        </a>
                                        <span class="points">
                                            86
                                        </span>
                                    </li>
                                    <li>
                                    <span class="position">
                                        4
                                    </span>
                                    <a href="../../sportscup/run/single-team.html">
                                            <img src="../../sportscup/run/img/players/4.jpg" alt="">
                                            Luis Suárez
                                        </a>
                                        <span class="points">
                                        80
                                    </span>
                                    </li>
                                    <li>
                                    <span class="position">
                                        5
                                    </span>
                                    <a href="../../sportscup/run/single-team.html">
                                            <img src="../../sportscup/run/img/players/5.jpg" alt="">
                                            Gareth Bale
                                        </a>
                                        <span class="points">
                                            76
                                        </span>
                                    </li>
                                    <li>
                                    <span class="position">
                                        6
                                    </span>
                                    <a href="../../sportscup/run/single-team.html">
                                            <img src="../../sportscup/run/img/players/6.jpg" alt="">
                                            Sergio Agüero
                                        </a>
                                        <span class="points">
                                            74
                                        </span>
                                    </li>
                                    <li>
                                    <span class="position">
                                        7
                                    </span>
                                    <a href="../../sportscup/run/single-team.html">
                                            <img src="../../sportscup/run/img/players/2.jpg" alt="">
                                            Jamez R.
                                        </a>
                                        <span class="points">
                                            70
                                        </span>
                                    </li>
                                    <li>
                                    <span class="position">
                                        8
                                    </span>
                                    <a href="../../sportscup/run/single-team.html">
                                            <img src="../../sportscup/run/img/players/1.jpg" alt="">
                                            Falcao Garcia
                                        </a>
                                        <span class="points">
                                            65
                                        </span>
                                    </li>
                                </ul>
                            </div>
                    </div>
                    </div>
                    <!-- End Top player -->
                    <div class="offset-lg-1 col-lg-7">
                        <iframe class="big-video" src="https://www.youtube.com/embed/hW3hnUoUS0k?rel=0&amp;start=7" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Gray Section -->
        <div class="paddings-mini">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--Sponsors CLub -->
                    <div class="row no-line-height">
                            <div class="col-md-12">
                                <h3 class="clear-title">Match Sponsors</h3>
                            </div>
                        </div>
                        <!--End Sponsors CLub -->
                        <ul class="sponsors-carousel">
                            <li><a href="#"><img src="../../sportscup/run/img/sponsors/1.png" alt=""></a></li>
                            <li><a href="#"><img src="../../sportscup/run/img/sponsors/2.png" alt=""></a></li>
                            <li><a href="#"><img src="../../sportscup/run/img/sponsors/3.png" alt=""></a></li>
                            <li><a href="#"><img src="../../sportscup/run/img/sponsors/4.png" alt=""></a></li>
                            <li><a href="#"><img src="../../sportscup/run/img/sponsors/5.png" alt=""></a></li>
                            <li><a href="#"><img src="../../sportscup/run/img/sponsors/3.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter -->
        <div class="section-newsletter dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h2>Enter your e-mail and <span class="text-resalt">subscribe</span> to our newsletter.</h2>
                            <p>Duis non lorem porta,  eros sit amet, tempor sem. Donec nunc arcu, semper a tempus et, consequat.</p>
                        </div>
                        <form id="newsletterForm" action="../../sportscup/run/php/mailchip/newsletter-subscribe.html">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        <input class="form-control" placeholder="Your Name" name="name"  type="text" required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        <input class="form-control" placeholder="Your  Email" name="email"  type="email" required="required">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit" name="subscribe" >SIGN UP</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div id="result-newsletter"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Newsletter -->
    </section>
    <!-- End Section Area -  Content Central -->
    <div class="instagram-btn light">
        <div class="btn-instagram">
            <i class="fa fa-instagram"></i>
            FOLLOW
            <a href="https://www.instagram.com/fifaworldcup/" target="_blank">&#64;fifaworldcup</a>
        </div>
    </div>
    <div class="content-instagram">
        <div id="instafeed"></div>
    </div>
@endsection