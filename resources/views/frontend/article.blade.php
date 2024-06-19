@extends('frontend.layouts.master')
@section('frontend-content')

<div class="section-title" style="background:url(assets/frontend/img/slide/1.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Article</h1>
            </div>

            <div class="col-md-4">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Inner Page</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="content-info">

    <div class="container paddings-mini">
       <div class="row">

        

            <!-- Sidebars -->
            <aside class="col-lg-3">
                <!-- Widget Categories-->
                <div class="panel-box">
                    <div class="titles no-margin">
                        <h4>Top Categories</h4>
                    </div>
                    <div class="info-panel">
                        <ul class="list">
                            @foreach ($data['category'] as $item)
                                <li><a href="{{ "/article/?category=".$item->id}}">{{ $item->name }}</a></li>
                            @endforeach
                            {{-- <li><i class="fa fa-check"></i><a href="#">Technology</a></li> --}}
                        </ul>
                    </div>
                </div>
                <!-- End Widget Categories-->

                <div class="panel-box">
                    <div class="titles no-margin">
                        <h4>Top Sub Categories</h4>
                    </div>
                    <div class="info-panel">
                        <ul class="list">
                            @foreach ($data['subCategory'] as $item)
                            <li><a href="#">{{ $item->name }}</a></li>
                            @endforeach
                            {{-- <li><i class="fa fa-check"></i><a href="#">Technology</a></li> --}}
                        </ul>
                    </div>
                </div>

                <!-- Widget img-->
                {{-- <div class="panel-box">
                    <div class="titles no-margin">
                        <h4>Popular Article</h4>
                    </div>
                    <img src="{{ asset('assets/admin/img/article/'. $data['popArticle']->image) }}" alt="">
                    <div class="row">
                       <div class="info-panel">
                        <p>{{$data['popArticle']->title}}</p>
                        <p class="date">{{$data['popArticle']->created_at->diffForhumans()}}</p>
                    
                        </div>
                    </div>
                </div> --}}
                <!-- End Widget img-->
            </aside>
            <!-- End Sidebars -->


            <div class="col-lg-9">
                <!-- Content Text-->
                <div class="panel-box">
                    <div class="titles">
                        <h4>Recent News</h4>
                    </div>

                    <!-- Post Item -->
                    <div class="post-item">
                        @foreach ($data['smallArticle'] as $item)
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-hover">
                                    <img src="{{ asset('assets/admin/img/article/'. $item->image) }}" alt="" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-md-8 description-container">
                                    <h5>{{ $item->title }}</h5>
                                    <span class="data-info">{{$item->created_at->diffForhumans()}}</span>
                                    {{-- <p> {!! $item->description !!} --}}
                                        <a href="javascript:void(0)" class="read-more full">Read More [+]</a></p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                     <!-- End Post Item -->

                     
                </div>
                <!-- End Content Text-->
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