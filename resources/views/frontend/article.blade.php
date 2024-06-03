@extends('frontend.layouts.master')
@section('page-title', 'Article')
@section('website-content')

<style>
    .description-container {
            position: relative;
            width: 100%;
        }
        
        .description {
            display: -webkit-box;
            -webkit-line-clamp: 4 !important;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            max-height: 5em; /* Adjust based on line height */
        }
        
        .description.full {
            display: block;
            max-height: none;
            -webkit-line-clamp: unset;
        }
        
        .full {
            text-align: right;
            margin-top: 10px;
        }
</style>
<div class="inner-page-banner">
    <div class="container">
    </div>
</div>
<div class="inner-information-text">
    <div class="container">
        <h3>Article</h3>
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Article</li>
        </ul>
    </div>
</div>

<section id="contant" class="contant main-heading team">
    <div class="row">
        <div class="container">
            <div class="col-md-9">

                <div class="feature-post">
                    @foreach ($data['article'] as $item)

                    <div class="feature-img">
                        <img src="{{ asset('assets/admin/img/article/'. $item->image) }}" class="img-responsive" width="100%" alt="#" />
                    </div>
                    <div class="feature-cont">
                        {{-- <div class="post-people">
                              <div class="left-profile">
                                 <div class="post-info">
                                       <img src="{{ asset('assets/frontend/images/profile-img.png') }}" alt="#" />
                        <span>
                            <h4>by George Kvasnikov</h4>
                            <h5>on Jun 27, 2014</h5>
                        </span>
                    </div>
                    <span class="share"></span>
                </div>
            </div> --}}
            <div class="post-heading">
                <h3>{{ $item->title }}</h3>
                <span>
                    <h5>{{$item->created_at->diffForhumans()}}</h5>
                </span>
                {{-- <p> {!!$item->description!!}</p> --}}
                <div class="full">
                    <a class="btn" href="#">Read More</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>

    <div class="feature-post small-blog">

        @foreach ($data['smallArticle'] as $item)

        <div class="col-md-5">
            <div class="feature-img">
                <img src="{{ asset('assets/admin/img/article/'. $item->image) }}" class="img-responsive" height="100$" alt="#" />
            </div>
        </div>
        <div class="col-md-7">
            <div class="feature-cont">
                <div class="post-heading">
                    <h3>{{ $item->title }}</h3>
                    <span>
                        <h5>{{$item->created_at->diffForhumans()}}</h5>
                    </span>
                    <div class="description-container">
                        <div class="description">
                            {!! $item->description !!}
                        </div>
                        <div class="full">
                            <a class="btn read-more" href="javascript:void(0)">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- <div class="feature-post small-blog">
                        <div class="col-md-5">
                            <div class="feature-img">
                                <img src="{{ asset('assets/frontend/images/post2.png') }}" class="img-responsive"
    alt="#" />
    </div>
    </div>
    <div class="col-md-7">
        <div class="feature-cont">
            <div class="post-info">
                <img src="{{ asset('assets/frontend/images/profile-img.png') }}" alt="#" />
                <span>
                    <h4>by George Kvasnikov</h4>
                    <h5>on Jun 27, 2014</h5>
                </span>
            </div>
            <div class="post-heading">
                <h3>We denounce with righteous indignation and dislike men who are so beguiled</h3>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                    voluptatum deleniti atque corrupti quos dolores
                    et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt
                    in culpa qui officia deserunt mollitia animi, id est
                    laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                </p>
                <div class="full">
                    <a class="btn" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
    </div> --}}


    </div>

    <div class="col-md-3">
        <div class="blog-sidebar">
            <div class="search-bar-blog">
                <form>
                    <input type="text" placeholder="search" />
                    <button><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
        </div>
        <div class="blog-sidebar">
            <h4 class="heading">Top Categories</h4>
            <div class="category-menu">
                <ul>
                    @foreach ($data['category'] as $item)
                    <li><a href="{{ "/article/?category=".$item->id}}">{{ $item->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="blog-sidebar">
            <h4 class="heading">Top Sub Categories</h4>
            <div class="category-menu">
                <ul>
                    @foreach ($data['subCategory'] as $item)
                    <li><a href="#">{{ $item->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="blog-sidebar">
            <h4 class="heading">Popular Article</h4>
            <div class="category-menu">
                <ul>
                    <li>
                        <span><img src="{{ asset('assets/admin/img/article/'. $data['popArticle']->image) }}" alt="#"></span>
                        <span>
                            <p>{{$data['popArticle']->title}}</p>
                            <p class="date">{{$data['popArticle']->created_at->diffForhumans()}}</p>
                        </span>
                    </li>
                </ul>
            </div>
        </div>

        <aside id="sidebar" class="left-bar">
            <h4 class="heading">International Match</h4>
            <div class="feature-matchs">
                <div class="team-btw-match">
                    @if ($data['schedule_matches'] && $data['schedule_matches']['matchScheduleMap'])
                    @foreach ($data['schedule_matches']['matchScheduleMap'] as $item)
                    @if ($item['scheduleAdWrapper'] ?? false)
                    <ul>
                        <li>
                            <img style="width: 40px;" src="https://www.cricbuzz.com/a/img/v1/152x152/i1/c<?php echo $item['scheduleAdWrapper']['matchScheduleList'][0]['matchInfo'][0]['team1']['imageId']; ?>/i.jpg" alt="Team 1 Image">
                            <span>{{ $item['scheduleAdWrapper']['matchScheduleList'][0]['matchInfo'][0]['team1']['teamName'] ?? "" }}</span>
                        </li>
                        <li class="vs"><span>vs</span></li>
                        <li>
                            <img style="width: 40px;" src="https://www.cricbuzz.com/a/img/v1/152x152/i1/c<?php echo $item['scheduleAdWrapper']['matchScheduleList'][0]['matchInfo'][0]['team2']['imageId']; ?>/i.jpg" alt="Team 2 Image">
                            <span>{{$item['scheduleAdWrapper']['matchScheduleList'][0]['matchInfo'][0]['team2']['teamName'] ?? ""}}</span>
                        </li>
                    </ul>
                    @endif
                    @endforeach
                    @endif

                </div>
            </div>
        </aside>
    </div>
    </div>
    </div>

    <script>
        $(document).ready(function() {
    $('.read-more').on('click', function() {
        var $description = $(this).closest('.description-container').find('.description');
        $description.toggleClass('full');
        if ($description.hasClass('full')) {
            $(this).text('Read Less');
        } else {
            $(this).text('Read More');
        }
    });
});


    </script>
</section>

@endsection
