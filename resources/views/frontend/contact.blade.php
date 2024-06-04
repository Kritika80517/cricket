@extends('frontend.layouts.master')
@section('page-title', 'Contact')
@section('website-content')
<style>
   .card {
      box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        transition: .5s ease-in-out;
        border-radius: 4px;
        padding: 20px 10px 10px 10px;
    }
    .contact-info.card{
      padding: 43px 20px !important;
    }
</style>
<div class="inner-page-banner">
    <div class="container">
    </div>
 </div>
 <div class="inner-information-text">
    <div class="container">
       <h3>Contact</h3>
       <ul class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li class="active">Contact</li>
       </ul>
    </div>
 </div>

 <section id="contant" class="contant main-heading team">
    <div class="row">
       <div class="container">
          <div class="contact">
             <div class="col-md-12">
                <div class="map"> 
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.580671926123!2d77.31096031514461!3d28.582351982437654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfcad59dc9d0b%3A0xe4060212422c0b9a!2sLeopedia+Web+Solutions!5e0!3m2!1sen!2sin!4v1511962485065" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
             </div>
             <div class="col-md-6">
                <div class="contact-info card">
                   <div class="kode-section-title">
                      <h3>Contact Info</h3>
                   </div>
                   <div class="kode-forminfo">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam aliquip..</p>
                      <ul class="kode-form-list">
                         <li>
                            <i class="fa fa-home"></i> 
                            <p><strong>Address:</strong> 805 consectetur adipiscing elit, sed do eiusmod tempor</p>
                         </li>
                         <li>
                            <i class="fa fa-phone"></i> 
                            <p><strong>Phone:</strong>  123 456 7890</p>
                         </li>
                         <li>
                            <i class="fa fa-envelope-o"></i> 
                            <p><strong>Email:</strong> Info@sportyleague.com</p>
                         </li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="col-md-6">
                <div class="contact-us card">
                   <form method="POST" action="{{ url('contact/submit') }}" class="comments-form">
                     @csrf
                      <ul>
                         <li><input type="text" id="name" name="name" class="required" placeholder="Name *"></li>
                         <li><input type="text" id="email" name="email" class="required email" placeholder="Email *"></li>
                         <li><input type="text" name="address" id="address" placeholder="Address:"></li>
                         <li><textarea name="message" id="message" placeholder="Add your message"></textarea></li>
                        </ul>
                        <div class="d-flex justify-content-center w-100">
                           <button class="btn btn-danger" style="float: none" type="submit" value="send">Send</button>
                        </div>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>

@endsection