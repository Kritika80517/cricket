@extends('admin.layouts.master')
@section('pagetitle','Report Details')
@section('admin-content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Report Details</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Report Details </div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="card-header border-0 mb-1 d-block">
                            <h4 class="card-title mb-1 fs-22">{{ $report->title }}</h4>
                            <p class="fs-13"> {{ $report->message }} </p>
                            <small class="fs-13"><i class="fas fa-clock text-muted me-2"></i>Report At
                                <span style="padding-left: 5px !important;" class="text-muted pl-1">
                                    {{ $report->created_at->diffForHumans() }}
                                </span>
                            </small>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header border-0 mb-1 d-block">
                            <h4>Report Reply</h4>
                        </div>
                        <div class="card-body pt-0">
                            <form action="{{ url('admin/reports/reply') }}" method="POST">
                                @csrf
                                <input type="hidden" name="report_id" value="{{ $report->id }}">
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" rows="4" cols="100" name="message" aria-multiline="true"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="d-block">Status</label>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" id="inlineradio1" name="status" value="inprogress" @if ($report->status == "pending" || $report->status == "inprogress") checked @endif>
                                      <label class="form-check-label" for="inlineradio1">In progress</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" id="inlineradio2" name="status" value="onhold" @if ($report->status == "onhold") checked @endif>
                                      <label class="form-check-label" for="inlineradio2">On-Hold</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" id="inlineCheckbox3" name="status" value="solved" @if ($report->status == "solved") checked @endif>
                                      <label class="form-check-label" for="inlineCheckbox3">Solved</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary" @if ($report->status == "solved") disabled @endif>Reply</button>
                            </form>
                        </div>
                    </div>

                    @php
                        $replies = App\Models\ReportReply::with('reply_user')->where('report_id', $report->id)->latest()->get();
                    @endphp

                    <div class="card">
                        <div class="card-body">
                            @foreach ($replies as $item)
                                <div class="border-bottom mb-2 bg-primary p-3 rounded">
                                    <div class="d-flex justify-content-between row">
                                        <div class="mb-1 h5 col-6 text-white">{{ $item->reply_user->name }}</div>
                                        <div class="col-6 text-white text-right">{{ $item->created_at->diffForHumans() }}</div>
                                    </div>
                                    <p class="mb-1 text-white">{{ $item->message }}</small>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
<!--End Main Content -->
@endsection
