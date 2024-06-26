$(document).ready(function() {
    // Team sectionn
    function fetchSchedule(type, containerId) {
        const loaderDiv = $(`#${containerId}`).siblings('.loader-div');
        loaderDiv.show();

        $.ajax({
            url: `schedule/match/${type}`, 
            method: 'GET', 
            success: function(response) {
                let html = '';
                let processedDates = new Set();
                
                response.matchScheduleMap.forEach(function(schedule) {
                    if (schedule.scheduleAdWrapper) {
                        const date = schedule.scheduleAdWrapper.date;
                        
                        if (!processedDates.has(date)) {
                            html += `
                                <tr style="background-color: rgb(220, 220, 220);">
                                    <td colspan="3"><strong>${date}</strong></td>
                                </tr>
                            `;
                            processedDates.add(date);
                        }
                        
                        schedule.scheduleAdWrapper.matchScheduleList.forEach(function(matchSchedule) {
                            const seriesName = matchSchedule.seriesName;
                            const matchCount = matchSchedule.matchInfo.length;
                            
                            matchSchedule.matchInfo.forEach(function(match, index) {
                                const matchDesc = `${match.team1.teamName} vs ${match.team2.teamName}, ${match.matchDesc}`;

                                const matchStartTime = new Date(parseInt(match.startDate)).toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', hour12: true });
                                const matchEndTime = new Date(parseInt(match.endDate)).toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', hour12: true });

                                const venue = `${match.venueInfo.ground}, ${match.venueInfo.city}`;
                                
                                if (index === 0) {
                                    html += `
                                        <tr>
                                            <td rowspan="${matchCount}">
                                                <a href="/cricket-series/${match.seriesId}"><strong>${seriesName}</strong></a>
                                            </td>
                                            <td>
                                                <div>
                                                    <a href="/live-cricket-scores/${match.matchId}"
                                                        title="${matchDesc} Live Cricket Score">
                                                        ${matchDesc}
                                                    </a>
                                                    <div>
                                                        ${venue}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <strong>${matchStartTime}</strong> <br>
                                                <span>${matchEndTime} GMT / LOCAL</span>
                                            </td>
                                        </tr>
                                    `;
                                } else {
                                    html += `
                                        <tr>
                                            <td>
                                                <div>
                                                    <a href="/live-cricket-scores/${match.matchId}"
                                                        title="${matchDesc} Live Cricket Score">
                                                        ${matchDesc}
                                                    </a>
                                                    <div>
                                                        ${venue}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <strong>${matchStartTime}</strong> <br>
                                                <span>${matchEndTime} GMT / LOCAL</span>
                                            </td>
                                        </tr>
                                    `;
                                }
                            });
                        });
                    }
                });
                $(`#${containerId}`).html(html);
            }, error: function(error) {
                console.log('Error fetching teams:', error);
                $(`#${containerId}`).html('<p class="text-center">Failed to fetch teams.</p>');
                loaderDiv.hide();
            }, complete: function() {
                loaderDiv.hide();
            }
        });
    }

    // Fetch teams on page load
    fetchSchedule('international', 'international-schedule');
    fetchSchedule('domestic', 'domestic-schedule');
    fetchSchedule('league', 'league-schedule');
    fetchSchedule('women', 'women-schedule');


});