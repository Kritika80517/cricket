@extends('frontend.layouts.master')
@section('page-title', 'Teams')
@section('website-content')

<style>
    .team-container {
        position: relative;
    }

    .center-loader {
        display: flex !important;
        justify-content: center;
    }

    .loader {
        background: conic-gradient(#222222 0%, #dadada 100%);
        height: 5.5rem;
        width: 5.5rem;
        border-radius: 50%;
        animation: loading 1.75s ease-in-out infinite;
        display: none;
    }

    .loader::before {
        content: "";
        position: absolute;
        translate: -50% -50%;
        top: 50%;
        left: 50%;
        background: #fff;
        height: 4rem;
        width: 4rem;
        border-radius: 50%;
    }

    @keyframes loading {
        0% {
            rotate: 0deg;
        }

        100% {
            rotate: 360deg;
        }
    }

    .card {
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        transition: .5s ease-in-out;
        border-radius: 4px;
    }
    .card img{
        border-radius: 8px !important;
        padding: 10px;
    }
    .card:hover {
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }

    .nav {
        border: none !important;
        display: flex !important;
        justify-content: center !important;
        margin-bottom: 20px;
    }

    .nav li a {
        color: #000;
    }

    .nav li a:hover {
        color: #000 !important;
    }

    .nav-pills>li {
        width: auto !important;
    }
    .team-name{
        padding: 18px 0 !important;
        color: #000;
    }
    .team .card {
     float: left;
     width: 100%;
     border: solid #ccc 1px;
     margin-bottom: 20px;
     padding-bottom: 15px;
}

</style>

<div class="inner-page-banner">
    <div class="container">
    </div>
</div>
<div class="inner-information-text">
    <div class="container">
        <h3>Teams</h3>
        <ul class="breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active">Teams</li>
        </ul>
    </div>
</div>

<section id="contant" class="contant main-heading team">
    <div id="exTab1" class="container">
        <ul class="nav nav-pills border-0">
            <li class="active">
                <a class="btn btn-outlinep-primary" href="#1a" data-toggle="tab">International</a>
            </li>
            <li><a class="btn" href="#2a" data-toggle="tab">Domestic</a>
            </li>
            <li><a class="btn" href="#3a" data-toggle="tab">League</a>
            </li>
            <li><a class="btn" href="#4a" data-toggle="tab">Women</a>
            </li>
        </ul>

        <div class="tab-content clearfix">
            <div class="tab-pane active" id="1a">
                <div class="center-loader">
                    <div class="loader"></div>
                </div>
                <div class="row" id="international-teams-container"></div>
            </div>
            <div class="tab-pane" id="2a">
                <div class="row" id="domestic-teams-container"></div>
            </div>
            <div class="tab-pane" id="3a">
                <div class="row" id="league-teams-container"></div>
            </div>
            <div class="tab-pane" id="4a">
                <div class="row" id="women-teams-container"></div>
            </div>
        </div>
    </div>

</section>

<script>
    $(document).ready(function() {
        function fetchTeams(type, containerId) {
            const loader = $(`#${containerId}`).siblings('.center-loader').find('.loader');
            loader.show();

            $.ajax({
                url: `/teams-info/${type}`, 
                method: 'GET', 
                success: function(data) {
                    const teams = data.list.filter(team => team.teamId && team.teamName && team.imageId); // Filter out invalid entries
                    if (teams.length > 0) {
                        $(`#${containerId}`).empty();
                        teams.forEach(team => {
                            $(`#${containerId}`).append(`
                              <div class="col-md-3 column">
                                 <div class="card">
                                       <img class="img-responsive" src="https://static.cricbuzz.com/a/img/v1/72x54/i1/c${team.imageId}/${team.teamName.toLowerCase()}.jpg" alt="${team.teamName}" style="width:100%">
                                       <div class="">
                                          <strong class="team-name">${team.teamName}</strong>
                                          <p class="title">${team.teamSName}</p>
                                          <a href="{{url('teams/')}}/${team.teamId}" class="center" style="margin-top: 10px;"><button class="button">Details</button></a>
                                       </div>
                                 </div>
                              </div>
                           `);
                        });
                    } else {
                        $(`#${containerId}`).html('<p>No teams found.</p>');
                    }
                }, error: function(error) {
                    console.log('Error fetching teams:', error);
                    $(`#${containerId}`).html('<p>Failed to fetch teams.</p>');
                }, complete: function() {
                    loader.hide();
                }
            });
        }

        // Fetch teams on page load
        fetchTeams('international', 'international-teams-container');
        fetchTeams('domestic', 'domestic-teams-container');
        fetchTeams('league', 'league-teams-container');
        fetchTeams('women', 'women-teams-container');

    });

</script>

@endsection
