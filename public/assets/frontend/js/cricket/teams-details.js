$(document).ready(function() {

    // Teams schedules
    function fetchSchedules(){
        $.ajax({
            url: '/teams/schedules/?teamId='+fetchIdFromUrl(),
            type: 'GET',
            success: function(response) {
                response.teamMatchesData.forEach(teamMatch => {
                    if (teamMatch.matchDetailsMap) {
                        let matchDetailsMap = teamMatch.matchDetailsMap;
                        var row = null;
                        
                        // Iterate over all keys in matchDetailsMap
                        Object.keys(matchDetailsMap).forEach(key => {
                            if (Array.isArray(matchDetailsMap[key])) {
                                let matches = matchDetailsMap[key];
                                matches.forEach(match => {
                                    let matchInfo = match.matchInfo;
                                    let startDate = new Date(parseInt(matchInfo.startDate));
                                    let endDate = new Date(parseInt(matchInfo.endDate));
    
                                    row += `
                                        <tr>
                                            <td>${startDate.toDateString()}</td>
                                            <td>
                                                <strong>${matchInfo.team1.teamName} vs ${matchInfo.team2.teamName}, ${matchInfo.matchDesc}</strong><br>
                                                ${matchInfo.seriesName}<br>
                                                ${matchInfo.venueInfo.ground}, ${matchInfo.venueInfo.city}<br>
                                                <a href="" >Match starts at ${startDate.toUTCString()}</a>
                                            </td>
                                            <td>
                                                ${startDate.toLocaleTimeString()}<br>
                                                ${endDate.toLocaleTimeString()} GMT / LOCAL
                                            </td>
                                        </tr>
                                    `;

                                    matches += `
                                        <li>
                                            <span class="head">
                                            ${matchInfo.team1.teamSName} Vs ${matchInfo.team2.teamSName} <span class="date">${startDate.toUTCString()}</span>
                                            </span>
        
                                            <div class="goals-result">
                                                <a href="#!">
                                                    <img src="https://www.cricbuzz.com/a/img/v1/152x152/i1/c${matchInfo.team1.imageId}/cms-img.jpg" alt="">
                                                    ${matchInfo.team1.teamSName}
                                                </a>
        
                                                <span class="goals">
                                                     - 
                                                </span>
        
                                                <a href="single-team.html">
                                                    <img src="https://www.cricbuzz.com/a/img/v1/152x152/i1/c${matchInfo.team2.imageId}/cms-img.jpg" alt="">
                                                    ${matchInfo.team2.teamSName}
                                                </a>
                                            </div>
                                        </li>
                                    `;
                                });
                            }
                        });
                        $('#teams-schedules').append(row);
                    }
                });
            }
        });
    }

    // Team result
    function fetchResults(){
        $.ajax({
            url: '/teams/results?teamId='+fetchIdFromUrl(),
            type: 'GET',
            success: function(response) {
                response.teamMatchesData.forEach(teamMatch => {
                    if (teamMatch.matchDetailsMap) {
                        let matchDetailsMap = teamMatch.matchDetailsMap;
                        var row = null;
                        
                        // Iterate over all keys in matchDetailsMap
                        Object.keys(matchDetailsMap).forEach(key => {
                            if (Array.isArray(matchDetailsMap[key])) {
                                var utcDate = null;
                                let matches = matchDetailsMap[key];
                                matches.forEach(match => {
                                    let matchInfo = match.matchInfo;
                                    let matchScore = match.matchScore;
                                    
                                    let startDate = new Date(parseInt(matchInfo.startDate));
                                   
                                    row += `
                                        <tr>
                                            <td>${startDate.toDateString()}</td>
                                            <td>
                                                <strong>${matchInfo.team1.teamName} vs ${matchInfo.team2.teamName}, ${matchInfo.matchDesc}</strong><br>
                                                ${matchInfo.seriesName}<br>
                                                ${matchInfo.venueInfo.ground}, ${matchInfo.venueInfo.city}<br>
                                                <span style="color: rgb(61, 61, 241);">${matchInfo.status}</span><br>
    
                                            </td>
                                           
                                        </tr>
                                    `;
                                    
                                });
                                $('#teams-results').append(row);
                            }
                        });
                    }
                });
            }
        });
    }

    // Team News
    function fetchNews(){
        
        $.ajax({
            url: '/teams/news?teamId='+fetchIdFromUrl(),
            type: 'GET',
            dataType: 'json',
            beforeSend: function() {
                $('#teams-news .loader-div').show();
                $('#top-stories .loader-div').show();
            },
            success: function(response) {
                // Extract the list of news stories from the response
                let storyList = response.storyList;
                var row = null;
                var topStories = [];
                // Iterate over each news story and create HTML elements to display them
                storyList.forEach((storyItem, index) => {
                    if (storyItem.story) {
                        let story = storyItem.story;
                        // Create HTML elements dynamically
                        let newsImage = `<img src="https://www.cricbuzz.com/a/img/v1/152x152/i1/c${story.imageId}/cms-img.jpg" alt="${story.hline}" class="img-fluid">`;
                        let newsLink = `<a href="#">${story.hline}</a>`;
                        let newsIntro = `<p>${story.intro}</p>`;
                        let pubTime = new Date(parseInt(story.pubTime)).toDateString();
                
                        // Create a row for each news story
                        let storyHtml = `
                            <div class="row d-flex align-items-center">
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
                        `;
    
                        if (index <= 5) {
                            topStories += `
                                <div class="row d-flex align-items-center">
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
                            `;
                        }
                        
                        if (index < storyList.length - 1) {
                            storyHtml += `<hr>`;
                        }
                        if (index < 5) {
                            topStories += `<hr>`;
                        }
                        
                        $('#teams-news').append(storyHtml);
                    }
                    $('#top-stories').html(topStories);
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching news data:', error);
            },complete: function() {
                $('#teams-news .loader-div').hide();
                $('#top-stories .loader-div').hide();
            }
        });
    }

    // Team Players
    function fetchPlayers(){
        $.ajax({
            url: '/teams/players?teamId=' + fetchIdFromUrl(),
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                let players = response.player;
                let playerContainer = $('#team-players');
                let sectionTitle = '';
        
                players.forEach(player => {
                    if (!player.id) {
                        // This means it's a section title
                        sectionTitle = player.name;
                    } else {
                        // Create player HTML only if player.id exists
                        let playerHtml = `
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="item-player">
                                <div class="head-player">
                                            
                                </div>
                                <div class="info-player">
                                    <span class="number-player">
                                    <img src="https://static.cricbuzz.com/a/img/v1/75x75/i1/c${player.imageId}/${player.name.toLowerCase().replace(/\s/g, '-')}.jpg" alt="${player.name}">
                                    </span>
                                        <h4>
                                            ${player.name}
                                            <span>${sectionTitle}</span>
                                        </h4>
                                        <ul>
                                            <li>
                                                <strong>Bowling Style:</strong> <span>${player.bowlingStyle ? player.bowlingStyle : 'N/A'}</span>
                                            </li>
                                            <li>
                                                <strong>Batting Style:</strong> <span>${player.battingStyle ? player.battingStyle : 'N/A'}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="single-player.html" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>`;
                        playerContainer.append(playerHtml);
                    }
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching player data:', error);
            }
        });
    }
    
    fetchNews()
    fetchSchedules()
    fetchResults()
    fetchPlayers()
});


function fetchIdFromUrl() {
    const urlParams = new URLSearchParams(window.location.search);
    const teamId = urlParams.get('teamId');
    return teamId;
}