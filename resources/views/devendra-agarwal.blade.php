@extends('layouts.app')

@section('title', 'Dr. Devendra Agarwal - Women & Childs Care')

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
        <img src="{{ asset('images/resource/team1-1.jpg') }}" alt="Dr. Devendra Agarwal">
      </div>

      <div class="dr-info">
        <span class="dr-tag">● AVAILABLE - WOMEN & CHILD CARE, GURGAON</span>
        <h2>Dr. Devendra Agarwal</h2>
        <h3>MBBS, MD — Pediatrics | Child Specialist</h3>
        <p class="sub">16 Years Experience | Well experienced Pediatrician and Best Child Specialist. Gentle, patient and trusted care for your child - from newborn to teenager.</p>

        <div class="dr-meta">
          <div><small>Experience</small><b>16+ Years</b></div>
          <div><small>Education</small><b>Maulana Azad Medical College</b></div>
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
        <h4>About Dr. Devendra Agarwal</h4>
        <p>Dr. Devendra Agarwal is a well experienced Pediatrician and Child Specialist with 16 years of experience in the field of Pediatrics. He has worked at GB Pant Hospital and Lok Nayak Hospital, Delhi.</p>
        <p>He completed his medical degree from the renowned Maulana Azad Medical College, Delhi — one of India's most prestigious medical institutes.</p>
        <p>He is known for his calm nature, clear guidance to parents and gentle handling of children. For him, every child deserves personal attention, correct treatment and happy, healthy growth.</p>
      </div>

      <div class="dr-box">
        <h4>Expertise & Specialities</h4>
        <ul class="dr-list">
          <li><span>✓</span> Newborn Care & Infant Health</li>
          <li><span>✓</span> Child Vaccination & Immunization</li>
          <li><span>✓</span> Child Growth & Development</li>
          <li><span>✓</span> Fever, Infection & General Pediatrics</li>
          <li><span>✓</span> Nutrition & Parent Counselling</li>
        </ul>
      </div>
    </div>

  </div>
</section>
<!--Team Details End-->
@endsection