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

                            <form class="form-horizontal" action="{{ route('admin.staffs.update', $staff->id) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="" for="name">{{ 'Name' }}</label>
                                            <input type="text" placeholder="{{ 'Name' }}" id="name"
                                                name="name" value="{{ $staff->user->name }}" class="form-control"
                                                required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class=" " for="mobile">{{ 'Phone' }}</label>
                                            <input type="text" placeholder="{{ 'Phone' }}" id="mobile"
                                                name="mobile" value="{{ $staff->user->contact }}" class="form-control"
                                                required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class=" " for="email">{{ 'Email' }}</label>
                                            <input type="text" placeholder="{{ 'Email' }}" id="email"
                                                name="email" value="{{ $staff->user->email }}" class="form-control"
                                                required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class=" " for="password">{{ 'Password' }}</label>
                                            <input type="password" placeholder="{{ 'Password' }}" id="password"
                                                name="password" class="form-control">

                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class=" " for="name">{{ 'Role' }}</label>

                                            <select name="role_id" required class="form-control aiz-selectpicker">
                                                @foreach ($roles as $role)
                                                    <option @php if($staff->role_id == $role->id) echo "selected"; @endphp
                                                        value="{{ $role->id }}">{{ $role->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="status">Status</label>
                                            <select class="form-control" name="status" id="status">
                                                <option @if ($staff->user->status == 1) selected @endif value="1">
                                                    Active</option>
                                                <option @if ($staff->user->status == 0) selected @endif value="0">
                                                    Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-end">
                                        <div class="col-md-12 text-right">
                                            <button type="submit" name="btnSubmit" style="font-size: 15px;"
                                                class="btn btn-primary btn-lg">{{ 'Save' }}</button>
                                        </div>
                                    </div>
                                    {{-- <button type="submit" name="btnSubmit" class="btn btn-primary border-0">{{ 'Save' }}</button> --}}

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
