@extends('layouts.app')

@section('title', 'High-Risk Pregnancy - Women & Childs Care')

@section('content')
<!-- Page Title -->
  <section class="page-title" style="background-image: url({{ asset('images/resource/page-title.jpg') }});">
    <div class="auto-container"><div class="title-outer text-center">
      <div class="h1 title">High-Risk Pregnancy</div>
      <ul class="page-breadcrumb"><li><a href="{{ url('/') }}">Home</a></li><li>High-Risk Pregnancy</li></ul>
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
            <li><a href="{{ url('/normal-delivery') }}"><i class="fas fa-angle-right"></i><span>Normal & Safe Delivery</span></a></li>
            <li><a href="{{ url('/high-risk-pregnancy') }}" class="current"><i class="fas fa-angle-right"></i><span>High-Risk Pregnancy</span></a></li>
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
          <img class="w-100" src="{{ asset('images/resource/service-details.jpg') }}" alt="High-Risk Pregnancy" />
          <div class="h3 mt-4">Service Overview</div>
          <p>At <b>Women & Child Care, Gurgaon</b>, we provide special, close care for high-risk pregnancies. If you have diabetes, high blood pressure, thyroid, twin pregnancy, previous C-section, or any other complication — you need extra monitoring. We do that with care, not fear.</p>
          <p>Dr. Anubha Gupta creates a personal care plan for every high-risk case — more frequent check-ups, growth scans, proper medicines, and a safe delivery plan well in advance.</p>

          <div class="content mt-40"><div class="text">
            <div class="h3">We deliver gentle support every day</div>
            <p>High-risk does not mean unsafe. With the right doctor, right monitoring and right timing, most high-risk pregnancies end with a healthy mother and a healthy baby. We are here to make that happen.</p>
            <blockquote class="blockquote-one">High-Risk Pregnancy Needs Extra Care — And We Give It With Extra Love and Attention.</blockquote>
          </div>
          <div class="feature-list mt-4"><div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 column"><img class="mb-3" src="{{ asset('images/resource/service-d1.jpg') }}" alt="images" /><p><b>We Manage:</b> Diabetes in Pregnancy, High BP / Pre-eclampsia, Thyroid, Twin Pregnancy, Previous C-Section.</p></div>
            <div class="col-lg-6 col-md-6 col-sm-12 column"><img class="mb-3" src="{{ asset('images/resource/service-d2.jpg') }}" alt="images" /><p><b>We Provide:</b> Frequent Check-ups, Growth Scans, Safe Delivery Planning, Post-Delivery Care.</p></div>
          </div></div>
          </div>

          <div class="mt-25">
            <div class="h3">Frequently Asked Question</div>
            <p>Most commonly asked questions about High-Risk Pregnancy —</p>
            <ul class="accordion-box">
              <li class="accordion block"><div class="acc-btn">What makes a pregnancy high-risk? <i class="icon fa-solid fa-chevron-down"></i></div><div class="acc-content"><div class="content"><div class="text">Age above 35, diabetes, high BP, thyroid, twin pregnancy, previous miscarriage or C-section, or low baby growth can make a pregnancy high-risk. It only means you need closer monitoring.</div></div></div></li>
              <li class="accordion block active-block"><div class="acc-btn active">Can I still have a normal delivery in high-risk pregnancy? <i class="icon fa-solid fa-chevron-down"></i></div><div class="acc-content current"><div class="content"><div class="text">In many cases, yes. It depends on your condition and baby's health. Your doctor will decide the safest delivery method for you.</div></div></div></li>
              <li class="accordion block"><div class="acc-btn">How do I book an appointment? <i class="icon fa-solid fa-chevron-down"></i></div><div class="acc-content"><div class="content"><div class="text">Call us on <b>+91-90 15 59 8903</b>. Clinic: H.No-211, Sector-31, Gurgaon. Timing: Mon - Sat, 8:00 - 6:30.</div></div></div></li>
            </ul>
          </div>
        </div>
      </div>

    </div></div>
  </section>
@endsection