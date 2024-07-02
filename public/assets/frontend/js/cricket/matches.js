
$(document).ready(function() {
    // Function to fetch matches for a given type (live, recent, upcoming)
    function fetchMatches(type) {
        $.ajax({
            url: `matches/data/${type}`,
            method: 'GET',
            success: function(response) {
                // Process the response and update the HTML
                updateMatchesTable(type, response);
            },
            error: function(error) {
                console.log('Error fetching teams:', error);
            },
            complete: function() {}
        });
    }

    // Fetch matches on page load
    fetchMatches('live');
    fetchMatches('recent');
    fetchMatches('upcoming');

    function updateMatchesTable(type, data) {
        // Clear existing content
        $(`#${type}-international-matches`).empty();
        $(`#${type}-domestic-matches`).empty();
        $(`#${type}-league-matches`).empty();
        $(`#${type}-women-matches`).empty();

        const processedTitles = new Set();

        data.typeMatches.forEach(typeMatch => {
            let matchType = typeMatch.matchType;
            let seriesMatches = typeMatch.seriesMatches;

            let content = '';

            seriesMatches.forEach(seriesMatch => {
                let series = seriesMatch.seriesAdWrapper || seriesMatch.adDetail;
                let seriesName = series.seriesName || series.name || "Unknown Series";
                let matches = series.matches || [];

                matches.forEach(match => {
                    let matchInfo = match.matchInfo || {};
                    let matchScore = match.matchScore || {};
                    let team1 = matchInfo.team1 || {};
                    let team2 = matchInfo.team2 || {};
                    let venueInfo = matchInfo.venueInfo || {};

                    // Check if matchScore has the expected properties
                    let team1Score = matchScore.team1Score ? matchScore.team1Score.inngs1 : {};
                    let team2Score = matchScore.team2Score ? matchScore.team2Score.inngs1 : {};

                    // Declare variables with default values to avoid undefined references
                    let team1Runs = team1Score !== undefined ? team1Score.runs : '-';
                    let team1Wickets = team1Score !== undefined ? team1Score.wickets : '-';
                    let team1Overs = team1Score !== undefined ? team1Score.overs : '-';
                    let team2Runs = team2Score !== undefined ? team2Score.runs : '-';
                    let team2Wickets = team2Score !== undefined ? team2Score.wickets : '-';
                    let team2Overs = team2Score !== undefined ? team2Score.overs : '-';

                    if (!processedTitles.has(seriesName)) {
                        content += `
                            <div class="bg-light">
                                <h5 class="p-2">${seriesName}</h5>
                            </div>`;
                        processedTitles.add(seriesName);
                    }

                    content += `
                        <div class="post-item p-2">
                            <div class="col-lg-12">
                                <span><a href="#">${team1.teamName} vs ${team2.teamName}, ${matchInfo.matchDesc}</a></span><br>
                                <p>Today • ${new Date(parseInt(matchInfo.startDate)).toLocaleTimeString()} at ${venueInfo.ground}, ${venueInfo.city}</p>
                            </div>
                            <div class="panel-box col-lg-11 ml-2 mb-0 bg-light">
                                <div class="titles no-margin" style="border-left: 5px solid #01d099">
                                    <div class="m-2 p-2">
                                        <span>${team1.teamSName}<span class="ml-2"> ${team1Runs}/${team1Wickets} (${team1Overs} Ovs)</span></span><br>
                                        <span><b>${team2.teamSName}<span class="ml-2"> ${team2Runs}/${team2Wickets} (${team2Overs} Ovs)</span></b></span><br>
                                        <p><a href="#">${matchInfo.status}</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <ul class="navbar">
                                    <li><a href="#"><small>Live Score</small></a></li>
                                    <li><a href="#"><small>Scorecard</small></a></li>
                                    <li><a href="#"><small>Full Commentary</small></a></li>
                                    <li><a href="#"><small>News</small></a></li>
                                </ul>
                            </div>
                        </div>`;
                });
            });

            // Append content to respective <td> and check if there is content
            if (matchType === 'International') {
                $(`#${type}-international-matches`).append(content);
            } else if (matchType === 'Domestic' || matchType === 'Domestic & Others') {
                $(`#${type}-domestic-matches`).append(content);
            } else if (matchType === 'League') {
                $(`#${type}-league-matches`).append(content);
            } else if (matchType === 'Women') {
                $(`#${type}-women-matches`).append(content);
            }
        });
        
        // Toggle table header visibility based on content presence
        $(`#${type}-international-header`).toggle($(`#${type}-international-matches`).find('div.post-item').length > 0);
        $(`#${type}-domestic-header`).toggle($(`#${type}-domestic-matches`).find('div.post-item').length > 0);
        $(`#${type}-league-header`).toggle($(`#${type}-league-matches`).find('div.post-item').length > 0);
        $(`#${type}-women-header`).toggle($(`#${type}-women-matches`).find('div.post-item').length > 0);

        $(`#${type}-international-matches`).toggle($(`#${type}-international-matches`).find('div.post-item').length > 0);
        $(`#${type}-domestic-matches`).toggle($(`#${type}-domestic-matches`).find('div.post-item').length > 0);
        $(`#${type}-league-matches`).toggle($(`#${type}-league-matches`).find('div.post-item').length > 0);
        $(`#${type}-women-matches`).toggle($(`#${type}-women-matches`).find('div.post-item').length > 0);
    }
});
