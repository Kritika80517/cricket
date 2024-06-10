@extends('frontend.layouts.master')
@section('page-title', 'Series')
@section('website-content')
<style>
    .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover{
        border-top: none !important;
        border-left: none !important;
        border-right: none !important;
    }
    .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
        border-bottom-color: #000000;
        border-bottom-width: 2px;
    }
    h1{
        margin: 10px 0 !important;
        padding: 0;
    }
</style>
<div class="inner-page-banner">
    <div class="container">
    </div>
</div>
<div class="inner-information-text">
    <div class="container">
        <h3>Series</h3>
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Series</li>
        </ul>
    </div>
</div>

<section>
    <div class="container">
        <div class="card">
            <div class="card-heading">
                <div class="demo">
                    <div role="tabpanel">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs  nav-tabs-dropdown" role="tablist">
                            <li role="presentation" class="active"><a href="#current_matches" aria-controls="current_matches" role="tab" data-toggle="tab">Current Matches</a></li>
                            <li role="presentation"><a href="#current_and_future" aria-controls="current_and_future" role="tab" data-toggle="tab">Current & Future Series</a></li>
                            <li role="presentation"><a href="#matches_by_day" aria-controls="matches_by_day" role="tab" data-toggle="tab">Matches By Day</a></li>
                            <li role="presentation"><a href="#teams" aria-controls="teams" role="tab" data-toggle="tab">Teams</a></li>
                            <li role="presentation" class=""><a href="#series_archive" aria-controls="series_archive" role="tab" data-toggle="tab">Series Archive</a></li>
                        </ul>


                    </div>
                </div>



            </div>
            <div class="card-body">
                <!-- Tab panes -->
                <div class="tab-content">
                    {{-- Current matches Main Tab --}}
                    <div role="tabpanel" class="tab-pane active" id="current_matches">
                        <h1 class="text-left">Live Cricket Score</h1>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs  nav-tabs-dropdown" role="tablist">
                            <li role="presentation" class="active"><a href="#current_matches_live" aria-controls="current_matches_live" role="tab" data-toggle="tab">Live</a></li>
                            <li role="presentation"><a href="#current_and_future" aria-controls="current_and_future" role="tab" data-toggle="tab">Recent</a></li>
                            <li role="presentation"><a href="#matches_by_day" aria-controls="matches_by_day" role="tab" data-toggle="tab">upcoming</a></li>
                        </ul>
                        <div role="tabpanel" class="tab-pane" id="current_matches_live">
dfdf
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="current_and_future">

                    </div>
                    <div role="tabpanel" class="tab-pane" id="matches_by_day">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae doloremque adipisci perferendis iste neque totam autem quam ratione odio culpa ex consectetur sit, facere sed, asperiores, deleniti dicta magnam ad.</div>
                    <div role="tabpanel" class="tab-pane" id="teams">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae doloremque adipisci perferendis iste neque totam autem quam ratione odio culpa ex consectetur sit, facere sed, asperiores, deleniti dicta magnam ad.</div>
                    <div role="tabpanel" class="tab-pane" id="series_archive">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae doloremque adipisci perferendis iste neque totam autem quam ratione odio culpa ex consectetur sit, facere sed, asperiores, deleniti dicta magnam ad.</div>
                   
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
