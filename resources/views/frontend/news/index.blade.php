@extends('frontend.layouts.master')
@section('page-title', 'News')
@section('website-content')

<div class="inner-page-banner">
    <div class="container">
    </div>
</div>
<div class="inner-information-text">
    <div class="container">
        <h3>News</h3>
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">News</li>
        </ul>
    </div>
</div>

<section id="contant" class="contant">
   <div class="container">
      <div class="row">
         <div class="col-lg-9 col-sm-12 col-xs-12">
               <div class="news-post-holder" id="news-container"></div>
         </div>
      
         <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="content-widget top-story" id="news-category-container" style="background: url(images/top-story-bg.jpg);">
               <div class="top-stroy-header">
                     <h2>Top Categories</h2>
               </div>
               <hr style="margin: 0; padding:0;">
               <ul class="other-stroies" id="news-category-list">
                     
               </ul>
            </div>
            
         </div>
      </div>
   </div>
</section>

<script>
    function fetchNews(containerId, category) {
        const container = $(`#${containerId}`);
        let url = `/news-info`;
         if (category) {
            url = `/news-info?category=${category}`;
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
                            <div class="col-lg-6 col-sm-6 col-xs-12">
                                <div class="news-post-widget">
                                    <img class="img-responsive" src="https://www.cricbuzz.com/a/img/v1/152x152/i1/c${story.coverImage.id}/${story.hline}.jpg" alt="${story.hline}">
                                    <div class="news-post-detail">
                                        <span class="date">${new Date(parseInt(story.pubTime)).toLocaleDateString()}</span>
                                        <h2><a href="#">${story.hline}</a></h2>
                                        <p class="intro-text">${story.intro}</p>
                                    </div>
                                </div>
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
            url: `news-categories`,
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
                            <li class="${isActive}"><a href="{{url('news/')}}?category=${category.id}">${category.name}</a></li>
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

</script>
@endsection
