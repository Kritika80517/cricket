@extends('frontend.layouts.master')
@section('frontend-content')
<div class="section-title single-player" style="background:url(/assets/frontend/img/slide/2.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Single New</h1>
            </div>

            <div class="col-md-4">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>News Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="content-info">

    <div class="container paddings-mini">
       <div class="row">

            <div class="col-lg-12">
                <!-- Content Text-->
                <div class="panel-box">
                    <div class="titles no-margin">
                        <h4>{{ $data['headline'] }}</h4>
                    </div>
                    <img class="w-100" src="https://static.cricbuzz.com/a/img/v1/595x396/i1/c{{ $data['coverImage']['id'] }}/{{$data['coverImage']['caption']}}.jpg" alt="{{ $data['coverImage']['caption'] }}">
                    <div class="info-panel">
                        @if ($data['content'])
                            @foreach($data['content'] as $key => $content)
                                @if(isset($content['content']['contentType']) && $content['content']['contentType'] === 'text' && !isset($content['content']['hasFormat']))
                                    <p>{{ $content['content']['contentValue'] }}</p>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
                <!-- End Content Text-->
            </div>

            <!-- Sidebars -->
            {{-- <aside class="col-lg-3">
                <!-- Widget img-->
                <div class="panel-box">
                    <div class="titles no-margin">
                        <h4>Latest News</h4>
                    </div>
                    <img src="{{asset('assets/frontend/img/slide/1.jpg')}}" alt="">
                    <div class="row">
                       <div class="info-panel" id="latest-news-container">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,  ut sit amet, consectetur adipisicing elit, labore et dolore.</p>
                       </div>
                    </div>
                </div>
                <!-- End Widget img-->
            </aside> --}}
            <!-- End Sidebars -->
       </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/frontend/js/cricket/news-details.js') }}"></script>

</section>

@endsection