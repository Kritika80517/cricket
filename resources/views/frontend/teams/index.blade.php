@extends('frontend.layouts.master')
@section('page-title', 'Teams')
@section('website-content')

<style>
   .team-container {
       position: relative;
   }

   .loader-container {
       position: absolute;
       width: 100%;
       height: 100%;
       display: flex;
       align-items: center;
       justify-content: center;
       padding: 50px 0;
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
    <div class="container">
      
        <div class="row" id="teams-container">
         <h2 style="padding-bottom: 30px;" class="m-4">International Teams</h2>
         <div class="team-container">
            <div class="loader-container m-4">
               <div class="loader">Loading...</div>
            </div>
             <div class="row" id="international-teams-container"></div>
         </div>
         
         <h2 style="padding-bottom: 30px;" class="m-4">Domestic Teams</h2>
         <div class="team-container">
            <div class="loader-container m-4">
               <div class="loader">Loading...</div>
            </div>
             <div class="row" id="domestic-teams-container"></div>
         </div>
         
         <h2 style="padding-bottom: 30px;" class="m-4">League Teams</h2>
         <div class="team-container">
            <div class="loader-container m-4">
               <div class="loader">Loading...</div>
            </div>
             <div class="row" id="league-teams-container"></div>
         </div>
         
         <h2 style="padding-bottom: 30px;" class="m-4">Women Teams</h2>
         <div class="team-container">
            <div class="loader-container m-4">
               <div class="loader">Loading...</div>
            </div>
             <div class="row" id="women-teams-container"></div>
         </div>

        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
         function fetchTeams(type, containerId) {
            const loader = $(`#${containerId}`).siblings('.loader-container').find('.loader');
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
                                          <h4>${team.teamName}</h4>
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
               },complete: function() {
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
