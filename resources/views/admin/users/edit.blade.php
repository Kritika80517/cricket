@extends('admin.layouts.master')
@section('pagetitle','Update User')
@section('admin-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Add User</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{url('admin/dashboard')}}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{url('admin/users')}}">User List</a></div>
                    <div class="breadcrumb-item">Edit User</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <form action="{{route('admin.users.update')}}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <input type="hidden" name="user_id" value="{{$data->id}}" id="">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" name="name" id="name" value="{{$data->name }}">
                                                <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="dob">DOB</label>
                                                <input type="date" class="form-control d-inline" name="dob" id="input-file" value="{{$data->dob }}">
                                                <span class="text-danger">@error('dob') {{$message}} @enderror</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone">Phone No.</label>
                                                <input type="text" class="form-control" name="contact" id="contact" value="{{$data->contact }}">
                                                <span class="text-danger">@error('contact') {{$message}} @enderror</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" name="email" id="email" value="{{$data->email }}">
                                                <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <textarea name="address" class="form-control">{{$data->address}}</textarea>
                                                <span class="text-danger"> @error('address') {{ $message }} @enderror </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="status">Status</label>
                                                    <select class="form-control" name="status" id="">
                                                        <option @if ($data->status == 1) selected @endif value="1">Active</option>
                                                        <option @if ($data->status == 0) selected @endif value="0">Inactive</option>
                                                    </select>
                                                    <span class="text-danger"> @error('status'){{ $message }}  @enderror </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-end">
                                        <div class="col-md-4">
                                            <button type="submit" name="submit" class="btn btn-primary btn-lg">
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
