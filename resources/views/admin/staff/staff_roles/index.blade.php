@extends('admin.layouts.master')
@section('admin-content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Roles</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{url('admin/dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item">Roles</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row mt-2">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="p-3 bg-light">
                            <h5 class="mb-0 h6">{{('Add New Permission')}}</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.roles.permission') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="name">{{('Name')}}</label>
                                            <input type="text" id="name" name="name" placeholder="{{ ('Permission') }}" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="name">{{('Parent')}}</label>
                                            <input type="text" id="parent" name="parent" placeholder="{{ ('Parent') }}" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3 text-right">
                                    <button type="submit" style="font-size: 15px;" class="btn btn-primary btn-lg">{{('Save')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-2">
                <div class="card-header d-md-flex justify-content-between">
                    <h5 class="mb-0 h6">{{('Roles')}}</h5>
                    <a href="{{ route('admin.roles.create') }}" class="btn btn-primary rounded" ><i class="fas fa-plus"></i>
                        Add Role
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th >S.No.</th>
                                <th>{{('Name')}}</th>
                                <th class="text-right" width="10%">{{('Actions')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $key => $role)
                                <tr>
                                    <td>{{ ($key+1) + ($roles->currentPage() - 1)*$roles->perPage() }}</td>
                                    <td>{{ $role->name}}</td>
                                    <td class="text-right">

                                        <div class="flex align-items-center list-user-action d-flex">
                                            <a class="btn btn-success btn-action mr-1" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Edit" href="{{route('admin.roles.edit', ['id'=>$role->id] )}}"><i class="fas fa-edit mr-0"></i>
                                            </a>
                                            <a class="btn btn-danger btn-action mr-1" data-toggle="tooltip" data-placement="top" title="" onclick="return confirm('Are you sure you want to delete this staff-role')"
                                                data-original-title="Delete" href="{{route('admin.roles.destroy', $role->id)}}"><i class="fas fa-trash mr-0"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

@section('modal')
    @include('modals.delete_modal')
@endsection
