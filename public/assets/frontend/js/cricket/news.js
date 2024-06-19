$(document).ready(function(){

    function fetchNews(containerId, category) {
        const container = $(`#${containerId}`);
        let url = `/news/info`;
         if (category) {
            url = `/news/info?category=${category}`;
         }
        $.ajax({
            url: url, 
            method: 'GET', 
            success: function(data) {
                const stories = data.storyList.filter(item => item.story); // Filter out ads and other items
                if (stories.length > 0) {
                    container.empty(); // Clear the container
                    stories.forEach(item => {
                        const story = item.story;
                        container.append(`
                            <div class="col-md-4">
                                <div class="img-hover">
                                    <img class="img-responsive" src="https://www.cricbuzz.com/a/img/v1/278x185/i1/c${story.coverImage.id}/${story.hline}.jpg" alt="${story.hline}">
                                    <div class="overlay"><a href="news/details/${story.id}">+</a></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h5><a href="news/details/${story.id}">${story.hline}</a></h5>
                                <span class="data-info">${new Date(parseInt(story.pubTime)).toLocaleDateString()}</span>
                                <p>${story.intro}<a href="news/details/${story.id}">Read More [+]</a></p>
                            </div>
                        `);
                    });
                } else {
                    container.html('<p>No news found.</p>');
                }
            }
            , error: function(error) {
                console.log('Error fetching news:', error);
                container.html('<p>Failed to fetch news.</p>');
            }
        });
    }

    function fetchNewsCategories(containerId, ) {
        const container = $(`#${containerId}`);
        
        $.ajax({
            url: `news/categories`,
            method: 'GET',
            success: function(data) {
                const categories = data.storyType;
                const listContainer = $(`#${containerId}`);
                if (categories.length > 0) {
                    const activeCategoryId = fetchIdFromUrl();
                    listContainer.empty(); // Clear the container
                    categories.forEach(category => {
                        const isActive = category.id == activeCategoryId ? 'active' : '';
                        listContainer.append(`
                            <li class="${isActive}"> <i class="fa fa-check"></i><a href="news?category=${category.id}">${category.name}</a></li>
                        `);
                    });
                } else {
                    listContainer.html('<li>No categories found.</li>');
                }
            },
            error: function(error) {
                console.log('Error fetching news categories:', error);
                listContainer.html('<li>Failed to fetch categories.</li>');
            }
        });
    }

    function fetchIdFromUrl() {
        const urlParams = new URLSearchParams(window.location.search);
        const category = urlParams.get('category');
        return category;
  }

   // Fetch news categories on page load
   fetchNewsCategories('news-category-list');

   // Fetch news on page load
   fetchNews('news-container', fetchIdFromUrl());

});