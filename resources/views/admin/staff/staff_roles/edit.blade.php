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
                        <div class="card-body p-0">
                            <form class="p-4" action="{{ route('admin.roles.update', $role->id) }}" method="POST">
                                <input name="_method" type="hidden" value="PATCH">
                                <input type="hidden" name="lang" value="{{ $lang }}">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-3 col-from-label" for="name">{{'Name'}} <i class="las la-language text-danger" title="{{'Translatable'}}"></i></label>
                                    <div class="col-md-9">
                                        @php $roleForTranslation = \App\Models\Role::where('id',$role->id)->first(); @endphp
                                        <input type="text" placeholder="{{'Name'}}" id="name" name="name" class="form-control" value="{{ $roleForTranslation->name}}" required>
                                    </div>
                                </div>
                                <div class="bg-light p-3">
                                    <h5 class="mb-0 h6">{{ 'Permissions' }}</h5>
                                </div>
                                <br>
                                @php
                                    $permission_groups =  \App\Models\Permission::all()->groupBy('section');
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
                                                                <label class="control-label d-flex">{{ Str::headline($permission->name)}}</label>
                                                                <label class="aiz-switch aiz-switch-success">
                                                                    <input type="checkbox" name="permissions[]" class="form-control demo-sw" value="{{ $permission->id }}"
                                                                        @if ($role->hasPermissionTo($permission->name))
                                                                            checked
                                                                        @endif >
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
                                <div class="row d-flex justify-content-end">
                                    <div class="col-md-12 text-right">
                                        <button type="submit" name="btnSubmit" style="font-size: 15px;" class="btn btn-primary btn-lg">{{ 'Save' }}</button>
                                    </div>
                                </div>
                                {{-- <button type="submit" name="btnSubmit" class="btn btn-primary border-0">{{ 'Save' }}</button> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

@endsection
