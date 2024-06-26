$(document).ready(function() {
    // Team sectionn
    function fetchSeries(type, containerId) {
        const loaderDiv = $(`#${containerId}`).siblings('.loader-div');
        loaderDiv.show();

        $.ajax({
            url: `/series/list/${type}`, 
            method: 'GET', 
            success: function(response) {
                const seriesMapProto = response.seriesMapProto;
                
                let html = '';

                html += `
                <thead>
                    <tr>
                        <th style="width: 150px">Month</th>
                        <th>Series Name</th>
                    </tr>
                </thead>`;
                seriesMapProto.forEach(seriesGroup => {
                    seriesGroup.series.forEach(series => {
                        const startDate = new Date(parseInt(series.startDt));
                        const endDate = new Date(parseInt(series.endDt));
                        
                        const options = { month: 'short', day: '2-digit' };
                        const formattedStartDate = startDate.toLocaleDateString('en-US', options);
                        const formattedEndDate = endDate.toLocaleDateString('en-US', options);
                        html += `
                            <tr>
                                <td><strong>${seriesGroup.date}</strong></td>
                                <td>
                                    <a href="/series/${series.id}/details?name=${series.name}&seriesId=${series.id}"><strong>${series.name}</strong></a><br>
                                    <span class="meta-text">${formattedStartDate} - ${formattedEndDate}</span>
                                </td>
                            </tr>
                        `;
                    });
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
    fetchSeries('international', 'international-series');
    fetchSeries('domestic', 'domestic-series');
    fetchSeries('league', 'league-series');
    fetchSeries('women', 'women-series');


});