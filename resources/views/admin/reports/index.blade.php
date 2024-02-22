@extends('admin.layouts.master')
@section('pagetitle','Reports')
@section('admin-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Reports List</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Reports </div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header d-md-flex justify-content-between">
                            <h4>Reports </h4>
                            {{-- <div>
                                <a href="{{route('admin.articles.create')}}" class="btn btn-primary rounded"><i class="fas fa-plus"></i> Add Article</a>
                           </div> --}}
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>User</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reports as $key => $item)
                                    <tr style="align-items: center">
                                        <td>{{++$key}}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->message}}</td>
                                        {{-- <td>
                                            <img src="{{asset("assets/admin/img/reports/".$item->image)}}" width="50" height="50" alt="img">
                                        </td> --}}
                                        <td>
                                            @include('partials.report_status', ['status' => $item->status])
                                        </td>
                                        <td>
                                            <a href="{{url('admin/reports/edit/'. $item->id)}}" class="btn btn-success btn-action mr-1" data-toggle="tooltip" title="edit"><i class="fas fa-edit"></i></a>
                                            <a href="{{url('admin/reports/delete/'. $item->id)}}" class="btn btn-danger btn-action mr-1" data-toggle="tooltip" title="delete"  onclick="return confirm('Are you sure want to delete this report?')" ><i class="fas fa-trash"></i></a>
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