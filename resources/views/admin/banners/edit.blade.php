@extends('admin.layouts.master')
@section('pagetitle','Edit Banner')
@section('admin-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Banner</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{url('admin/dashboard')}}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{url('admin/articles')}}">Banner List</a></div>
                    <div class="breadcrumb-item">Edit Banner</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <form action="{{route('admin.banners.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <input type="hidden" name="id" value="{{$data->id}}" id="">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="tag">Tag</label>
                                                <input type="text" class="form-control" name="tag" id="tag" value="{{$data->tag}}">
                                                <span class="text-danger">@error('tag') {{$message}} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Title</label>
                                                <input type="text" class="form-control" name="title" id="title" value="{{$data->title}}">
                                                <span class="text-danger">@error('title') {{$message}} @enderror</span>
                                            </div>
                                        </div>
                                        
                                       

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea name="description" class="form-control">{{$data->description}}</textarea>
                                                <span class="text-danger"> @error('description') {{ $message }} @enderror </span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="image">Image</label>
                                                <input type="file" class="form-control" name="image" id="image">
                                                <span class="text-danger">@error('image') {{$message}} @enderror</span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <img src="{{asset("assets/admin/img/banners/".$data->image)}}" alt="img" width="90" height="80">
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="status">Status</label>
                                                    <select class="form-control" name="status" id="">
                                                        <option  @if ($data->status == 1) selected @endif value="1">Active</option>
                                                        <option  @if ($data->status == 0) selected @endif value="0">Inactive</option>
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
