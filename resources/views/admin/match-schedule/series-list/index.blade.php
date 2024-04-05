@extends('admin.layouts.master')
@section('pagetitle','Series')
@section('admin-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Series List</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Series</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header d-md-flex justify-content-between">
                            <h4>Series</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>ODI</th>
                                    <th>T20</th>
                                    <th>Test</th>
                                    <th>Squads</th>
                                    <th>Matches</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($series['data'] as $key => $item)
                                        {{-- {{dd($item)}} --}}
                                        <tr style="align-items: center">
                                            <td>{{++$key}}</td>
                                            <td>{{ $item['name'] ?? 'N/A' }}</td>
                                            <td>{{ $item['startDate'] ?? 'N/A' }}</td>
                                            <td>{{ $item['endDate'] ?? 'N/A' }}</td>
                                            <td>{{ $item['odi'] ?? 'N/A' }}</td>
                                            <td>{{ $item['t20'] ?? 'N/A' }}</td>
                                            <td>{{ $item['test'] ?? 'N/A' }}</td>
                                            <td>{{ $item['squads'] ?? 'N/A' }}</td>
                                            <td>{{ $item['matches'] ?? 'N/A' }}</td>
                                                                        
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

    {{-- screipt --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
 
    
@endsection
