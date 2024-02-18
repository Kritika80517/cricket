@extends('admin.layouts.master')
@section('pagetitle','Setting')
@section('admin-content')
@php
    $level_type = DB::table('settings')->where('key', 'level_type')->first();
@endphp
<div class="main-content" style="min-height: 730px;">
    <section class="section">
      <div class="section-header">
        <h1>Setting</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="{{url('dashboard')}}">Dashboard</a></div>
          <div class="breadcrumb-item">Setting</div>
        </div>
      </div>
      <div class="section-body">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="level_type">Level Type</label>
                                            <select name="level_type" class="form-control" id="">
                                                <option value="">None</option>
                                                <option @if ($level_type && $level_type->value == 'linear') selected @endif value="linear">Linear Level</option>
                                                <option @if ($level_type && $level_type->value == 'binary') selected @endif value="binary">Binary Level</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="level_1">Level 1 Amount (In %)</label>
                                            <input class="form-control" type="number" id="level_1" min="1" max="100" name="level_1" value="{{ App\Helpers\Helpers::get_setting('level_1') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="level_2">Level 2 Amount (In %)</label>
                                            <input class="form-control" type="number" id="level_2" min="1" max="100" name="level_2" value="{{ App\Helpers\Helpers::get_setting('level_2') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="level_3">Level 3 Amount (In %)</label>
                                            <input class="form-control" type="number" id="level_3" min="1" max="100" name="level_3" value="{{ App\Helpers\Helpers::get_setting('level_3') }}">
                                        </div>
                                    </div>
                                    

                                    <div class="col-12 text-center">
                                        <button class="btn btn-lg btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </section>
  </div>
@endsection