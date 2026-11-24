@extends('layouts.app')
@section('title', (($doctor->name ?: $page->team1_name ?: 'Dr. Devendra Agarwal')) . ' - Women & Childs Care')
@section('content')
@php
  // FIX: ?: ka matlab hai - Khali ho ya null ho - Toh agla wala lo! Kabhi Blank nahi hoga!
  $dName = $doctor->name ?: $page->team1_name ?: $page->doctor_name ?: 'Dr. Devendra Agarwal';
  $dDesig = $doctor->designation ?: $page->team1_role ?: $page->doctor_designation ?: 'MBBS, MD — Senior Pediatrician';
  $dTag = $doctor->tag ?: $page->doctor_tag ?: 'AVAILABLE - WOMEN & CHILD CARE, GURGAON';
  $dBio = $doctor->about ?: $page->team1_about ?: $page->doctor_short_bio ?: 'Senior Pediatrician with 20+ years of experience in newborn care, child growth & vaccination. Trusted care for every child.';
  $dExp = $doctor->experience ?: $page->team1_experience ?: $page->doctor_experience ?: '20+ Years';
  $dEdu = $doctor->education ?: $doctor->qualification ?: $page->team1_qualification ?: $page->doctor_education ?: 'MBBS, MD - Pediatrics';
  $dPhone = $doctor->phone ?: $page->team1_phone ?: $page->doctor_phone ?: $page->contact_phone ?: '+91-90 15 59 8903';
  $dEmail = $doctor->email ?: $page->team1_email ?: $page->doctor_email ?: $page->contact_email ?: 'info@womenandchildcare.com';
  $dAddr = $doctor->address ?: $page->team1_address ?: $page->doctor_address ?: $page->contact_address ?: 'Women & Child Care, H.No-211, Sector-31, Gurgaon, Haryana';
  $dAbout = $doctor->about ?: $page->team1_about ?: $page->doctor_about ?: $page->content ?: 'Dr. Devendra Agarwal is a Senior Pediatrician with 20+ years of experience. He specializes in newborn care, child growth, vaccination and general pediatrics. He believes every child deserves personal attention, safety and calm guidance — from newborn to growing child.';
  $dExpList = $doctor->expertise ?: $doctor->specialization ?: $page->team1_specialization ?: $page->doctor_expertise ?: "Newborn Care\nChild Growth & Development\nChild Vaccination\nGeneral Pediatrics";
  $dTiming = $doctor->timing ?: $page->team1_timing ?: 'Mon - Sat, 10 AM - 2 PM';
  $dImg = $doctor->image ?: $page->team1_image ?: $page->doctor_image ?: 'images/resource/team1-1.jpg';
  $dBanner = $page->doctor_banner_image ?: 'images/resource/page-title.jpg';
@endphp
<section class="page-title" style="background-image: url({{ asset($dBanner) }});">
  <div class="auto-container"><div class="title-outer text-center"><div class="h1 title">Doctors Details</div>
    <ul class="page-breadcrumb"><li><a href="{{ url('/') }}">Home</a></li><li>Doctors Details</li></ul>
  </div></div>
</section>
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
  .dr-list{list-style:none; padding:0; margin:0;}
  .dr-list li{padding:12px 0; border-bottom:1px solid #eee; font-size:15.5px; color:#333; display:flex; gap:10px; align-items:center;}
  .dr-list li:last-child{border-bottom:0;}
  .dr-list li span{width:26px; height:26px; min-width:26px; background:#e6f4f1; color:#0a5a54; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:13px; font-weight:700;}
  @media(max-width:768px){ .dr-card{flex-direction:column; padding:20px;} .dr-photo{width:100%; min-width:100%; height:380px;} .dr-meta{grid-template-columns:1fr;} .dr-bottom{grid-template-columns:1fr;} }
</style>
<section class="dr-profile"><div class="container"><div class="dr-card">
  <div class="dr-photo"><img src="{{ asset($dImg) }}" alt="{{ $dName }}"></div>
  <div class="dr-info">
    <span class="dr-tag">● {{ $dTag }}</span>
    <h2>{{ $dName }}</h2>
    <h3>{{ $dDesig }}</h3>
    <p class="sub">{{ $dBio }}</p>
    <div class="dr-meta">
      <div><small>Experience</small><b>{{ $dExp }}</b></div>
      <div><small>Education</small><b>{{ $dEdu }}</b></div>
      <div><small>Phone</small><b><a href="tel:{{ $dPhone }}">{{ $dPhone }}</a></b></div>
      <div><small>Email</small><b><a href="mailto:{{ $dEmail }}">{{ $dEmail }}</a></b></div>
      <div><small>Timing</small><b>{{ $dTiming }}</b></div>
      <div><small>Specialization</small><b>{{ $dExpList }}</b></div>
    </div>
    <div class="dr-btns"><a href="{{ url('/appointment') }}" class="book">Book Appointment →</a><a href="{{ url('/contact') }}" class="call">Visit Clinic</a></div>
    <p style="margin:14px 0 0; color:#888; font-size:14px;">📍 {{ $dAddr }}</p>
  </div>
</div>
<div class="dr-bottom">
  <div class="dr-box"><h4>About {{ $dName }}</h4><p>{!! nl2br(e($dAbout)) !!}</p></div>
  <div class="dr-box"><h4>Expertise & Specialities</h4><ul class="dr-list">
    @foreach(explode("\n", $dExpList ?? '') as $item)
      @if(trim($item))<li><span>✓</span> {{ trim($item) }}</li>@endif
    @endforeach
  </ul></div>
</div></div></section>
@endsection