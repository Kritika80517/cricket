@extends('admin.layouts.master')

@section('admin-content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Staff Create</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Staff Create</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-md-flex justify-content-between">
                            <h4>Staff Create</h4>
                        </div>
        
                        <form action="{{ route('admin.roles.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label" for="name">{{'Name'}}</label>
                                    <div class="col-md-9">
                                        <input type="text" placeholder="{{'Name'}}" id="name" name="name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="card-text">
                                    <h5 class="mb-0 h6">{{ 'Permissions' }}</h5>
                                </div>
                                <br>
                                @php
                                    $permission_groups =  \App\Models\Permission::all()->groupBy('section');
                                    $addons = array("offline_payment", "club_point", "pos_system", "paytm", "seller_subscription", "otp_system", "refund_request", "affiliate_system", "african_pg", "delivery_boy", "auction", "wholesale");
                                @endphp
                                @foreach ($permission_groups as $key => $permission_group)
                                    @php
                                        $show_permission_group = true;
                                    @endphp
                                    @if($show_permission_group)
                                        <ul class="list-group mb-4">
                                            <li class="list-group-item bg-light" aria-current="true">{{ Str::headline($permission_group[0]['section']) }}</li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    @foreach ($permission_group as $key => $permission)
                                                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                                            <div class="p-2 border mt-1 mb-2">
                                                                <label class="control-label d-flex">{{ Str::headline($permission->name) }}</label>
                                                                <label class="aiz-switch aiz-switch-success">
                                                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="{{ $permission->id }}">
                                                                    <span class="slider round"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </li>
                                        </ul>
                                    @endif
                                @endforeach
                                <button type="submit" name="btnSubmit" class="btn btn-primary border-0">{{ 'Save' }}</button>

                                {{-- <div class="form-group mb-3 mt-3 text-right">
                                    <button type="submit" class="btn btn-primary">{{'Save'}}</button>
                                </div> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
