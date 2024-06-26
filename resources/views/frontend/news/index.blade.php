@extends('frontend.layouts.master')
@section('frontend-content')
    <div class="section-title" style="background:url(assets/frontend/img/slide/1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>News</h1>
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

        <div class="container paddings-mini">
            <div class="row">

                <!-- Sidebars -->
                <aside class="col-lg-3">
                    <!-- Widget Categories-->
                    <div class="panel-box">
                        <div class="titles no-margin">
                            <h4>Categories</h4>
                        </div>
                        <div class="info-panel">
                            <ul class="list" id="news-category-list">
                               
                            </ul>
                        </div>
                    </div>
                    <!-- End Widget Categories-->
                </aside>
                <!-- End Sidebars -->


                <div class="col-lg-9">
                    <!-- Content Text-->
                    <div class="panel-box pb-3">
                        <div class="titles">
                            <h4>Recent News</h4>
                        </div>

                        <!-- Post Item -->
                        <div style="min-height: 500px;" class="post-item">
                            <div class="row">
                                <div class="" id="news-container">
                                    <div class="loader-div">
                                        <div class="loader"></div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        <!-- End Post Item -->
                    </div>
                    <!-- End Content Text-->
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/frontend/js/cricket/news.js') }}"></script>
    
    </section>
@endsection
