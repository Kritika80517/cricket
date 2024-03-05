@extends('admin.layouts.master')
@section('pagetitle','Team')
@section('admin-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Team List</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Team </div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header d-md-flex justify-content-between">
                            <h4>Team </h4>
                            <div>
                                <a href="{{route('admin.matchschedule.teams.create')}}" class="btn btn-primary rounded"><i class="fas fa-plus"></i> Add Team</a>
                           </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Short Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teams as $key => $item)
                                    <tr style="align-items: center">
                                        <td>{{++$key}}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->short_name}}</td>
                                        <td>
                                            <img src="{{asset("assets/admin/img/team/".$item->image)}}" width="50" height="50" alt="img">
                                        </td>
                                        <td>
                                            <a href="{{url('admin/matchschedule/teams/edit/'. $item->id)}}" class="btn btn-success btn-action mr-1" data-toggle="tooltip" title="edit"><i class="fas fa-edit"></i></a>
                                            <a href="{{url('admin/matchschedule/teams/delete/'. $item->id)}}" class="btn btn-danger btn-action mr-1" data-toggle="tooltip" title="delete"  onclick="return confirm('Are you sure want to delete this team?')" ><i class="fas fa-trash"></i></a>
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