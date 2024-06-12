@extends('frontend.layouts.master')
@section('frontend-content')

    <section class="content-info">
        <div class="container paddings">
            <!-- Content Text-->
            <div class="panel-box block-form">
                <div class="titles text-center">
                    <h4>LOGIN YOUR EVENT NOW!.</h4>
                </div>

                <div class="info-panel">
                    <form class="form-horizontal form-theme" action="{{route('login.submit')}}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label class="control-label col-sm-3"> E-mail</label>
                            <div class="col-sm-9">
                                <input type="email" id="ermail" name="email" class="form-control" placeholder="Type your email" required="">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-sm-3">Password</label>
                            <div class="col-sm-9">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Type your password" required="">
                            </div>
                        </div>
                        <div class="form-group m-0 p-0">
                            <div class="col-sm-12">
                                <a href="{{route('forgot.password')}}" style="float: right; font-size: 14px;">Forgot Password</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" value="submit" class="bnt btn-iw">Login</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <!-- End Content Text-->
        </div>
        
    </section>
@endsection