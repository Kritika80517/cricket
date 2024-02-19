@extends('admin.layouts.master')
@section('admin-content')

<!-- Main Content -->
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

                        <form class="form-horizontal" action="{{ route('admin.staffs.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="" for="name">{{ 'Name' }}</label>
                                        <input type="text" placeholder="{{ 'Name' }}" id="name" name="name" class="form-control" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class=" " for="mobile">{{ 'Phone' }}</label>
                                        <input type="text" placeholder="{{ 'Phone' }}" id="mobile" name="contact" class="form-control" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class=" " for="email">{{ 'Email' }}</label>
                                        <input type="text" placeholder="{{ 'Email' }}" id="email" name="email" class="form-control" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class=" " for="password">{{ 'Password' }}</label>
                                        <input type="password" placeholder="{{ 'Password' }}" id="password" name="password" class="form-control" required>

                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class=" " for="name">{{ 'Role' }}</label>

                                        <select name="role_id" required class="form-control aiz-selectpicker">
                                            @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="status">Status</label>
                                        <select class="form-control" name="status" id="status">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" name="btnSubmit" class="btn btn-primary border-0">{{ 'Save' }}</button>
                                {{-- <div class="col-md-6">
                                    <div class="mt-2 mb-0 text-right">
                                        <button type="submit" class="btn btn-primary">{{ 'Save' }}</button>
                            </div>
                    </div> --}}
                    </form>
                </div>
            </div>

        </div>
    </section>
</div>

@endsection
