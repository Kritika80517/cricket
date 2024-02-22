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
                            <h4 class="card-title mb-1 fs-22">Consectetur tenetur quia quis rerum optio quo eos. </h4>
                            <small class="fs-13"><i class="feather feather-clock text-muted me-1"></i>Created At
                                <span class="text-muted">
                                    Thu, 01 Aug 2019, 01:53 PM (4 years ago)
                                </span>
                            </small>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header border-0 mb-1 d-block">
                            <h4>Report Reply</h4>
                        </div>
                        <div class="card-body">
                            <form action="">

                                <div class="form-group">
                                    <textarea class="summernote form-control " rows="" cols="100" name="comment" id="summernoteempty" aria-multiline="true" style="display: none;">  </textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Reply</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
<!--End Main Content -->
@endsection
