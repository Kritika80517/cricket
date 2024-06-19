$(document).ready(function(){

    function fetchNews(containerId) {
        const container = $(`#${containerId}`);
        let url = `/news/info`;
        
        $.ajax({
            url: url, 
            method: 'GET', 
            beforeSend: function() {
                $('#home-news .loader-div').show();
            },
            success: function(data) {
                const stories = data.storyList.filter(item => item.story); // Filter out ads and other items
                if (stories.length > 0) {
                    container.empty(); // Clear the container
                    stories.forEach((item, index) => {
                        const story = item.story;
                        if(index <= 2){
                            container.append(`
                                <div class="post-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="img-hover">
                                                <img src="https://www.cricbuzz.com/a/img/v1/278x185/i1/c${story.coverImage.id}/${story.coverImage.caption.replace(/['"]/g, '')}.jpg" alt="${story.hline}" class="img-responsive">
                                                <div class="overlay"><a href="news/details/${story.id}">+</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h5><a href="news/details/${story.id}">${story.hline}</a></h5>
                                            <span class="data-info">${new Date(parseInt(story.pubTime)).toLocaleDateString()}</span>
                                            <p>${story.intro}<a href="news/details/${story.id}">Read More [+]</a></p>
                                        </div>
                                    </div>
                                </div>
                            `);
                        }
                    });
                } else {
                    container.html('<p>No news found.</p>');
                }
            }, error: function(error) {
                console.log('Error fetching news:', error);
                container.html('<p>Failed to fetch news.</p>');
            },complete: function() {
                $('#home-news .loader-div').hide();
            }
        });
    }

    function fetchPointTable(){
        $.ajax({
            url: 'home-point-table',
            method: 'GET',
            dataType: 'json',
            beforeSend: function() {
                $('#home-point-data .loader-div').show();
            },
            success: function(data) {
                let ranks = data.rank
                var tbody = $('#home-point-table');
                tbody.empty();
                
                ranks.forEach(function(item, index) {
                    var row = `
                        <tr>
                            <td class="text-left number">${index + 1}</td>
                            <td class="text-left">
                                <a href="#!">
                                    <img src="https://static.cricbuzz.com/a/img/v1/24x18/i1/c${item.faceImageId}/${item.name}.jpg" alt="${item.name}">
                                    <span>${item.name}</span>
                                </a>
                            </td>
                            <td>${item.rating}</td>
                            <td>${item.rank}</td>
                            <td>${item.points}</td>
                        </tr>
                    `;
                    
                    tbody.append(row);
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching data:', error);
              
            },complete: function() {
                $('#home-point-data .loader-div').hide();
            }
        });
    }

    function fetchUpcomingMatch(){
        $.ajax({
            url: 'home-upcoming-match',
            method: 'GET',
            dataType: 'json',
            beforeSend: function() {
                $('#home-upcoming-match .loader-div').show();
            },
            success: function(data) {
                if (data && data.typeMatches && data.typeMatches.length > 0) {
                    // Assuming we're taking the first match from the first series of the first type.
                    let match = data.typeMatches[0].seriesMatches[0].seriesAdWrapper.matches[0];
                    let matchInfo = match.matchInfo;
                    let matchScore = match.matchScore;
                    
                    let team1 = matchInfo.team1;
                    let team2 = matchInfo.team2;
                    let venue = matchInfo.venueInfo;
                    let date = new Date(parseInt(matchInfo.startDate));

                    let html = `
                        <div class="white-section paddings">
                            <i class="fa fa-soccer-ball-o right icon-big"></i>
                            <div class="container">
                                <div class="row next-match">
                                    <div class="col-lg-12">
                                        <p class="title-counter">
                                            <i class="fa fa-clock-o"></i>
                                            Countdown Till Start
                                        </p>
                                        <div id="event-one" class="counter"></div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="team">
                                            <a href="#">
                                                ${team1.teamName}
                                                <img src="https://static.cricbuzz.com/a/img/v1/100x70/i1/c${team1.imageId}/${team1.teamName}.jpg" alt="club-logo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="vs-match">
                                            VS
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="team right">
                                            <a href="#">
                                                <img src="https://static.cricbuzz.com/a/img/v1/100x70/i1/c${team2.imageId}/${team2.teamName}.jpg" alt="club-logo">
                                                ${team2.teamName}
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <ul class="date-match">
                                            <li><i class="fa fa-calendar"></i>${date.toDateString()} ${date.toLocaleTimeString()}</li>
                                            <li><i class="fa fa-clock-o"></i>${venue.ground}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>`;

                    $('#home-upcoming-match').append(html);
                    initCountdown('event-one', date);
                }
            },error: function(xhr, status, error) {
                    console.error('Error fetching data:', error);
                
                },complete: function() {
                    $('#home-upcoming-match .loader-div').hide();
                }
            });
    }

    function initCountdown(elementId, endTime) {
        function updateCountdown() {
            let now = new Date().getTime();
            let distance = endTime - now;
    
            if (distance < 0) {
                document.getElementById(elementId).innerHTML = "Match Started";
                clearInterval(intervalId);
                return;
            }
    
            let days = Math.floor(distance / (1000 * 60 * 60 * 24));
            let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
            document.getElementById(elementId).innerHTML = `
            <span>${days} <br> <small>days</small></span>
            <span>${hours} <br> <small>hr</small> </span>
            <span>${minutes} <br> <small>min</small> </span>
            <span>${seconds} <br> <small>sec</small></span>`;
        }
    
        updateCountdown();
        let intervalId = setInterval(updateCountdown, 1000);
    }

    fetchNews('home-news');
    fetchPointTable()
    fetchUpcomingMatch()

});