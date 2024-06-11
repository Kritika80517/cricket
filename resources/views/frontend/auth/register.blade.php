@extends('frontend.layouts.master')
@section('frontend-content')

    <section class="content-info">
        <div class="container paddings">
            <!-- Content Text-->
            <div class="panel-box block-form">
                <div class="titles text-center">
                    <h4>REGISTER YOUR EVENT NOW!.</h4>
                </div>

                <div class="info-panel">
                    {{-- <div class="row">
                        <div class="col-md-12 text-center">
                            <p class="lead">Feel the thrill of seeing a global sporting event in one of the world's most incredible cities. Headlining the calendar is the Rusia World Cup</p>
                        </div>
                    </div> --}}

                    <form class="form-horizontal form-theme " action="{{route('register.submit')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-sm-3">User Name</label>
                            <div class="col-sm-9">
                                <input type="text" id="ername" name="name" class="form-control" placeholder="Type your name" required="">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-sm-3"> E-mail</label>
                            <div class="col-sm-9">
                                <input type="email" id="ermail" name="email" class="form-control" placeholder="Type your email" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Contact Number</label>
                            <div class="col-sm-9">
                                <input type="number" id="erphone" name="phone" class="form-control" placeholder="Type your phone" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3">Password</label>
                            <div class="col-sm-9">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Type your password" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3">Confirm Password</label>
                            <div class="col-sm-9">
                                <input type="password" id="confirm_password" name="password_confirmation" class="form-control" placeholder="Type your confirm password" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="offset-sm-3 col-sm-9">
                                <input type="submit" value="submit" class="bnt btn-iw">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <!-- End Content Text-->
        </div>
        
    </section>
@endsection