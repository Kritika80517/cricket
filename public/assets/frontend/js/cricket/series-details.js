$(document).ready(function() {

    // Teams schedules
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
                            console.log("matchInfo", matchInfo)
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

    fetchSchedules()
});


function fetchIdFromUrl() {
    const urlParams = new URLSearchParams(window.location.search);
    const seriesId = urlParams.get('seriesId');
    return seriesId;
}