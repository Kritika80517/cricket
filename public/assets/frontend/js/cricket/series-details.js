$(document).ready(function() {

    // Series schedules
    function fetchSchedules(){
        $.ajax({
            url: '/series/schedules/'+fetchIdFromUrl(),
            type: 'GET',
            beforeSend: function() {
                $('#series-schedules .loader-div').show();
            },
            success: function(response) {
                const matchDetails = response.matchDetails;
                let html = '';

                matchDetails.forEach(detail => {
                    if (detail.matchDetailsMap) {
                        const matchGroup = detail.matchDetailsMap;
                        const matches = matchGroup.match;

                        matches.forEach(match => {
                            const matchInfo = match.matchInfo;
                            const startDate = new Date(parseInt(matchInfo.startDate));
                            const formattedDate = startDate.toLocaleDateString('en-US', { month: 'short', day: '2-digit', year: 'numeric' });
                            const formattedTime = startDate.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

                            html += `
                                <tr>
                                    <td><p>${formattedDate}</p></td>
                                    <td>
                                        ${startDate.toLocaleString('en-US', { weekday: 'short' })}${matchInfo.team1.teamName} vs ${matchInfo.team2.teamName}, ${matchInfo.matchDesc}<br>
                                        ${matchInfo.venueInfo.ground}, ${matchInfo.venueInfo.city}<br>
                                        ${matchInfo.status}
                                    </td>
                                    <td>
                                        ${formattedTime}<br>
                                        ${startDate.toLocaleTimeString('en-GB', { hour: '2-digit', minute: '2-digit', timeZoneName: 'short' })} GMT / ${startDate.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', hour12: true })} LOCAL
                                    </td>
                                </tr>
                            `;
                        });
                    }
                });

                $('#series-schedules tbody').html(html);
            },
            error: function(error) {
                console.log('Error fetching schedules:', error);
                $('#series-schedules .loader-div').hide();
                $('#series-schedules tbody').html('<tr><td colspan="3" class="text-center">Failed to fetch schedules.</td></tr>');
            },complete: function() {
                $('#series-schedules .loader-div').hide();
            }
        });
    }

    // Series News
    function fetchNews(){
        
        $.ajax({
            url: '/series/news/'+fetchIdFromUrl(),
            type: 'GET',
            dataType: 'json',
            beforeSend: function() {
                $('#series-news .loader-div').show();
            },
            success: function(response) {
                let storyList = response.storyList;
                storyList.forEach((storyItem, index) => {
                    if (storyItem.story) {
                        let story = storyItem.story;
                        let newsImage = `<img src="https://www.cricbuzz.com/a/img/v1/152x152/i1/c${story.imageId}/cms-img.jpg" alt="${story.hline}" class="img-fluid">`;
                        let newsLink = `<a href="#">${story.hline}</a>`;
                        let newsIntro = `<p>${story.intro}</p>`;
                        let pubTime = new Date(parseInt(story.pubTime)).toDateString();
                
                        // Create a row for each news story
                        let storyHtml = `
                            <div class="post-item">
                                <div class="row">
                                    <div class="col-md-4 col-lg-2">
                                        ${newsImage}
                                    </div>
                                    <div class="col-md-8 col-lg-10 d-flex align-items-center">
                                        <div>
                                            <h4>${newsLink}</h4>
                                            ${newsIntro}
                                            <small>${pubTime}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                        
                        $('#series-news').append(storyHtml);
                    }
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching news data:', error);
                $('#series-news .loader-div').hide();
            },complete: function() {
                $('#series-news .loader-div').hide();
            }
        });
    }

    // Series Point tables
    function fetchPointtable(){
        
        $.ajax({
            url: '/series/point-table/'+fetchIdFromUrl(),
            type: 'GET',
            dataType: 'json',
            beforeSend: function() {
                $('#pointsTableBody .loader-div').show();
            },
            success: function(response) {
                const pointsTableBody = document.getElementById('pointsTableBody');
                pointsTableBody.innerHTML = ''; // Clear existing rows
                
                if(response.pointsTable){
                    response.pointsTable.forEach(group => {
                        group.pointsTableInfo.forEach(team => {
                            console.log(team)
                            const row = `
                                <tr>
                                    <td class="text-left">
                                        <img src="https://static.cricbuzz.com/a/img/v1/24x18/i1/c${team.teamImageId}/${team.teamFullName}.jpg" alt="${team.teamFullName}">
                                        <span>${team.teamFullName}</span>
                                    </td>
                                    <td>${team.matchesPlayed || 0}</td>
                                    <td>${team.matchesWon || 0}</td>
                                    <td>${team.matchesLost || 0}</td>
                                    <td>${team.matchesDrawn || 0}</td>
                                    <td>${team.points || 0}</td>
                                    <td>${team.nrr || 0}</td>
    
                                </tr>
                            `;
                            pointsTableBody.insertAdjacentHTML('beforeend', row);
                        });
                    });
                }else{
                    $('#pointsTableBody .loader-div').hide();
                }
            },
            error: function(xhr, status, error) {
                console.error('Error fetching news data:', error);
                $('#pointsTableBody .loader-div').hide();
            },complete: function() {
                $('#pointsTableBody .loader-div').hide();
            }
        });
    }

    // Series venues
    function fetchVenues(){
        
        $.ajax({
            url: '/series/venues/'+fetchIdFromUrl(),
            type: 'GET',
            dataType: 'json',
            beforeSend: function() {
                $('#series-venues .loader-div').show();
            },
            success: function(response) {
                console.log(response)
                let seriesVenue = response.seriesVenue;
                seriesVenue.forEach((venue, index) => {
                        let venueImage = `<img src="https://www.cricbuzz.com/a/img/v1/152x152/i1/c${venue.imageId}/${venue.ground}.jpg" alt="${venue.ground}" class="img-fluid">`;
                        let venueTitle = `<a href="#">${venue.ground}</a>`;
                        let venueLocation = `<p>${venue.country}</p>`;
                
                        // Create a row for each news story
                        let storyHtml = `
                            <div class="post-item">
                                <div class="row">
                                    <div class="col-md-4 col-lg-2">
                                        ${venueImage}
                                    </div>
                                    <div class="col-md-8 col-lg-10 d-flex align-items-center">
                                        <div>
                                            <h4>${venueTitle}</h4>
                                            ${venueLocation}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                        
                        $('#series-venues').append(storyHtml);
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching news data:', error);
                $('#series-venues .loader-div').hide();
            },complete: function() {
                $('#series-venues .loader-div').hide();
            }
        });
    }

    // Series squad
    function fetchSquad(){
        
        $.ajax({
            url: '/series/sqad/'+fetchIdFromUrl(),
            type: 'GET',
            dataType: 'json',
            beforeSend: function() {
                $('#series-squads .loader-div').show();
            },
            success: function(response) {
                const seriesSquads = document.getElementById('series-squads');
            seriesSquads.innerHTML = ''; // Clear existing content

            let currentPanel = null;
            response.squads.forEach((squad, index) => {
                if (squad.isHeader) {
                    // Create a new panel box for each header
                    if (currentPanel) {
                        seriesSquads.appendChild(currentPanel);
                    }
                    currentPanel = document.createElement('div');
                    currentPanel.className = 'panel-box';

                    const header = `
                        <div class="titles no-margin">
                            <h4><i class="fa fa-soccer-ball-o"></i>${squad.squadType}</h4>
                        </div>
                        <div class="info-panel p-0">
                            <ul class="list-panel">
                            </ul>
                        </div>
                    `;
                    currentPanel.innerHTML = header;
                } else {
                    // Set the first squad ID
                    if (index == 1) {
                        firstSquadId = squad.squadId;
                    }
                    // Create list items for squads that are not headers
                    const listItem = `
                        <li class="no-margin stateFiltersActive">
                            <a data-value="${squad.squadId}" class="pl-2 stateFilter btn bg-none">${squad.squadType}</a>
                        </li>
                    `;
                    currentPanel.querySelector('.list-panel').insertAdjacentHTML('beforeend', listItem);
                }
            });

            // Append the last panel box
            if (currentPanel) {
                seriesSquads.appendChild(currentPanel);
            }

            // Fetch players for the first squad
            if (firstSquadId) {
                fetchSquadPlayers(firstSquadId);
            }

            // Add event listeners to squad filters
            document.querySelectorAll('.stateFilter').forEach(filter => {
                filter.addEventListener('click', function() {
                    const squadId = this.getAttribute('data-value');
                    fetchSquadPlayers(squadId);
                });
            });

            },
            error: function(xhr, status, error) {
                console.error('Error fetching news data:', error);
                $('#series-squads .loader-div').hide();
            },complete: function() {
                $('#series-squads .loader-div').hide();
            }
        });
    }

    // Series squad Players
    function fetchSquadPlayers(sqad_id){
        
        $.ajax({
            url: '/series/'+fetchIdFromUrl()+'/sqads/'+sqad_id,
            type: 'GET',
            dataType: 'json',
            beforeSend: function() {
                $('#series-squads-players .loader-div').show();
            },
            success: function(response) {
                const squadsPlayers = document.getElementById('series-squads-players');
                squadsPlayers.innerHTML = ''; // Clear existing content
    
                let currentPanel = null;
                response.player.forEach(player => {
                    if (player.isHeader) {
                        // Create a new panel box for each header
                        if (currentPanel) {
                            squadsPlayers.appendChild(currentPanel);
                        }
                        currentPanel = document.createElement('div');
                        currentPanel.className = 'panel-box';
    
                        const header = `
                            <div class="titles no-margin">
                                <h5><a href="group-list.html">${player.name}</a></h5>
                            </div>
                            <div class="info-panel p-0">
                                <div class="row">
                                </div>
                            </div>
                        `;
                        currentPanel.innerHTML = header;
                    } else {
                        // Create player items for squads that are not headers
                        const playerItem = `
                            <div class="col-lg-6 col-md-12 mt-4">
                                <div class="player-item">
                                    <img src="https://static.cricbuzz.com/a/img/v1/75x75/i1/c${player.imageId}/${player.name}.jpg" alt="${player.name}">
                                    <div>
                                        <div class="player-name">${player.name}${player.captain ? ' (Captain)' : ''}</div>
                                        <div class="player-role">${player.role}</div>
                                    </div>
                                </div>
                            </div>
                        `;
                        currentPanel.querySelector('.row').insertAdjacentHTML('beforeend', playerItem);
                    }
                });
    
                // Append the last panel box
                if (currentPanel) {
                    squadsPlayers.appendChild(currentPanel);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error fetching news data:', error);
                $('#series-squads-players .loader-div').hide();
            },complete: function() {
                $('#series-squads-players .loader-div').hide();
            }
        });
    }

    fetchSchedules()
    fetchNews()
    fetchPointtable()
    fetchVenues()
    fetchSquad()
    // fetchSquadPlayers()
});


function fetchIdFromUrl() {
    const urlParams = new URLSearchParams(window.location.search);
    const seriesId = urlParams.get('seriesId');
    return seriesId;
}