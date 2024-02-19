@extends('admin.layouts.master')
@section('pagetitle','Staffs')
@section('admin-content')

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Staff List</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Staffs</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header d-md-flex justify-content-between">
                            <h4>Staffs</h4>
                            <div>
                                <a href="{{ route('admin.staffs.create') }}" class="btn btn-primary rounded" ><i class="fas fa-plus"></i>
                                    Add Staffs
                                </a>
                           </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th data-breakpoints="lg" width="10%">S.No</th>
                                        <th>{{('Name')}}</th>
                                        <th data-breakpoints="lg">{{('Email')}}</th>
                                        <th data-breakpoints="lg">{{('Phone')}}</th>
                                        <th data-breakpoints="lg">{{('Role')}}</th>
                                        <th width="10%" class="text-right">{{('Options')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($staffs as $key => $staff)
                                        @if($staff->user != null)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{$staff->user->name}}</td>
                                                <td>{{$staff->user->email}}</td>
                                                <td>{{$staff->user->mobile_number}}</td>
                                                <td>
                                                    @if ($staff->role != null)
                                                        {{ $staff->role->name }}
                                                    @endif
                                                </td>
                                                <td class="text-right">

                                                    <div class="flex align-items-center list-user-action d-flex">
                                                        <a class="btn btn-sm btn-outline-primary mr-1" data-toggle="tooltip" data-placement="top" title=""
                                                            data-original-title="Edit" href="{{route('admin.staffs.edit', encrypt($staff->id))}}"><i class="fas fa-edit mr-0"></i>
                                                        </a>
                                                        <a class="btn btn-sm btn-outline-danger mr-1" data-toggle="tooltip" data-placement="top" title="" onclick="return confirm('Are you sure you want to delete this company')"
                                                            data-original-title="Delete" href="{{route('admin.staffs.destroy', $staff->id)}}"><i class="fas fa-trash mr-0"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
                    
            </div>
        </div>

@endsection

@section('modal')
    @include('modals.delete_modal')
@endsection
