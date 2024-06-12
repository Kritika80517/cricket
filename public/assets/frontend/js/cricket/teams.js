$(document).ready(function() {
    // Team sectionn
    function fetchTeams(type, containerId) {
        const loaderDiv = $(`#${containerId}`).siblings('.loader-div');
        loaderDiv.show();

        $.ajax({
            url: `/teams/list/${type}`, 
            method: 'GET', 
            success: function(data) {
                const teams = data.list.filter(team => team.teamId && team.teamName && team.imageId); // Filter out invalid entries
                if (teams.length > 0) {
                    $(`#${containerId}`).empty();
                    teams.forEach(team => {
                        $(`#${containerId}`).append(`
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="item-team">
                                    <div class="head-team">
                                        <img class="w-100" src="https://static.cricbuzz.com/a/img/v1/72x54/i1/c${team.imageId}/${team.teamName.toLowerCase()}.jpg" alt="${team.teamName}">
                                        <div class="overlay"><a href="/teams/${team.teamId}/info?teamId=${team.teamId}&teamName=${team.teamName}">+</a></div>
                                    </div>
                                    <div class="info-team">
                                        <h4>${team.teamName}</h4>
                                        <small>${team.teamSName}</small>
                                    </div>
                                    <a href="/teams/${team.teamId}/info?teamId=${team.teamId}&teamName=${team.teamName}" class="btn">Details <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        `);
                    });
                    
                } else {
                    $(`#${containerId}`).html('<p class="text-center">No teams found.</p>');
                }
            }, error: function(error) {
                console.log('Error fetching teams:', error);
                $(`#${containerId}`).html('<p class="text-center">Failed to fetch teams.</p>');
            }, complete: function() {
                loaderDiv.hide();
            }
        });
    }

    // Fetch teams on page load
    fetchTeams('international', 'international-team');
    fetchTeams('domestic', 'domestic-team');
    fetchTeams('league', 'league-team');
    fetchTeams('women', 'women-team');


});