$(document).ready(function() {
    function fetchNews(){
        $.ajax({
            url: `/news-info`, 
            method: 'GET', 
            success: function(data) {
                const stories = data.storyList.filter(item => item.story); // Filter out ads and other items
                if (stories.length > 0) {
                    stories.forEach(item => {
                        const story = item.story;
                        $('#latest-news-container').append(`
                            <div class="horizontal-card">
                                <div class="card-image" itemscope itemtype="https://schema.org/ImageObject" itemprop="image">
                                    <img itemprop="url" src="https://www.cricbuzz.com/a/img/v1/100x77/i1/c${story.coverImage.id}/${story.hline}.jpg" alt="${story.hline}">
                                </div>
                                <div class="card-content">
                                    <div class="card-title">
                                        <a target="_self" class="" href="{{url('news/details')}}/${story.id}" title="${story.hline}">
                                            ${story.hline}
                                        </a>
                                    </div>
                                    <div class="card-time">
                                        <span class="cb-nws-time">${new Date(parseInt(story.pubTime)).toLocaleDateString()}</span>
                                    </div>
                                </div>
                            </div>
                        `);
                    });
                } else {
                    $('#latest-news-container').html('<p>No news found.</p>');
                }
            },
            error: function(error) {
                console.log('Error fetching news:', error);
                $('#latest-news-container').html('<p>Failed to fetch news.</p>');
            }
        });
    }
    fetchNews()
});