@extends('admin.layouts.master')
@section('pagetitle','User List')
@section('admin-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>User List</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">User List</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header d-md-flex justify-content-between">
                            <h4>User List</h4>
                            <div>
                                <a href="{{route('admin.users.create')}}" class="btn btn-primary rounded"><i class="fas fa-plus"></i> Add User</a>
                           </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $item)
                                    <tr style="align-items: center">
                                        <td>{{++$key}}</td>
                                        <td style="text-transform: capitalize;">{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->contact}}</td>
                                        <td>
                                            @if ($item->status === 1)
                                                <span class="badge bg-success p-2">Active</span>
                                            @else
                                                <span class="badge bg-danger p-2">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{-- <a href="{{url('admin/users/view/'. $item->id)}}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="view"><i class="fas fa-eye"></i></a> --}}
                                            <a href="{{url('admin/users/edit/'. $item->id)}}" class="btn btn-success btn-action mr-1" data-toggle="tooltip" title="edit"><i class="fas fa-edit"></i></a>
                                            <a href="{{url('admin/users/delete/'. $item->id)}}" class="btn btn-danger btn-action mr-1" data-toggle="tooltip" title="delete"  onclick="return confirm('Are you sure want to delete this user?')" ><i class="fas fa-trash"></i></a>
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
