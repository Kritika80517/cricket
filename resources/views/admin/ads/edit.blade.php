@extends('admin.layouts.master')
@section('pagetitle','Edit Ads')
@section('admin-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Ads</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{url('admin/dashboard')}}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{url('admin/ads')}}">Ads List</a></div>
                    <div class="breadcrumb-item">Edit Ads</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <form action="{{route('admin.ads.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <input type="hidden" name="id" value="{{$ads->id}}" id="">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="category">Category</label>
                                                <select class="form-control d-inline" name="category_id">
                                                    <option selected disabled>Select Category</option>
                                                    @foreach ($category as $item)
                                                        <option @if ($item->id == $ads->category_id) selected @endif value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="subcategory">Subcategory</label>
                                                <select class="form-control d-inline" name="sub_category">
                                                    <option selected disabled>Select sub category</option>
                                                    @foreach ($sub_category as $item)
                                                        <option @if ($item->id == $ads->sub_category_id) selected @endif value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach 
                                                </select>
                                                <span class="text-danger">@error('dob') {{$message}} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Title</label>
                                                <input type="text" class="form-control" name="name" id="name" value="{{ $ads->name }}">
                                                <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="form-label" for="pname">Ads Placements</label>
                                                <select class="form-control" name="ads_placement" id="ads_placement">
                                                    <option value="" disabled selected>Select Ads Placements</option>
                                                    <option @if ($ads->ads_placement == 'home') selected @endif value="home">Home</option>
                                                    <option @if ($ads->ads_placement == 'news') selected @endif value="news">News</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="form-label" for="pname">Ads Type</label>
                                                <select class="form-control" name="ads_type" id="ads_type">
                                                    <option value="" disabled selected>Select Ads Type</option>
                                                    <option @if ($ads->ads_type == 'image') selected @endif value="image">Image</option>
                                                    <option @if ($ads->ads_type == 'video') selected @endif value="video">Video</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4" id="showhide">
                                            <div class="form-group" id="image" style="display: none" >
                                                <label for="type">Image</label>
                                                <input type="file" class="form-control" name="image_url" id="image_url">
                                            </div>

                                            <div class="form-group" id="video" style="display: none" >
                                                <label for="type">Video</label>
                                                <input type="url" class="form-control" name="video_url" id="video_url">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <img src="{{asset("assets/admin/img/ads/".$ads->image_url)}}" alt="img" width="90" height="80">
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea name="description" class="form-control"> {{$ads->description}} </textarea>
                                                <span class="text-danger"> @error('description') {{ $message }} @enderror </span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="status">Status</label>
                                                    <select class="form-control" name="status" id="">
                                                        <option @if ($ads->status == 1) selected @endif value="1">Active</option>
                                                        <option @if ($ads->status == 0) selected @endif value="0">Inactive</option>
                                                    </select>
                                                    <span class="text-danger"> @error('status'){{ $message }}  @enderror </span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row d-flex justify-content-end">
                                        <div class="col-md-12 text-right">
                                            <button type="submit" name="submit" style="font-size: 15px;" class="btn btn-primary btn-lg">
                                                Submit
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--End Main Content -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        $(document).ready(function(e) {
            var demovalue = {!! json_encode($ads->ads_type) !!};
            // console.log("demovalue", demovalue)
            changeImage(demovalue)

            $('#ads_type').on('change', function() {
                var demovalue = $(this).val();
                changeImage(demovalue)
            });
            function changeImage(demovalue){
                $("#image").hide();
                $("#video").hide();
                if (demovalue == 'image') {
                    $("#image").show();
                }
                else if(demovalue == 'video') {
                    $("#video").show();
                }
            }
        });
    </script>
@endsection
