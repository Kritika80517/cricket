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


    <div class="container padding-top">
        <div class="row d-flex justify-content-center">
            <ul class="nav nav-tabs" id="myTab">
                <li class="" aria-expanded="false"><a href="#international" data-toggle="tab" class="active" aria-expanded="true">International</a></li>
                <li><a href="#domestic" data-toggle="tab" class="" aria-expanded="false">Domestic</a></li>
                <li><a href="#league" data-toggle="tab" class="" aria-expanded="false">League</a></li>
                <li><a href="#women" data-toggle="tab" class="" aria-expanded="false">Women</a></li>
             </ul>
        </div>
        
        <div class="tab-content" style="margin-bottom: 60px;">

            <div style="min-height: 200px; position:relative;" class="tab-pane active" id="international" aria-expanded="true">
                <div class="loader-div">
                    <div class="loader"></div>
                </div>
                <div  class="row" id="international-team">
                    
                </div>
            </div>

            <div style="min-height: 200px; position:relative;" class="tab-pane" id="domestic" aria-expanded="true">
                <div class="loader-div">
                    <div class="loader"></div>
                </div>
                <div class="row" id="domestic-team">
                    
                </div>
            </div>

            <div style="min-height: 200px; position:relative;" class="tab-pane" id="league" aria-expanded="true">
                <div class="loader-div">
                    <div class="loader"></div>
                </div>
                <div class="row" id="league-team">
                   
                </div>
            </div>

            <div style="min-height: 200px; position:relative;" class="tab-pane" id="women" aria-expanded="true">
                <div class="loader-div">
                    <div class="loader"></div>
                </div>
                <div class="row" id="women-team">
                   
                </div>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/frontend/js/cricket/teams.js') }}"></script>
</section>
 
@endsection