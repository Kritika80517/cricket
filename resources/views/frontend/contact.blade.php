@extends('frontend.layouts.master')
@section('frontend-content')

    <div id="map">
        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96675.78523415352!2d-74.04718227108513!3d40.78141356385996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2ed64fc3b013b%3A0xd813d2023b2ead16!2sNew+York+County%2C+Nueva+York%2C+EE.+UU.!5e0!3m2!1ses!2sco!4v1515849243841" 
        width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe> --}}
        <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30336.36954381804!2d78.0321882975363!3d20.593684025076314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4bf303c13ef71%3A0x7e3424c0ecfd6f24!2sIndia!5e0!3m2!1sen!2sin!4v1684767765763!5m2!1sen!2sin" 
        width="600" 
        height="450" 
        frameborder="0" 
        style="border:0" 
        allowfullscreen="">
    </iframe>
    
    </div>

    <section class="content-info">

        <div class="container">
            <div class="row paddings-mini">
                <!-- Left Content -->
                <div class="col-md-4">
                    <aside class="panel-box">
                        <div class="titles no-margin">
                            <h4>The Office</h4>
                        </div>
                        <div class="info-panel">
                            <address>
                              <strong>Sports Cup, Inc.</strong><br>
                              <i class="fa fa-map-marker"></i><strong>Address: </strong> {{getKeyValue('address') }}<br>
                              <i class="fa fa-plane"></i><strong>City: </strong>{{getKeyValue('address') }}<br>
                              <i class="fa fa-phone"></i> <abbr title="Phone">Phone:</abbr> {{getKeyValue('phone') }}
                            </address>
                        </div>
                    </aside>

                    <aside class="panel-box">
                        <div class="titles no-margin">
                            <h4>Emails Contact</h4>
                        </div>
                        <div class="info-panel">
                            <address>
                              <i class="fa fa-envelope"></i><strong>Email:</strong><a href="mailto:#"> {{getKeyValue('email') }}</a><br>
                              <i class="fa fa-envelope"></i><strong>Email:</strong><a href="mailto:#"> {{getKeyValue('email2') }}</a>
                            </address>
                        </div>
                    </aside>
                </div>
                <!-- End Left Content -->

                <!-- Right Content -->
                <div class="col-md-8">
                    <div class="panel-box">
                        <div class="titles no-margin">
                            <h4>Contact Form</h4>
                        </div>
                        <div class="info-panel">
                            <!-- Form Contact -->
                            <form class="form-theme" action="{{ url('contact/submit') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Your name *</label>
                                        <input type="text" required="required" value="" maxlength="100" class="form-control" name="name" id="name">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Your email address *</label>
                                        <input type="email" required="required" value="" maxlength="100" class="form-control" name="email" id="email">
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                        <label>Subject *</label>
                                        <input type="text" required="required" value="" maxlength="100" class="form-control" name="address" id="address">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Comment *</label>
                                        <textarea maxlength="5000" rows="10" class="form-control" name="message" style="height: 138px;" required="required"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        {{-- <input type="submit" value="send" class="btn btn-lg btn-primary"> --}}
                                        <button class="btn btn-lg btn-primary"  type="submit" value="send">Send</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End Form Contact -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="result"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Right Content -->
            </div>
        </div>

        
    </section>
@endsection