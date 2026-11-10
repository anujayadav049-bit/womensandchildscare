@extends('layouts.app')

@section('title', 'Book Appointment - Women & Childs Care')

@section('content')
  <section class="page-title" style="background-image: url({{ asset('images/resource/page-title.jpg') }});">
    <div class="auto-container"><div class="title-outer text-center">
      <div class="h1 title">Book Appointment</div>
      <ul class="page-breadcrumb"><li><a href="{{ url('/') }}">Home</a></li><li>Book Appointment</li></ul>
    </div></div>
  </section>

  <section class="services-details pt-120 pb-120" style="background:#fdf8f9;">
    <div class="container"><div class="row g-4">

      <div class="col-lg-5">
        <span class="sub-title">Book Appointment</span>
        <div class="h2 mt-2">Your Visit, <br/>Booked In 1 Minute</div>
        <p class="mt-3">Form bharo, hum call / WhatsApp / Email par confirm kar denge. Emergency ho to direct call karo.</p>

        <div class="info-box"><div class="ic"><i class="fa-solid fa-user-doctor"></i></div><div><b>Dr. Anubha Gupta</b><br/><span class="text-muted">Gynaecologist - Women / Pregnancy</span><br/><small>Mon - Sat | 8:00 - 6:30</small></div></div>
        <div class="info-box"><div class="ic"><i class="fa-solid fa-baby"></i></div><div><b>Dr. Devendra Agarwal</b><br/><span class="text-muted">Pediatrician - Newborn / Child</span><br/><small>Mon - Sat | 8:00 - 6:30</small></div></div>
        <div class="info-box"><div class="ic"><i class="fa-solid fa-location-dot"></i></div><div><b>Clinic Address</b><br/>H.No-211, Sector-31, Gurgaon, Haryana, India</div></div>
        <div class="info-box"><div class="ic"><i class="fa-solid fa-phone"></i></div><div><b>Call / WhatsApp</b><br/><a href="tel:+919015598903"><b>+91-90 15 59 8903</b></a></div></div>
        <div class="info-box"><div class="ic"><i class="fa-solid fa-envelope"></i></div><div><b>Email Us</b><br/><a href="mailto:info@womenandchildcare.com"><b>info@womenandchildcare.com</b></a></div></div>
      </div>

      <div class="col-lg-7">
        <div class="appt-card">
          <div class="h3 mb-1">Appointment Form</div>
          <p class="text-muted mb-4">Saari details bharo — WhatsApp ya Email par bhejo.</p>
          @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif
         <form id="apptForm" method="POST" action="{{ url('/appointment') }}">
  @csrf
  <div class="row">
    <div class="col-md-6 mb-3"><label>Patient Name *</label><input type="text" name="name" id="pName" class="form-control" placeholder="e.g. Priya Sharma" required /></div>
    <div class="col-md-6 mb-3"><label>Phone Number *</label><input type="tel" name="phone" id="pPhone" class="form-control" placeholder="10-digit mobile" pattern="[0-9]{10}" required /></div>
    <div class="col-md-12 mb-3"><label>Email Address *</label><input type="email" name="email" id="pEmail" class="form-control" placeholder="e.g. priya@gmail.com" required /></div>

    <div class="col-12 mb-3"><label>Select Doctor *</label>
      <div class="row g-2">
        <div class="col-md-6"><label class="doctor-chip"><input type="radio" name="doctor" value="Dr. Anubha Gupta - Gynaecologist" checked /> <span><b>Dr. Anubha Gupta</b><br/><small>Gynaecologist</small></span></label></div>
        <div class="col-md-6"><label class="doctor-chip"><input type="radio" name="doctor" value="Dr. Devendra Agarwal - Pediatrician" /> <span><b>Dr. Devendra Agarwal</b><br/><small>Pediatrician</small></span></label></div>
      </div>
    </div>

    <div class="col-md-6 mb-3"><label>Select Service *</label>
      <select id="pService" name="service" class="form-select" required>
        <option value="">-- Select --</option>
        <option>Pregnancy Care</option><option>Normal & Safe Delivery</option><option>High-Risk Pregnancy</option><option>Women's Health</option><option>Newborn Care</option><option>Child Vaccination</option><option>Child Growth & Development</option><option>General Pediatrics</option><option>Other / General Check-up</option>
      </select>
    </div>
    <div class="col-md-6 mb-3"><label>Patient Age</label><input type="text" id="pAge" name="age" class="form-control" placeholder="e.g. 28 years / 2 years" /></div>
    <div class="col-md-6 mb-3"><label>Preferred Date *</label><input type="date" id="pDate" name="date" class="form-control" required /></div>
    <div class="col-md-6 mb-3"><label>Preferred Time *</label>
      <select id="pTime" name="time" class="form-select" required>
        <option value="">-- Select Time --</option><option>Morning (8:00 - 11:00)</option><option>Afternoon (11:00 - 2:00)</option><option>Evening (4:00 - 6:30)</option>
      </select>
    </div>
    <div class="col-12 mb-3"><label>Your Problem / Message</label><textarea id="pMessage" name="message" class="form-control" rows="3" placeholder="e.g. 5 months pregnancy, routine checkup..."></textarea></div>

    <div class="col-md-6 mb-2"><button type="submit" name="submit_type" value="whatsapp" class="btn-whatsapp"><i class="fa-brands fa-whatsapp"></i> Send on WhatsApp</button></div>
    <div class="col-md-6 mb-2"><button type="submit" name="submit_type" value="email" class="btn-email"><i class="fa-solid fa-envelope"></i> Send via Email</button></div>
    <div class="col-12"><p class="text-center mt-2 mb-0" style="font-size:13px;">WhatsApp dabao to WhatsApp khulega, Email dabao to Email app khulega — details Admin me bhi save ho jayengi.</p></div>
  </div>
</form>
</div>
      </div>

    </div></div>
  </section>

@endsection