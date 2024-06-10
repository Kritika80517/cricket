@extends('frontend.layouts.master')
@section('page-title', 'News Detail')
@section('website-content')

<style>
    .card {
        padding: 20px;
        text-align: left !important;
    }

    .card img {
        width: 100%;
        max-height: 450px;
    }

    .card-header {
        padding-bottom: 20px;
    }

    .card-header,
    h1 {
        text-align: left;
        margin-bottom: 0;
        line-height: 32px;
    }

    .card-body p {
        padding-top: 15px;
        font-size: 16px !important;
    }
  
    .horizontal-card {
        display: flex;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin: 20px 0;
        overflow: hidden;
        transition: box-shadow 0.3s;
        padding: 5px;
    }

    .horizontal-card:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .card-image {
        flex: 0 0 100px;
        overflow: hidden;
        display: flex;
        align-items: center;
    }

    .card-image img {
        width: 100%;
        height: 100px;
        object-fit: cover;
        display: flex;
        align-items: center;
        border-radius: 2px;
    }

    .card-content {
        flex: 1;
        padding: 10px 15px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .card-title {
        font-size: 16px;
        margin-bottom: 5px;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2; /* number of lines to show */
        -webkit-box-orient: vertical;
        line-clamp: 2; 
        box-orient: vertical;
    }

    .card-title a {
        color: #000;
        text-decoration: none;
    }

    .card-title a:hover {
        text-decoration: underline;
    }

    .card-time {
        font-size: 14px;
        color: #888;
    }
    .border-right{
        border-right: .5px solid #d1d1d1;
    }

</style>

<div class="inner-page-banner">
    <div class="container">
    </div>
</div>
<div class="inner-information-text">
    <div class="container">
        <h3>News Details</h3>
        <ul class="breadcrumb">
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="active">News Details</li>
        </ul>
    </div>
</div>
<section id="contant" class="contant main-heading team">

    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col-md-8 border-right">
                    <div class="card-header">
                        <small>{{ $data['context'] }}</small>
                        <h1>{{ $data['headline'] }}</h1>
                        <small>by <a href="">{{ $data['authors'][0]['name'] }}</a> • Last updated on {{ \Carbon\Carbon::createFromTimestampMs($data['lastUpdatedTime'])->toDayDateTimeString() }}</small>
                    </div>
        
                    <div class="card-body">
                        <img src="https://static.cricbuzz.com/a/img/v1/595x396/i1/c{{ $data['coverImage']['id'] }}/{{$data['coverImage']['caption']}}.jpg" alt="{{ $data['coverImage']['caption'] }}">
                        @if ($data['content'])
                            @foreach($data['content'] as $key => $content)
                                @if(isset($content['content']['contentType']) and $content['content']['contentType'] === 'text')
                                    <p>{{ $content['content']['contentValue'] }}</p>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-4 ">
                    <h3><strong>LATEST NEWS</strong></h3>
                    <div class="" id="latest-news-container">

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
    let url = `/news-info`;
    $.ajax({
        url: url, 
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
});

</script>
@endsection
