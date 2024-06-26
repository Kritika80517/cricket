@extends('frontend.layouts.master')
@section('frontend-content')
    <style>
        .description {
            max-height: 100px;
            /* Adjust as necessary */
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .description.full {
            max-height: none;
            /* Allows full height when 'full' class is added */
        }
    </style>

    <div class="section-title" style="background:url(assets/frontend/img/slide/1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Article</h1>
                </div>

                <div class="col-md-4">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
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
                                    <li><a href="{{ '/article/?category=' . $item->id }}">{{ $item->name }}</a></li>
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
                </aside>
                <!-- End Sidebars -->


                <div class="col-lg-9">
                    <!-- Content Text-->
                    <div class="panel-box">
                        <div class="titles">
                            <h4>Recent News</h4>
                        </div>

                        <!-- Post Item -->
                        @foreach ($data['smallArticle'] as $item)
                            <div class="post-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="img-hover">
                                            <img src="{{ asset('assets/admin/img/article/' . $item->image) }}" alt=""
                                                class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-8 description-container">
                                        <h5>{{ $item->title }}</h5>
                                        <span class="data-info">{{ $item->created_at->diffForhumans() }}</span>
                                        <div class="description">
                                            {!! $item->description !!}
                                        </div>
                                        <a href="javascript:void(0)" class="read-more">Read More [+]</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <!-- End Post Item -->
                    </div>

                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('.read-more').on('click', function() {
                    console.log("Read More clicked"); // Debugging line
                    var $description = $(this).closest('.description-container').find('.description');
                    console.log("Description element found:", $description.length); // Debugging line
                    $description.toggleClass('full');
                    console.log("Full class toggled:", $description.hasClass('full')); // Debugging line
                    if ($description.hasClass('full')) {
                        $(this).text('Read Less [-]');
                    } else {
                        $(this).text('Read More [+]');
                    }
                });
            });
        </script>
    </section>
@endsection
