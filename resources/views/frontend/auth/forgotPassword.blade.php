@extends('frontend.layouts.master')
@section('frontend-content')

    <section class="content-info">
        <div class="container paddings">
            <!-- Content Text-->
            <div class="panel-box block-form">
                <div class="titles text-center">
                    <h4>FORGOT PASSWORD</h4>
                </div>

                <div class="info-panel">

                    <form class="form-horizontal form-theme" action="{{route('submit.forget.password')}}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label class="control-label col-sm-3"> E-mail</label>
                            <div class="col-sm-9">
                                <input type="email" id="ermail" name="email" class="form-control" placeholder="Type your email" required="">
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