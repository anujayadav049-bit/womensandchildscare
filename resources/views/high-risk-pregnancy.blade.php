@extends('layouts.app')

@section('title', ($page->highrisk_title ?? 'High-Risk Pregnancy') . ' - Women & Childs Care')

@section('content')
<!-- Page Title -->
  <section class="page-title" style="background-image: url({{ asset($page->highrisk_banner ?? 'images/resource/page-title.jpg') }});">
    <div class="auto-container"><div class="title-outer text-center">
      <div class="h1 title">{{ $page->highrisk_title ?? 'High-Risk Pregnancy' }}</div>
      <ul class="page-breadcrumb"><li><a href="{{ url('/') }}">Home</a></li><li>{{ $page->highrisk_title ?? 'High-Risk Pregnancy' }}</li></ul>
    </div></div>
  </section>

  <!-- Services Details -->
  <section class="services-details pt-120 pb-120">
    <div class="container"><div class="row">

      <!-- Sidebar - 8 Service -->
      <div class="col-xl-4 col-lg-4">
        <div class="service-sidebar"><div class="sidebar-widget service-sidebar-single">
          <div class="sidebar-service-list"><ul>
            <li><a href="{{ url('/pregnancy-care') }}"><i class="fas fa-angle-right"></i><span>Pregnancy Care</span></a></li>
            <li><a href="{{ url('/normal-delivery') }}"><i class="fas fa-angle-right"></i><span>Safe Delivery</span></a></li>
            <li><a href="{{ url('/high-risk-pregnancy') }}" class="current"><i class="fas fa-angle-right"></i><span>High-Risk Pregnancy</span></a></li>
            <li><a href="{{ url('/womens-health') }}"><i class="fas fa-angle-right"></i><span>Women's Health</span></a></li>
            <li><a href="{{ url('/newborn-care') }}"><i class="fas fa-angle-right"></i><span>Newborn Care</span></a></li>
            <li><a href="{{ url('/child-vaccination') }}"><i class="fas fa-angle-right"></i><span>Child Vaccination</span></a></li>
            <li><a href="{{ url('/child-growth') }}"><i class="fas fa-angle-right"></i><span>Child Growth & Development</span></a></li>
            <li><a href="{{ url('/general-pediatrics') }}"><i class="fas fa-angle-right"></i><span>General Pediatrics</span></a></li>
          </ul></div>

          <div class="service-details-help">
            <div class="help-shape-1"></div><div class="help-shape-2"></div>
            <div class="h2 help-title">{{ $page->highrisk_help_title ?? 'Contact with us for any advice' }}</div>
            <div class="help-icon"><span class="lnr-icon-phone-handset"></span></div>
            <div class="help-contact"><p>{{ $page->highrisk_help_subtitle ?? 'Need help? Talk to an expert' }}</p><a href="tel:+919015598903">{{ $page->highrisk_help_phone ?? '+91-90 15 59 8903' }}</a></div>
          </div>

          <div class="sidebar-widget service-sidebar-single mt-4">
            <div class="service-sidebar-single-btn"><a href="{{ url('/appointment') }}" class="theme-btn btn-style-four"><span class="btn-title"><span class="fas fa-phone"></span> {{ $page->highrisk_book_btn ?? 'Book Appointment' }}</span></a></div>
          </div>
        </div></div>
      </div>

      <!-- Content - Sab Dynamic -->
      <div class="col-xl-8 col-lg-8">
        <div class="services-details__content">
          <img class="w-100" src="{{ asset($page->highrisk_main_image ?? 'images/resource/service-details.jpg') }}" alt="{{ $page->highrisk_title ?? 'High-Risk Pregnancy' }}" />

          <div class="h3 mt-4">{{ $page->highrisk_overview_title ?? 'Service Overview' }}</div>
          <p>{!! $page->highrisk_overview_p1 ?? 'At <b>Women & Child Care, Gurgaon</b>, we provide special, close care for high-risk pregnancies. If you have diabetes, high blood pressure, thyroid, twin pregnancy, previous C-section, or any other complication — you need extra monitoring. We do that with care, not fear.' !!}</p>
          <p>{!! $page->highrisk_overview_p2 ?? 'Dr. Anubha Gupta creates a personal care plan for every high-risk case — more frequent check-ups, growth scans, proper medicines, and a safe delivery plan well in advance.' !!}</p>

          <div class="content mt-40"><div class="text">
            <div class="h3">{{ $page->highrisk_support_title ?? 'We deliver gentle support every day' }}</div>
            <p>{!! $page->highrisk_support_text ?? 'High-risk does not mean unsafe. With the right doctor, right monitoring and right timing, most high-risk pregnancies end with a healthy mother and a healthy baby. We are here to make that happen.' !!}</p>
            <blockquote class="blockquote-one">{{ $page->highrisk_quote ?? 'High-Risk Pregnancy Needs Extra Care — And We Give It With Extra Love and Attention.' }}</blockquote>
          </div>
          <div class="feature-list mt-4"><div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 column"><img class="mb-3" src="{{ asset($page->highrisk_feature1_image ?? 'images/resource/service-d1.jpg') }}" alt="images" /><p><b>{{ $page->highrisk_feature1_title ?? 'We Manage:' }}</b> {{ $page->highrisk_feature1_text ?? 'Diabetes in Pregnancy, High BP / Pre-eclampsia, Thyroid, Twin Pregnancy, Previous C-Section.' }}</p></div>
            <div class="col-lg-6 col-md-6 col-sm-12 column"><img class="mb-3" src="{{ asset($page->highrisk_feature2_image ?? 'images/resource/service-d2.jpg') }}" alt="images" /><p><b>{{ $page->highrisk_feature2_title ?? 'We Provide:' }}</b> {{ $page->highrisk_feature2_text ?? 'Frequent Check-ups, Growth Scans, Safe Delivery Planning, Post-Delivery Care.' }}</p></div>
          </div></div>
          </div>

          {{-- FAQ - Sab Dynamic --}}
          <div class="mt-25">
            <div class="h3">{{ $page->highrisk_faq_title ?? 'Frequently Asked Question' }}</div>
            <p>{{ $page->highrisk_faq_subtitle ?? 'Most commonly asked questions about High-Risk Pregnancy —' }}</p>
            <ul class="accordion-box">
              <li class="accordion block"><div class="acc-btn">{{ $page->highrisk_faq1_q ?? 'What makes a pregnancy high-risk?' }} <i class="icon fa-solid fa-chevron-down"></i></div><div class="acc-content"><div class="content"><div class="text">{{ $page->highrisk_faq1_a ?? 'Age above 35, diabetes, high BP, thyroid, twin pregnancy, previous miscarriage or C-section, or low baby growth can make a pregnancy high-risk. It only means you need closer monitoring.' }}</div></div></div></li>
              <li class="accordion block active-block"><div class="acc-btn active">{{ $page->highrisk_faq2_q ?? 'Can I still have a normal delivery in high-risk pregnancy?' }} <i class="icon fa-solid fa-chevron-down"></i></div><div class="acc-content current"><div class="content"><div class="text">{{ $page->highrisk_faq2_a ?? 'In many cases, yes. It depends on your condition and baby\'s health. Your doctor will decide the safest delivery method for you.' }}</div></div></div></li>
              <li class="accordion block"><div class="acc-btn">{{ $page->highrisk_faq3_q ?? 'How do I book an appointment?' }} <i class="icon fa-solid fa-chevron-down"></i></div><div class="acc-content"><div class="content"><div class="text">{!! $page->highrisk_faq3_a ?? 'Call us on <b>+91-90 15 59 8903</b>. Clinic: H.No-211, Sector-31, Gurgaon. Timing: Mon - Sat, 8:00 - 6:30.' !!}</div></div></div></li>
            </ul>
          </div>
        </div>
      </div>

    </div></div>
  </section>
@endsection