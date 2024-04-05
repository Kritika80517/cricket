@extends('admin.layouts.master')
@section('pagetitle','Match')
@section('admin-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Match List</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Match </div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header d-md-flex justify-content-between">
                            <h4>Match </h4>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Match Type</th>
                                    <th>Status</th>
                                    <th>Venue</th>
                                    <th>Date</th>
                                    <th>Date-Time</th>
                                    {{-- <th>Teams</th> --}}
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($matches['data'] as $key => $item)
                                    {{-- {{dd($item)}} --}}
                                    <tr style="align-items: center">
                                        <td>{{++$key}}</td>
                                        <td>{{ $item['name'] ?? 'N/A'}}</td>
                                        <td>{{ $item['matchType'] ?? 'N/A'}}</td>
                                        <td>{{$item['status'] ?? 'N/A'}}</td>
                                        <td>{{$item['venue'] ?? 'N/A'}}</td>
                                        <td>{{$item['date'] ?? 'N/A'}}</td>
                                        <td>{{$item['dateTimeGMT'] ?? 'N/A'}}</td>
                                        {{-- <td>{{$item['teams[]'] ?? 'N/A'}}</td> --}}
                                        {{-- <td>
                                            <img src="{{asset("assets/admin/img/team/".$item->image)}}" width="50" height="50" alt="img">
                                        </td> --}}
                                       
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