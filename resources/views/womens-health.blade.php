@extends('layouts.app')

@section('title', "Women's Health - Women & Childs Care")

@section('content')
<!-- Page Title -->
  <section class="page-title" style="background-image: url({{ asset('images/resource/page-title.jpg') }});">
    <div class="auto-container"><div class="title-outer text-center">
      <div class="h1 title">Women's Health</div>
      <ul class="page-breadcrumb"><li><a href="{{ url('/') }}">Home</a></li><li>Women's Health</li></ul>
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
            <li><a href="{{ url('/high-risk-pregnancy') }}"><i class="fas fa-angle-right"></i><span>High-Risk Pregnancy</span></a></li>
            <li><a href="{{ url('/womens-health') }}" class="current"><i class="fas fa-angle-right"></i><span>Women's Health</span></a></li>
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
          <img class="w-100" src="{{ asset('images/resource/service-details.jpg') }}" alt="Women's Health" />
          <div class="h3 mt-4">Service Overview</div>
          <p>At <b>Women & Child Care, Gurgaon</b>, we care for women at every stage of life — not just during pregnancy. From periods problems, PCOS, hormonal imbalance, to menopause and general gynaecology check-ups, we listen first and then treat.</p>
          <p>Many women ignore small problems for years. We believe every woman deserves to be heard, checked properly, and treated with respect and privacy.</p>

          <div class="content mt-40"><div class="text">
            <div class="h3">We deliver gentle support every day</div>
            <p>No hesitation, no judgement. You can talk openly about any women's health issue. Dr. Anubha Gupta will explain the problem in simple language and give you a clear, honest treatment plan.</p>
            <blockquote class="blockquote-one">A Healthy Woman Makes A Healthy Family — Take Care of Yourself First.</blockquote>
          </div>
          <div class="feature-list mt-4"><div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 column"><img class="mb-3" src="{{ asset('images/resource/service-d1.jpg') }}" alt="images" /><p><b>We Treat:</b> PCOS, Irregular Periods, White Discharge, Fibroids, Hormonal Problems, Thyroid.</p></div>
            <div class="col-lg-6 col-md-6 col-sm-12 column"><img class="mb-3" src="{{ asset('images/resource/service-d2.jpg') }}" alt="images" /><p><b>We Provide:</b> Gynaecology Check-up, Pap Smear, Ultrasound Guidance, Menopause Care, General Counselling.</p></div>
          </div></div>
          </div>

          <div class="mt-25">
            <div class="h3">Frequently Asked Question</div>
            <p>Most commonly asked questions about Women's Health —</p>
            <ul class="accordion-box">
              <li class="accordion block"><div class="acc-btn">How often should I get a women's health check-up? <i class="icon fa-solid fa-chevron-down"></i></div><div class="acc-content"><div class="content"><div class="text">Once a year is good for every woman. If you have PCOS, thyroid, or period problems, your doctor may ask you to come more often.</div></div></div></li>
              <li class="accordion block active-block"><div class="acc-btn active">Is PCOS curable? <i class="icon fa-solid fa-chevron-down"></i></div><div class="acc-content current"><div class="content"><div class="text">PCOS can be managed very well with the right medicines, diet, exercise and regular follow-up. Many women with PCOS conceive naturally with proper treatment.</div></div></div></li>
              <li class="accordion block"><div class="acc-btn">How do I book an appointment? <i class="icon fa-solid fa-chevron-down"></i></div><div class="acc-content"><div class="content"><div class="text">Call us on <b>+91-90 15 59 8903</b>. Clinic: H.No-211, Sector-31, Gurgaon. Timing: Mon - Sat, 8:00 - 6:30.</div></div></div></li>
            </ul>
          </div>
        </div>
      </div>

    </div></div>
  </section>
@endsection