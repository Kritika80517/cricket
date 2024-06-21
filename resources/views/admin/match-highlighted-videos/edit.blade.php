@extends('admin.layouts.master')
@section('pagetitle','Edit Match Video')
@section('admin-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Match Video</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{url('admin/dashboard')}}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{url('admin/matchvideo')}}">Match Video List</a></div>
                    <div class="breadcrumb-item">Edit Match Video</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <form action="{{route('admin.matchvideo.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <input type="hidden" name="id" value="{{$video->id}}" id="">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="category">Category</label>
                                                <select class="form-control d-inline" name="category_id">
                                                    <option selected="" >select</option>
                                                    @foreach ($category as $item)
                                                        <option @if ($item->id == $video->category_id) selected @endif value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="subcategory">Subcategory</label>
                                                <select class="form-control d-inline" name="sub_category">
                                                    <option selected="">Select sub category</option>
                                                    @foreach ($sub_category as $item)
                                                        <option @if ($item->id == $video->sub_category_id) selected @endif value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach 
                                                </select>
                                                <span class="text-danger">@error('dob') {{$message}} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Title</label>
                                                <input type="text" class="form-control" name="title" id="title"  value="{{ $video->title }}">
                                                <span class="text-danger">@error('title') {{$message}} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="language">Language</label>
                                                <select class="form-control d-inline" name="language" required>
                                                    <option selected disabled value="">Select Language</option>
                                                    @foreach ($language as $item)
                                                        <option value="{{$item->id}}">{{$item->language}} ({{$item->code}}) </option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger">@error('language') {{$message}} @enderror</span>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="image">Thumbnail</label>
                                                <input type="file" class="form-control" name="image" id="image">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <img src="{{asset("assets/admin/img/matchhighlight/video/".$video->image)}}" alt="img" width="90" height="80">
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="video">Video</label>
                                                <input type="url" class="form-control" value="{{$video->video_url}}" name="video_url" id="video_url">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea name="description" class="form-control">{{ $video->description }}</textarea>
                                                <span class="text-danger"> @error('description') {{ $message }} @enderror </span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="status">Status</label>
                                                    <select class="form-control" name="status" id="">
                                                        <option @if ($video->status == 1) selected @endif value="1">Active</option>
                                                        <option @if ($video->status == 0) selected @endif value="0">Inactive</option>
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
@endsection
