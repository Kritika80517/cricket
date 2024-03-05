@extends('admin.layouts.master')
@section('pagetitle','Match Videos ')
@section('admin-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Match Videos  List</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Match Videos </div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header d-md-flex justify-content-between">
                            <h4>Match Videos </h4>
                            <div>
                                <a href="{{route('admin.matchvideo.create')}}" class="btn btn-primary rounded"><i class="fas fa-plus"></i> Add Match  Videos</a>
                           </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Category</th>
                                    <th>Language</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Video Url</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($video as $key => $item)
                                    <tr style="align-items: center">
                                        <td>{{++$key}}</td>
                                        <td>{{ $item->category->name }}</td>
                                        <td>{{ $item->language->language}}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>
                                            <img src="{{asset("assets/admin/img/matchhighlight/video/".$item->image)}}" width="50" height="50" alt="img">
                                        </td>
                                        <td><a href="{{$item->video_url}}" target="_blank">{{$item->video_url}}</a></td>
                                        <td>
                                            @if ($item->status === 1)
                                                <span class="badge bg-success p-2">Active</span>
                                            @else
                                                <span class="badge bg-danger p-2">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{url('admin/matchvideo/edit/'. $item->id)}}" class="btn btn-success btn-action mr-1" data-toggle="tooltip" title="edit"><i class="fas fa-edit"></i></a>
                                            <a href="{{url('admin/matchvideo/delete/'. $item->id)}}" class="btn btn-danger btn-action mr-1" data-toggle="tooltip" title="delete"  onclick="return confirm('Are you sure want to delete this match video?')" ><i class="fas fa-trash"></i></a>
                                        </td>
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