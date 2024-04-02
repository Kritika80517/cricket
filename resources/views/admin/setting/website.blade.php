@extends('admin.layouts.master')
@section('pagetitle', 'Website ')
@section('admin-content')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Website Setting</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Website </div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-md-flex justify-content-between">
                            <h4>Home </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{url('admin/setting/website')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    
                                    
                                    @php($about_company = \App\Models\Setting::where('key','about_company')->first())
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="about_company">About company (30 - 40 characters) for footer section.</label>
                                            <textarea type="text" name="about_company" class="form-control" id="about_company" >{{$about_company ? $about_company->value : ""}}</textarea>
                                        </div>
                                    </div>

                                    @php($phone = \App\Models\Setting::where('key','phone')->first())
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input type="text" name="phone" class="form-control" id="phone" value="{{$phone ? $phone->value : ""}}">
                                        </div>
                                    </div>
                                    
                                    @php($phone2 = \App\Models\Setting::where('key','phone2')->first())
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone2">Whatsapp Number</label>
                                            <input type="text" name="phone2" class="form-control" id="phone2" value="{{$phone2 ? $phone2->value : ""}}">
                                        </div>
                                    </div>
                                    
                                    @php($email = \App\Models\Setting::where('key','email')->first())
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control" id="email" value="{{$email ? $email->value : ""}}">
                                        </div>
                                    </div>
                                    
                                    @php($email2 = \App\Models\Setting::where('key','email2')->first())
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email2">Contact Email</label>
                                            <input type="email" name="email2" class="form-control" id="email2" value="{{$email2 ? $email2->value : ""}}">
                                        </div>
                                    </div>
                                    
                                    @php($favicon = \App\Models\Setting::where('key','favicon')->first())
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="thumb">Favicon</label>
                                            <input class="form-control" type='file' name='favicon'/>
                                        </div>
                                    </div>
                                    
                                    @php($logo = \App\Models\Setting::where('key','logo')->first())
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="thumb">Logo</label>
                                            <input class="form-control" type='file' name='logo'/>
                                        </div>
                                    </div>
                                    
                                    @php($address = \App\Models\Setting::where('key','address')->first())
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <textarea type="text" name="address" class="form-control" id="address" >{{$address ? $address->value : ""}}</textarea>
                                            {{-- <input type="text" name="address" class="form-control" id="address" value="{{$address ? $address->value : ""}}"> --}}
                                        </div>
                                    </div>

                                    <div class="col-md-12 text-right">
                                        <div class="form-group">
                                            <a href="{{ url()->previous() }}" style="font-size: 15px;" class="btn btn-dark btn-lg">Back</a>
                                            <button type="submit" style="font-size: 15px;" class="btn btn-primary btn-lg">Submit</button>
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

@endsection