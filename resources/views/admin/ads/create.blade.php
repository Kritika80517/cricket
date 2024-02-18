@extends('admin.layouts.master')
@section('pagetitle','Add Ads')
@section('admin-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Add Ads</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{url('admin/dashboard')}}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{url('admin/ads')}}">Ads List</a></div>
                    <div class="breadcrumb-item">Add Ads</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <form action="{{route('admin.ads.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="category">Category</label>
                                                <select class="form-control d-inline" name="category_id">
                                                    <option selected disabled>Select Category</option>
                                                    @foreach ($category as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
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
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach 
                                                </select>
                                                <span class="text-danger">@error('dob') {{$message}} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Title</label>
                                                <input type="text" class="form-control" name="name" id="name">
                                                <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="form-label" for="pname">Ads Placements</label>
                                                <select class="form-control" name="ads_placement" id="ads_placement">
                                                    <option value="" disabled selected>Select Ads Placements</option>
                                                    <option value="home">Home</option>
                                                    <option value="news">News</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="form-label" for="pname">Ads Type</label>
                                                <select class="form-control" name="ads_type" id="ads_type">
                                                    <option value="" disabled selected>Select Ads Type</option>
                                                    <option value="image">Image</option>
                                                    <option value="video">Video</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6" id="showhide">
                                            <div class="form-group" id="image" style="display: none" >
                                                <label for="type">Image</label>
                                                <input type="file" class="form-control" name="image_url" id="image_url">
                                                {{-- <span class="text-danger">@error('image') {{$message}} @enderror</span> --}}
                                            </div>

                                            <div class="form-group" id="video" style="display: none" >
                                                <label for="type">Video</label>
                                                <input type="url" class="form-control" name="video_url" id="video_url">
                                                {{-- <span class="text-danger">@error('image') {{$message}} @enderror</span> --}}
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea name="description" class="form-control"></textarea>
                                                <span class="text-danger"> @error('description') {{ $message }} @enderror </span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="status">Status</label>
                                                    <select class="form-control" name="status" id="">
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
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

            $('#ads_type').on('change', function() {
                var demovalue = $(this).val();
                $("#image").hide();
                $("#video").hide();
                if (demovalue == 'image') {
                    $("#image").show();
                }
                else if(demovalue == 'video') {
                    $("#video").show();
                }
                
            });
        });
    </script>
@endsection
