@extends('admin.layouts.master')
@section('pagetitle', 'About ')
@section('admin-content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.18.10/slimselect.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.18.10/slimselect.min.css" rel="stylesheet" />
<style>
    
    .ss-main .ss-multi-selected {
        padding: 0.5rem 1rem !important;
    }
    .editor {
        height: 400px; /* Set the desired height here */
    }
</style>
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>About Setting</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">About </div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-md-flex justify-content-between">
                                <h4>About Us </h4>
                            </div>
                            <div class="card-body">
                                <form action="{{url('admin/setting/about')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        
                                        @php($about_us = \App\Models\Setting::where('key','about_us')->first())
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="about_us">About us</label>
                                                <textarea type="text" name="about_us" rows="5" class="form-control" id="editor" >{{$about_us ? $about_us->value : ""}}</textarea>
                                            </div>
                                        </div>

                                        {{-- @php($testimonials = \App\Models\Setting::where('key','testimonials')->first())
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="testimonials">Testimonials</label>
                                                <textarea type="text" name="testimonials" rows="5" class="form-control" id="editor2" >{{$testimonials ? $testimonials->value : ""}}</textarea>
                                            </div>
                                        </div> --}}
    
                                        {{-- @php($director_note = \App\Models\Setting::where('key','director_note')->first())
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="director_note">Director note</label>
                                                <textarea type="text" name="director_note" rows="5" class="form-control" id="editor4" >{{$director_note ? $director_note->value : ""}}</textarea>
                                            </div>
                                        </div> --}}
    
                                        {{-- <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="thumb">Director image (500x500 px)</label>
                                                <input class="form-control" type='file' name='director_image'/>
                                            </div>
                                        </div> --}}
                                        
                                        <div class="col-md-12 text-right">
                                            <div class="form-group">
                                                <a href="{{ url()->previous() }}" style="font-size: 15px;" class="btn btn-dark btn-lg">Back</a>
                                                <button type="submit" name="submit" style="font-size: 15px;" class="btn btn-primary btn-lg">
                                                    Submit
                                                </button>
                                            </div>
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--End Main Content -->
@endsection
