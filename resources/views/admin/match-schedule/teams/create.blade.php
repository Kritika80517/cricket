@extends('admin.layouts.master')
@section('pagetitle','Add Team')
@section('admin-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Add Team</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{url('admin/dashboard')}}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{url('admin/matchschedule/teams')}}">Team List</a></div>
                    <div class="breadcrumb-item">Add Team</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <form action="{{route('admin.matchschedule.teams.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" name="name" id="name">
                                                <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Short Name</label>
                                                <input type="text" class="form-control" name="short_name" id="short_name">
                                                <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="image">Image</label>
                                                <input type="file" class="form-control" name="image" id="image">
                                                <span class="text-danger">@error('image') {{$message}} @enderror</span>
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
