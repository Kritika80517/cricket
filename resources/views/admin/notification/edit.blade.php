@extends('admin.layouts.master')
@section('pagetitle','Edit Notification')
@section('admin-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Notification</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{url('admin/dashboard')}}">Dashboard</a></div>
                    <div class="breadcrumb-item active"><a href="{{url('admin/notifications')}}">Notification List</a></div>
                    <div class="breadcrumb-item">Edit Notification</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <form action="{{route('admin.notifications.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <input type="hidden" name="id" value="{{$message->id}}" id="">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Title</label>
                                                <input type="text" class="form-control" name="title" id="title" value="{{ $message->title}}">
                                                <span class="text-danger">@error('title') {{$message}} @enderror</span>
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
                                            <img src="{{asset("assets/admin/img/notification/".$message->file)}}" alt="img" width="90" height="80">
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea name="message" class="form-control">{{ $message->message}}</textarea>
                                                <span class="text-danger"> @error('message') {{ $message }} @enderror </span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user">Users</label>
                                                <select class="form-control select2" name="user_ids[]" multiple>
                                                    @foreach ($users as $user)
                                                        <option @if ($message->user_ids && in_array($user->id, json_decode($message->user_ids, true))) selected @endif value="{{ $user->id }}">{{ $user->name }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger">@error('name') {{$message}} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="send_at">Send At</label>
                                                <input type="datetime-local" class="form-control" name="send_at" id="send_at" value="{{ $message->send_at}}">
                                                <span class="text-danger">@error('send_at') {{$message}} @enderror</span>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".select2").select2();
        });
    </script>

    <script>
        var now = new Date();
        document.getElementById('send_at').min = now.toISOString().slice(0, 16);
    </script>
@endsection
