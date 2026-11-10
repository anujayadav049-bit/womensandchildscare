@extends('layouts.app')

@section('title', 'Normal & Safe Delivery - Women & Childs Care')

@section('content')
<!-- Page Title -->
  <section class="page-title" style="background-image: url({{ asset('images/resource/page-title.jpg') }});">
    <div class="auto-container"><div class="title-outer text-center">
      <div class="h1 title">Normal & Safe Delivery</div>
      <ul class="page-breadcrumb"><li><a href="{{ url('/') }}">Home</a></li><li>Normal & Safe Delivery</li></ul>
    </div></div>
  </section>

  <!-- Services Details -->
  <section class="services-details pt-120 pb-120">
    <div class="container"><div class="row">

      <!-- Sidebar -->
      <div class="col-xl-4 col-lg-4">
        <div class="service-sidebar"><div class="sidebar-widget service-sidebar-single">
          <div class="sidebar-service-list"><ul>
            <li><a href="{{ url('/pregnancy-care') }}"><i class="fas fa-angle-right"></i><span>Pregnancy Care</span></a></li>
            <li><a href="{{ url('/normal-delivery') }}" class="current"><i class="fas fa-angle-right"></i><span>Normal & Safe Delivery</span></a></li>
            <li><a href="{{ url('/high-risk-pregnancy') }}"><i class="fas fa-angle-right"></i><span>High-Risk Pregnancy</span></a></li>
            <li><a href="{{ url('/womens-health') }}"><i class="fas fa-angle-right"></i><span>Women's Health</span></a></li>
            <li><a href="{{ url('/newborn-care') }}"><i class="fas fa-angle-right"></i><span>Newborn Care</span></a></li>
            <li><a href="{{ url('/child-vaccination') }}"><i class="fas fa-angle-right"></i><span>Child Vaccination</span></a></li>
            <li><a href="{{ url('/child-growth') }}"><i class="fas fa-angle-right"></i><span>Child Growth & Development</span></a></li>
            <li><a href="{{ url('/general-pediatrics') }}"><i class="fas fa-angle-right"></i><span>General Pediatrics</span></a></li>
          </ul></div>

          <div class="service-details-help">
            <div class="help-shape-1"></div><div class="help-shape-2"></div>
            <div class="h2 help-title">Contact with <br/> us for any <br/> advice</div>
            <div class="help-icon"><span class="lnr-icon-phone-handset"></span></div>
            <div class="help-contact"><p>Need help? Talk to an expert</p><a href="tel:+919015598903">+91-90 15 59 8903</a></div>
          </div>

          <div class="sidebar-widget service-sidebar-single mt-4">
            <div class="service-sidebar-single-btn"><a href="{{ url('/appointment') }}" class="theme-btn btn-style-four"><span class="btn-title"><span class="fas fa-phone"></span> Book Appointment</span></a></div>
          </div>
        </div></div>
      </div>

      <!-- Content -->
      <div class="col-xl-8 col-lg-8">
        <div class="services-details__content">
          <img class="w-100" src="{{ asset('images/resource/service-details.jpg') }}" alt="Normal & Safe Delivery" />
          <div class="h3 mt-4">Service Overview</div>
          <p>At <b>Women & Child Care, Gurgaon</b>, we give first priority to normal delivery. Dr. Anubha Gupta carefully monitors every case, plans the right time and the right approach for delivery, and explains everything in advance so that the mother feels calm and confident — not scared.</p>
          <p>A C-section is done only when it is medically necessary for the safety of the mother or the baby. Safety always comes first, but we always try our best for a normal, safe delivery.</p>

          <div class="content mt-40"><div class="text">
            <div class="h3">We deliver gentle support every day</div>
            <p>During delivery, a mother should feel calm, comfortable and safe. Our team stays with you at every step — from labour to delivery and after delivery.</p>
            <blockquote class="blockquote-one">Normal Delivery, Safe Delivery — Mother and Baby both safe, that is our first priority.</blockquote>
          </div>
          <div class="feature-list mt-4"><div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 column"><img class="mb-3" src="{{ asset('images/resource/service-d1.jpg') }}" alt="images" /><p><b>Delivery Planning:</b> Normal Delivery Planning, Painless Delivery Guidance, Safe C-Section (When Required).</p></div>
            <div class="col-lg-6 col-md-6 col-sm-12 column"><img class="mb-3" src="{{ asset('images/resource/service-d2.jpg') }}" alt="images" /><p><b>After Delivery:</b> Post-Delivery Care, Breastfeeding Support, Newborn Check-up.</p></div>
          </div></div>
          </div>

          <div class="mt-25">
            <div class="h3">Frequently Asked Question</div>
            <p>Most commonly asked questions about Normal Delivery —</p>
            <ul class="accordion-box">
              <li class="accordion block"><div class="acc-btn">Is normal delivery possible for everyone? <i class="icon fa-solid fa-chevron-down"></i></div><div class="acc-content"><div class="content"><div class="text">In most cases, yes. But in some cases, a C-section becomes necessary for the safety of the mother or baby. Dr. Anubha will guide you in advance with the right plan.</div></div></div></li>
              <li class="accordion block active-block"><div class="acc-btn active">Can a family member stay with me during delivery? <i class="icon fa-solid fa-chevron-down"></i></div><div class="acc-content current"><div class="content"><div class="text">Yes, we understand the importance of family support to keep the mother comfortable. This is discussed in advance during your delivery planning.</div></div></div></li>
              <li class="accordion block"><div class="acc-btn">How do I book an appointment? <i class="icon fa-solid fa-chevron-down"></i></div><div class="acc-content"><div class="content"><div class="text">Call us on <b>+91-90 15 59 8903</b>. Clinic: H.No-211, Sector-31, Gurgaon. Timing: Mon - Sat, 8:00 - 6:30.</div></div></div></li>
            </ul>
          </div>
        </div>
      </div>

    </div></div>
  </section>
@endsection