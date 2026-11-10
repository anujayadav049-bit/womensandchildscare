@extends('layouts.app')

@section('title', 'Dr. Anubha Gupta - Women & Childs Care')

@section('content')
<!-- Start main-content -->
    <section class="page-title" style="background-image: url({{ asset('images/resource/page-title.jpg') }});">
      <div class="auto-container">
        <div class="title-outer text-center"> <div class="h1 title">Doctors Details</div>
          <ul class="page-breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>Doctors Details</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->
<!--Team Details Start-->
<style>
  .dr-profile{padding:70px 0; background:#fff;}
  .dr-card{display:flex; gap:30px; background:#f8fbfb; border:1px solid #e2efed; border-radius:20px; padding:30px; align-items:flex-start;}
  .dr-photo{width:340px; min-width:340px; height:420px; border-radius:16px; overflow:hidden;}
  .dr-photo img{width:100%; height:100%; object-fit:cover; object-position:top;}
  .dr-info{flex:1; padding-top:5px;}
  .dr-tag{display:inline-block; background:#0a5a54; color:#fff; font-size:12px; font-weight:600; letter-spacing:.5px; padding:6px 13px; border-radius:30px; margin-bottom:14px;}
  .dr-info h2{font-size:36px; line-height:1.15; margin:0 0 6px; color:#111;}
  .dr-info h3{font-size:17px; color:#0a5a54; font-weight:600; margin:0 0 12px;}
  .dr-info p.sub{color:#555; line-height:1.65; margin:0 0 20px; font-size:16px;}
  .dr-meta{display:grid; grid-template-columns:1fr 1fr; gap:12px; margin-bottom:20px;}
  .dr-meta div{background:#fff; border:1px solid #e2efed; border-radius:12px; padding:13px 15px;}
  .dr-meta small{display:block; color:#888; font-size:12px; margin-bottom:3px; text-transform:uppercase; letter-spacing:.5px;}
  .dr-meta b{font-size:15px; color:#111;}
  .dr-meta b a{color:#111; text-decoration:none;}
  .dr-btns{display:flex; gap:10px; flex-wrap:wrap;}
  .dr-btns a{padding:12px 24px; border-radius:30px; font-weight:600; text-decoration:none; font-size:15px;}
  .dr-btns .book{background:#0a5a54; color:#fff;}
  .dr-btns .call{background:#fff; color:#0a5a54; border:1.5px solid #0a5a54;}
  .dr-bottom{display:grid; grid-template-columns:1.2fr .8fr; gap:30px; margin-top:30px;}
  .dr-box{background:#fff; border:1px solid #e2efed; border-radius:16px; padding:26px;}
  .dr-box h4{font-size:20px; margin:0 0 14px; color:#111;}
  .dr-box p{color:#555; line-height:1.75; margin:0 0 12px; font-size:15.5px;}
  .dr-award{background:#fff8e6; border:1px solid #f2d98c; border-radius:12px; padding:14px 16px; font-weight:600; color:#7a5a00; font-size:15px; margin-top:6px;}
  .dr-list{list-style:none; padding:0; margin:0;}
  .dr-list li{padding:12px 0; border-bottom:1px solid #eee; font-size:15.5px; color:#333; display:flex; gap:10px; align-items:center;}
  .dr-list li:last-child{border-bottom:0;}
  .dr-list li span{width:26px; height:26px; min-width:26px; background:#e6f4f1; color:#0a5a54; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:13px; font-weight:700;}
  @media(max-width:768px){
    .dr-card{flex-direction:column; padding:20px;}
    .dr-photo{width:100%; min-width:100%; height:380px;}
    .dr-meta{grid-template-columns:1fr;}
    .dr-bottom{grid-template-columns:1fr;}
  }
</style>

<section class="dr-profile">
  <div class="container">

    <div class="dr-card">
      <div class="dr-photo">
        <img src="{{ asset('images/resource/team1-2.jpg') }}" alt="Dr. Anubha Gupta">
      </div>

      <div class="dr-info">
        <span class="dr-tag">● AVAILABLE - CLOUDNINE & WOMEN & CHILD CARE</span>
        <h2>Dr. Anubha Gupta</h2>
        <h3>MBBS, DGO — Gynecologist & Obstetrician</h3>
        <p class="sub">14 Years Experience | Consultant Obstetrician & Gynaecologist at Cloudnine Hospital, Gurgaon and Women & Child Care. Compassionate, calm and trusted care for every mother & child.</p>

        <div class="dr-meta">
          <div><small>Experience</small><b>14+ Years</b></div>
          <div><small>Training</small><b>CMC, Kolkata</b></div>
          <div><small>Phone</small><b><a href="tel:+919015598903">+91-90 15 59 8903</a></b></div>
          <div><small>Email</small><b><a href="mailto:info@womenandchildcare.com">info@womenandchildcare.com</a></b></div>
        </div>

        <div class="dr-btns">
          <a href="{{ url('/appointment') }}" class="book">Book Appointment →</a>
          <a href="{{ url('/contact') }}" class="call">Visit Clinic</a>
        </div>
        <p style="margin:14px 0 0; color:#888; font-size:14px;">📍 Women & Child Care, H.No-211, Sector-31, Gurgaon, Haryana</p>
      </div>
    </div>

    <div class="dr-bottom">
      <div class="dr-box">
        <h4>About Dr. Anubha Gupta</h4>
        <p>Dr. Anubha Gupta is a Consultant Obstetrician & Gynaecologist with 14 years of experience, practising at Cloudnine Hospital, Gurgaon and Women & Child Care. She has completed her training from the esteemed CMC, Kolkata and has subsequently worked with various renowned hospitals in Delhi NCR.</p>
        <p>She believes every pregnancy deserves personal attention, safety and calm guidance — from first check-up to delivery and after.</p>
        <div class="dr-award">🏅 Gold Medal & Dr. B. Halder Award — For Excellence in Obstetrics & Gynaecology</div>
      </div>

      <div class="dr-box">
        <h4>Expertise & Specialities</h4>
        <ul class="dr-list">
          <li><span>✓</span> Pregnancy Care & High-Risk Pregnancy</li>
          <li><span>✓</span> Normal & Safe Delivery</li>
          <li><span>✓</span> Gynaecology & Women’s Health</li>
          <li><span>✓</span> Child Vaccination & Growth</li>
          <li><span>✓</span> Patient Counselling & Comfort Care</li>
        </ul>
      </div>
    </div>

  </div>
</section>
<!--Team Details End-->
  <!--Contact Details Start-->
  <section class="team-contact-form">
    <div class="container pt-120 pb-120">
      <div class="sec-title text-center"> <div class="h2 section-title__title">Feel Free to Write Our <br /> Tecnology Experts</div></div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          @if(session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
          @endif
          <!-- Contact Form -->
          <form id="contact_form" name="contact_form" class="" action="{{ url('/contact') }}" method="post">
            @csrf
            <div class="row">
              <div class="col-sm-6"><div class="mb-3"><input name="form_name" class="form-control" type="text" placeholder="Enter Name" required=""></div></div>
              <div class="col-sm-6"><div class="mb-3"><input name="form_email" class="form-control required email" type="email" placeholder="Enter Email"></div></div>
            </div>
            <div class="row">
              <div class="col-sm-6"><div class="mb-3"><input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject"></div></div>
              <div class="col-sm-6"><div class="mb-3"><input name="form_phone" class="form-control" type="text" placeholder="Enter Phone"></div></div>
            </div>
            <div class="mb-3"><textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea></div>
            <div class="mb-3 text-center">
              <button type="submit" class="theme-btn btn-style-four" data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
              <button type="reset" class="theme-btn btn-style-four"><span class="btn-title">Reset</span></button>
            </div>
          </form>
          <!-- Contact Form Validation-->
        </div>
      </div>
    </div>
  </section>
  <!--Contact Details End-->
@endsection