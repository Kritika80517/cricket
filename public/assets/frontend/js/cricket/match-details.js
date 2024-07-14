$(document).ready(function() {

    // match info
    function fetchInfo() {
        $.ajax({
            url: `/matches/details/` + fetchMatchIdFromUrl(),
            method: 'GET',
            success: function(response) {
                console.log(response)
                var matchInfo = response.matchInfo
                var team1 = matchInfo.team1
                var team2 = matchInfo.team2
                updateTeamDisplay(team1, team2);
                fetchTeams(team1, '#team1-players', '#team1-bench', false);
                fetchTeams(team2, '#team2-players', '#team2-bench', true);
            },
            error: function(error) {
                console.log('Error fetching teams:', error);
            },
            complete: function() {}
        });
    }
    
    // match score card
    function fetchScorecard() {
        $.ajax({
            url: `/matches/info/scard/` + fetchMatchIdFromUrl(),
            method: 'GET',
            success: function(response) {
                const scorecardBody = $('#scorecard-bat-body');
                const fallOfWicketsData = response.scoreCard[0].wicketsData;
                const fallOfWicketsData2 = response.scoreCard[1].wicketsData;
                Object.values(response.scoreCard[0].batTeamDetails.batsmenData).forEach(batsman => {
                    scorecardBody.append(`
                        <tr>
                            <td><a href="">${batsman.batName}</a></td>
                            <td>${batsman.outDesc}</td>
                            <td>${batsman.runs}</td>
                            <td>${batsman.balls}</td>
                            <td>${batsman.fours}</td>
                            <td>${batsman.sixes}</td>
                            <td>${batsman.strikeRate.toFixed(2)}</td>
                        </tr>
                    `);
                });

                const scorecardBowlBody = $('#scorecard-bowl-body');
                Object.values(response.scoreCard[0].bowlTeamDetails.bowlersData).forEach(bowler => {
                    scorecardBowlBody.append(`
                        <tr>
                            <td><a href="">${bowler.bowlName}</a></td>
                            <td>${bowler.overs}</td>
                            <td>${bowler.maidens}</td>
                            <td>${bowler.runs}</td>
                            <td>${bowler.wickets}</td>
                            <td>${bowler.no_balls}</td>
                            <td>${bowler.wides}</td>
                            <td>${bowler.economy.toFixed(2)}</td>
                        </tr>
                    `);
                });
                const scorecardFallOfWicketsBody = $('#scorecard-fallofwickets-body');
                let fallOfWicketsText = '';
                Object.values(fallOfWicketsData).forEach(wicket => {
                    fallOfWicketsText += `${wicket.wktRuns}-${wicket.wktNbr} (<a href="">${wicket.batName}</a>, ${wicket.wktOver}), `;
                });
                fallOfWicketsText = fallOfWicketsText.slice(0, -2); // Remove the last comma and space
                scorecardFallOfWicketsBody.append(`
                    <tr>
                        <td>${fallOfWicketsText}</td>
                    </tr>
                `);


                const scorecardBody2 = $('#scorecard-bat-body-2');
                Object.values(response.scoreCard[0].batTeamDetails.batsmenData).forEach(batsman => {
                    scorecardBody2.append(`
                        <tr>
                            <td><a href="">${batsman.batName}</a></td>
                            <td>${batsman.outDesc}</td>
                            <td>${batsman.runs}</td>
                            <td>${batsman.balls}</td>
                            <td>${batsman.fours}</td>
                            <td>${batsman.sixes}</td>
                            <td>${batsman.strikeRate.toFixed(2)}</td>
                        </tr>
                    `);
                });

                const scorecardBowlBody2 = $('#scorecard-bowl-body-2');
                Object.values(response.scoreCard[0].bowlTeamDetails.bowlersData).forEach(bowler => {
                    scorecardBowlBody2.append(`
                        <tr>
                            <td><a href="">${bowler.bowlName}</a></td>
                            <td>${bowler.overs}</td>
                            <td>${bowler.maidens}</td>
                            <td>${bowler.runs}</td>
                            <td>${bowler.wickets}</td>
                            <td>${bowler.no_balls}</td>
                            <td>${bowler.wides}</td>
                            <td>${bowler.economy.toFixed(2)}</td>
                        </tr>
                    `);
                });

                const scorecardFallOfWicketsBody2 = $('#scorecard-fallofwickets-body-2');
                let fallOfWicketsText2 = '';
                Object.values(fallOfWicketsData2).forEach(wicket => {
                    fallOfWicketsText2 += `${wicket.wktRuns}-${wicket.wktNbr} (<a href="">${wicket.batName}</a>, ${wicket.wktOver}), `;
                });
                fallOfWicketsText2 = fallOfWicketsText2.slice(0, -2); // Remove the last comma and space
                scorecardFallOfWicketsBody2.append(`
                    <tr>
                        <td>${fallOfWicketsText2}</td>
                    </tr>
                `);
            },
            error: function(error) {
                console.log('Error fetching teams:', error);
            },
            complete: function() {}
        });
    }

    // Match Squad
    function fetchTeams(team, playersSelector, benchSelector, isRightSide) {
        $.ajax({
            url: `/matches/teams/` + fetchMatchIdFromUrl() + '/' + team.id,
            method: 'GET',
            success: function(response) {
                var players = response.players["playing XI"];
                var bench = response.players.bench;

                // Empty the current content
                $(playersSelector).empty();
                $(benchSelector).empty();

                // Append players to the corresponding column
                players.forEach(player => {
                    var playerHTML = `<div class="w-100 p-2">
                        <a class="d-flex ${isRightSide ? 'justify-content-end' : ''} align-items-center" href="/players/${player.id}">
                            ${isRightSide ? `
                            <div class="text-right">
                                <div>${player.fullName}${player.captain ? " (C)" : ""}<br><span class="text-muted small">${player.role}</span></div>
                            </div>
                            <div class="p-2"><img class="rounded-circle" width="40" height="40" src="https://static.cricbuzz.com/a/img/v1/40x40/i1/c${player.faceImageId}/player_face.jpg"></div>
                            ` : `
                            <div class="p-2"><img class="rounded-circle" width="40" height="40" src="https://static.cricbuzz.com/a/img/v1/40x40/i1/c${player.faceImageId}/player_face.jpg"></div>
                            <div>
                                <div>${player.fullName}${player.captain ? " (C)" : ""}<br><span class="text-muted small">${player.role}</span></div>
                            </div>
                            `}
                        </a>
                    </div>`;
                    $(playersSelector).append(playerHTML);
                });

                // Append bench players to the corresponding column
                bench.forEach(player => {
                    var benchHTML = `<div class="w-100 p-2">
                        <a class="d-flex ${isRightSide ? 'justify-content-end' : ''} align-items-center" href="/players/${player.id}">
                            ${isRightSide ? `
                            <div class="text-right">
                                <div>${player.fullName}<br><span class="text-muted small">${player.role}</span></div>
                            </div>
                            <div class="p-2"><img class="rounded-circle" width="40" height="40" src="https://static.cricbuzz.com/a/img/v1/40x40/i1/c${player.faceImageId}/player_face.jpg"></div>
                            ` : `
                            <div class="p-2"><img class="rounded-circle" width="40" height="40" src="https://static.cricbuzz.com/a/img/v1/40x40/i1/c${player.faceImageId}/player_face.jpg"></div>
                            <div>
                                <div>${player.fullName}<br><span class="text-muted small">${player.role}</span></div>
                            </div>
                            `}
                        </a>
                    </div>`;
                    $(benchSelector).append(benchHTML);
                });

                console.log('Team data:', response);
            },
            error: function(error) {
                console.log('Error fetching teams:', error);
            },
            complete: function() {}
        });
    }

    function updateTeamDisplay(team1, team2) {
        var teamDisplayHTML = `<div class="col-12 d-flex justify-content-between align-items-center font-weight-bold p-2 bg-light">
            <a class="d-flex align-items-center" href="/cricket-team/${team1.name}/${team1.id}/schedule">
                <div class="p-2">${team1.name}</div>
            </a>
            <a class="d-flex text-right align-items-center" href="/cricket-team/${team2.name}/${team2.id}/schedule">
                <div class="p-2">${team2.name}</div>
            </a>
        </div>`;
        $('#team-display').html(teamDisplayHTML);
    }

    // Series News
    function fetchNews(){
        
        $.ajax({
            url: '/series/news/'+fetchSeriesIdFromUrl(),
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

    

    fetchInfo()
    fetchScorecard();
    fetchNews()
});

function fetchSeriesIdFromUrl() {
    const urlParams = new URLSearchParams(window.location.search);
    const seriesId = urlParams.get('seriesId');
    return seriesId;
}

function fetchMatchIdFromUrl() {
    const urlParams = new URLSearchParams(window.location.search);
    const matchId = urlParams.get('matchId');
    return matchId;
}
