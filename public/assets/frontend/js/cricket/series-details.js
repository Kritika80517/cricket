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
                $('#series-home-news .loader-div').show();
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
                        if(index <= 5){
                            $('#series-home-news').append(storyHtml);
                        }
                    }
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching news data:', error);
                $('#series-news .loader-div').hide();
                $('#series-home-news .loader-div').hide();

            },complete: function() {
                $('#series-news .loader-div').hide();
                $('#series-home-news .loader-div').hide();

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
                            <a data-value="${squad.squadId}" class="pl-2 sqadFilter btn bg-none">${squad.squadType}</a>
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
            document.querySelectorAll('.sqadFilter').forEach(filter => {
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
                                <h5><a href="#">${player.name}</a></h5>
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
                                        <div class="player-name"> <a href="/players/${player.id}"> ${player.name}${player.captain ? ' (Captain)' : ''}</a></div>
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

    function fetchStatsFilters() {
        $.ajax({
            url: '/series/stats/filters/' + fetchIdFromUrl(),
            type: 'GET',
            dataType: 'json',
            beforeSend: function() {
                $('#series-stats-filters .loader-div').show();
            },
            success: function(response) {
                const $statsFilters = $('#series-stats-filters');
                $statsFilters.empty(); // Clear existing content
    
                // Separate filters by category
                const categories = {};
                $.each(response.types, function(index, type) {
                    if (type.category) {
                        if (!categories[type.category]) {
                            categories[type.category] = [];
                        }
                        categories[type.category].push(type);
                    }
                });
    
                // Create HTML structure for each category
                $.each(categories, function(category, filters) {
                    const $panelBox = $('<div>', { class: 'panel-box' });
    
                    const $titleDiv = $('<div>', { class: 'titles no-margin' });
                    $titleDiv.html(`<h4><i class="fa fa-soccer-ball-o"></i>${category}</h4>`);
    
                    const $infoPanel = $('<div>', { class: 'info-panel p-0' });
    
                    const $listPanel = $('<ul>', { class: 'list-panel', id: `${category}-list` });
    
                    $.each(filters, function(index, filter) {
                        const $listItem = $('<li>', { class: 'no-margin stateFiltersActive' });
    
                        const $filterLink = $('<a>', {
                            class: 'pl-2 stateFilter btn bg-none',
                            'data-value': filter.value,
                            text: filter.header
                        });
    
                        $listItem.append($filterLink);
                        $listPanel.append($listItem);
                    });
    
                    $infoPanel.append($listPanel);
                    $panelBox.append($titleDiv).append($infoPanel);
                    $statsFilters.append($panelBox);
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching stats data:', error);
                $('#series-stats-filters .loader-div').hide();
            },
            complete: function() {
                $('#series-stats-filters .loader-div').hide();
            }
        });
    }
    

    function fetchStatsData(filterValue) {
        $.ajax({
            url: '/series/stats/data/' + fetchIdFromUrl(),
            type: 'GET',
            dataType: 'json',
            data: { filter: filterValue },
            beforeSend: function() {
                $('#team-stats-data').html('<tr><td colspan="8">Loading...</td></tr>');
            },
            success: function(response) {
                console.log(response);
                const statsData = response.odiStatsList.values;
                const $teamStatsData = $('#team-stats-data');
                $teamStatsData.empty(); // Clear existing content

                $.each(statsData, function(index, player) {
                    const playerData = player.values;
                    const $row = $('<tr>');

                    // Assuming the order of data is [id, player name, matches, innings, runs, average]
                    $row.append($('<td>').html('<a href="#">' + playerData[1] + '</a>'));
                    $row.append($('<td>').text(playerData[2]));
                    $row.append($('<td>').text(playerData[3]));
                    $row.append($('<td>').text(playerData[4]));
                    $row.append($('<td>').text(playerData[5]));

                    // Adding placeholders for SR, 4s, 6s as they are not in the response
                    $row.append($('<td>').text('-')); // SR
                    $row.append($('<td>').text('-')); // 4s
                    $row.append($('<td>').text('-')); // 6s

                    $teamStatsData.append($row);
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching stats data:', error);
                $('#team-stats-data').html('<tr><td colspan="8">Error loading data</td></tr>');
            }
        });
    }
    
    // Event listener for filter links
    $(document).on('click', '.stateFilter', function(event) {
        event.preventDefault();
        const filterValue = $(this).data('value');
        fetchStatsData(filterValue);
    });

    
    
    fetchSchedules()
    fetchNews()
    fetchPointtable()
    fetchVenues()
    fetchSquad()
    fetchStatsFilters()
    function initializeFilters() {
        const firstFilterValue = $('.stateFilter').first().data('value');
        if (firstFilterValue) {
            fetchStatsData(firstFilterValue);
        } else {
            setTimeout(initializeFilters, 500);
        }
    }

    // Call initializeFilters after a delay to ensure filters are loaded
    setTimeout(initializeFilters, 2000);
});


function fetchIdFromUrl() {
    const urlParams = new URLSearchParams(window.location.search);
    const seriesId = urlParams.get('seriesId');
    return seriesId;
}