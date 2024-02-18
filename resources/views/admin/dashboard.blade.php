@extends('admin.layouts.master')
@section('pagetitle','Dashboard')
@section('admin-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Users</h4>
                            </div>
                            <div class="card-body">
                                {{-- {{ $data['user_count'] }} --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="far fa-newspaper"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total partner</h4>
                            </div>
                            <div class="card-body">
                                {{-- {{ $data['partner_count']}} --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="far fa-file"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Contacts</h4>
                            </div>
                            <div class="card-body">
                                {{-- {{ $data['contact_count']}} --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-university"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total colleges</h4>
                            </div>
                            <div class="card-body">
                                {{-- {{ $data['college_count']}} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Latest College Enquries</h4>
                            
                        </div>
                        <div class="card-body" style="min-height: 415px;">
                            <ul class="list-unstyled list-unstyled-border">
                                {{-- @if ($data['college_enquires']->count() == 0)
                                  <p class="align-items-center text-center">No Contact Found</p> 
                                @endif
                                @foreach ($data['college_enquires'] as $item)
                                    <li class="media">
                                        <img class="mr-3 rounded-circle" width="50"
                                            src="{{ asset('assets/admin/img/avatar/avatar-1.png') }}" alt="avatar">
                                        <div class="media-body">
                                            <div class="float-right text-primary">{{$item->created_at->diffForhumans()}}</div>
                                            <div class="media-title">{{$item->name}} ({{$item->phone}})</div>
                                            <span class="text-small text-muted">{{$item->email}}</span>
                                            <div class="media-title">{{$item->subject}}</div>
                                        </div>
                                    </li>
                                @endforeach --}}
                            </ul>
                            {{-- <canvas id="myChart" height="245"></canvas> --}}
                        </div>
                        {{-- <div class="card-footer text-center pt-1 pb-1 mb-3">
                            <a href="{{route('admin.college_enquires')}}" class="btn btn-primary btn-lg btn-round">
                                View All
                            </a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Latest Contact</h4>
                        </div>
                        {{-- <div style="min-height: 415px;" class="card-body">
                            <ul class="list-unstyled list-unstyled-border">
                                @if ($data['contact']->count() == 0)
                                  <p class="align-items-center text-center">No Contact Found</p> 
                                @endif
                                @foreach ($data['contact'] as $item)
                                    <li class="media">
                                        <img class="mr-3 rounded-circle" width="50"
                                            src="{{ asset('assets/admin/img/avatar/avatar-1.png') }}" alt="avatar">
                                        <div class="media-body">
                                            <div class="float-right text-primary">{{$item->created_at->diffForhumans()}}</div>
                                            <div class="media-title">{{$item->name}} ({{$item->phone}})</div>
                                            <span class="text-small text-muted">{{$item->email}}</span>
                                            <div class="media-title">{{$item->subject}}</div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-footer text-center pt-1 pb-1 mb-3">
                            <a href="{{route('admin.contact')}}" class="btn btn-primary btn-lg btn-round">
                                View All
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
           
        </section>
    </div>
    <!--End Main Content -->
@endsection
