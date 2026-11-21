@extends('layouts.app')
@section('title', ($doctor->name ?? 'Doctor') . ' - Women & Childs Care')
@section('content')
<section class="page-title" style="background-image: url({{ asset('images/resource/page-title.jpg') }});">
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
  <div class="dr-photo"><img src="{{ asset($doctor->image ?? 'images/resource/team1-1.jpg') }}" alt="{{ $doctor->name }}"></div>
  <div class="dr-info">
    <span class="dr-tag">● {{ $doctor->tag ?? 'AVAILABLE - WOMEN & CHILD CARE, GURGAON' }}</span>
    <h2>{{ $doctor->name }}</h2>
    <h3>{{ $doctor->designation }}</h3>
    <p class="sub">{{ $doctor->short_bio }}</p>
    <div class="dr-meta">
      <div><small>Experience</small><b>{{ $doctor->experience }}</b></div>
      <div><small>Education</small><b>{{ $doctor->education }}</b></div>
      <div><small>Phone</small><b><a href="tel:{{ $doctor->phone }}">{{ $doctor->phone }}</a></b></div>
      <div><small>Email</small><b><a href="mailto:{{ $doctor->email }}">{{ $doctor->email }}</a></b></div>
    </div>
    <div class="dr-btns"><a href="{{ url('/appointment') }}" class="book">Book Appointment →</a><a href="{{ url('/contact') }}" class="call">Visit Clinic</a></div>
    <p style="margin:14px 0 0; color:#888; font-size:14px;">📍 {{ $doctor->address }}</p>
  </div>
</div>
<div class="dr-bottom">
  <div class="dr-box"><h4>About {{ $doctor->name }}</h4>{!! nl2br(e($doctor->about)) !!}</div>
  <div class="dr-box"><h4>Expertise & Specialities</h4><ul class="dr-list">
    @foreach(explode("\n", $doctor->expertise ?? '') as $item)
      @if(trim($item))<li><span>✓</span> {{ trim($item) }}</li>@endif
    @endforeach
  </ul></div>
</div></div></section>
@endsection