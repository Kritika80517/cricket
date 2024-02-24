@extends('admin.layouts.master')
@section('pagetitle','Notification')
@section('admin-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Notification List</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Notification</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header d-md-flex justify-content-between">
                            <h4>Notification</h4>
                            <div>
                                <a href="{{route('admin.notifications.create')}}" class="btn btn-primary rounded"><i class="fas fa-plus"></i> Add Notification</a>
                           </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Title</th>
                                    <th>Message</th>
                                    {{-- <th>Image</th> --}}
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notification as $key => $item)
                                    <tr style="align-items: center">
                                        <td>{{++$key}}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->message }}</td>
                                        {{-- <td>
                                            <img src="{{asset("assets/admin/img/article/".$item->image)}}" width="50" height="50" alt="img">
                                        </td> --}}
                                        <td>
                                            <a href="{{url('admin/notifications/edit/'. $item->id)}}" class="btn btn-success btn-action mr-1" data-toggle="tooltip" title="edit"><i class="fas fa-edit"></i></a>
                                            <a href="{{url('admin/notifications/delete/'. $item->id)}}" class="btn btn-danger btn-action mr-1" data-toggle="tooltip" title="delete"  onclick="return confirm('Are you sure want to delete this user?')" ><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <!--End Main Content -->
@endsection