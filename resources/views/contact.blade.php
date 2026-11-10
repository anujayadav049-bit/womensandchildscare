@extends('layouts.app')

@section('title', 'Contact Us - Women & Childs Care')

@section('content')
<!-- Start main-content -->
    <section class="page-title" style="background-image: url({{ asset('images/resource/page-title.jpg') }});">
      <div class="auto-container">
        <div class="title-outer text-center"> <div class="h1 title">Contact</div>
          <ul class="page-breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>Contact</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

  <!--Contact Details Start-->
  <section class="contact-details">
    <div class="container pt-110 pb-70">
      <div class="row">
        <div class="col-xl-7 col-lg-6">
          <div class="sec-title black">
            <div class="h2">Feel free to write</div>
          </div>

          @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
          @endif

          <!-- Contact Form --><form id="contact_form" name="contact_form" action="{{ url('/contact') }}" method="post">
  @csrf
  <div class="row">
    <div class="col-sm-6">
      <div class="mb-3">
        <input name="name" class="form-control" type="text" placeholder="Enter Name" required>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="mb-3">
        <input name="email" class="form-control required email" type="email" placeholder="Enter Email" required>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="mb-3">
        <input name="subject" class="form-control required" type="text" placeholder="Enter Subject">
      </div>
    </div>
    <div class="col-sm-6">
      <div class="mb-3">
        <input name="phone" class="form-control" type="text" placeholder="Enter Phone" required>
      </div>
    </div>
  </div>
  <div class="mb-3">
    <textarea name="message" class="form-control required" rows="7" placeholder="Enter Message" required></textarea>
  </div>
  <div class="mb-5">
    <button type="submit" class="theme-btn btn-style-four"><span class="btn-title">Send message</span></button>
    <button type="reset" class="theme-btn btn-style-four"><span class="btn-title">Reset</span></button>
  </div>
</form>
          <!-- Contact Form Validation-->
        </div>
        <div class="col-xl-5 col-lg-6">
          <div class="contact-details__right">
            <div class="sec-title black">
              <div class="h2">Get in touch with us</div>
              <div class="text">Complete, safe and caring treatment for mother and child — from pregnancy to delivery and childhood, all under one roof.</div>
            </div>
            <ul class="list-unstyled contact-details__info">
              <li>
                <div class="icon"><span class="fa-classic fa-light fa-phone-plus"></span></div>
                <div class="text"> <div class="h6 mb-1">Have any question?</div>
                  <a href="tel:+919015598903"><span>Free</span> +91-90 15 59 8903</a>
                </div>
              </li>
              <li>
                <div class="icon"><span class="fal fa-envelope"></span></div>
                <div class="text"> <div class="h6 mb-1">Write email</div>
                  <a href="mailto:info@womenandchildcare.com">info@womenandchildcare.com</a>
                </div>
              </li>
              <li>
                <div class="icon"><span class="fal fa-location-arrow"></span></div>
                <div class="text"> <div class="h6 mb-1">Visit anytime</div>
                  <span>H.No-211, Sector-31, Gurgaon, Haryana India</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Contact Details End-->

 <!-- Map Section-->
  <section class="map-section" style="width:100%; padding:0; margin:0; line-height:0;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d56125.764982518565!2d77.047282!3d28.453627!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d228e32f6dc97%3A0x98fdae0ecc7d8598!2sWomen%20%26%20Child%20care!5e0!3m2!1sen!2sin!4v1794200527976!5m2!1sen!2sin" width="100%" height="450" style="border:0; width:100%; display:block;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
  </section>
  <!--End Map Section-->
@endsection