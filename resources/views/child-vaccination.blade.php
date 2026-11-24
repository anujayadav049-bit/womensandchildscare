@extends('layouts.app')

@section('title', ($page->vaccine_title ?? 'Child Vaccination') . ' - Women & Childs Care')

@section('content')
<!-- Page Title -->
  <section class="page-title" style="background-image: url({{ asset($page->vaccine_banner ?? 'images/resource/page-title.jpg') }});">
    <div class="auto-container"><div class="title-outer text-center">
      <div class="h1 title">{{ $page->vaccine_title ?? 'Child Vaccination' }}</div>
      <ul class="page-breadcrumb"><li><a href="{{ url('/') }}">Home</a></li><li>{{ $page->vaccine_title ?? 'Child Vaccination' }}</li></ul>
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
            <li><a href="{{ url('/high-risk-pregnancy') }}"><i class="fas fa-angle-right"></i><span>High-Risk Pregnancy</span></a></li>
            <li><a href="{{ url('/womens-health') }}"><i class="fas fa-angle-right"></i><span>Women's Health</span></a></li>
            <li><a href="{{ url('/newborn-care') }}"><i class="fas fa-angle-right"></i><span>Newborn Care</span></a></li>
            <li><a href="{{ url('/child-vaccination') }}" class="current"><i class="fas fa-angle-right"></i><span>Child Vaccination</span></a></li>
            <li><a href="{{ url('/child-growth') }}"><i class="fas fa-angle-right"></i><span>Child Growth & Development</span></a></li>
            <li><a href="{{ url('/general-pediatrics') }}"><i class="fas fa-angle-right"></i><span>General Pediatrics</span></a></li>
          </ul></div>

          <div class="service-details-help">
            <div class="help-shape-1"></div><div class="help-shape-2"></div>
            <div class="h2 help-title">{{ $page->vaccine_help_title ?? 'Contact with us for any advice' }}</div>
            <div class="help-icon"><span class="lnr-icon-phone-handset"></span></div>
            <div class="help-contact"><p>{{ $page->vaccine_help_subtitle ?? 'Need help? Talk to an expert' }}</p><a href="tel:+919015598903">{{ $page->vaccine_help_phone ?? '+91-90 15 59 8903' }}</a></div>
          </div>

          <div class="sidebar-widget service-sidebar-single mt-4">
            <div class="service-sidebar-single-btn"><a href="{{ url('/appointment') }}" class="theme-btn btn-style-four"><span class="btn-title"><span class="fas fa-phone"></span> {{ $page->vaccine_book_btn ?? 'Book Appointment' }}</span></a></div>
          </div>
        </div></div>
      </div>

      <!-- Content - Sab Dynamic -->
      <div class="col-xl-8 col-lg-8">
        <div class="services-details__content">
          <img class="w-100" src="{{ asset($page->vaccine_main_image ?? 'images/resource/service-details.jpg') }}" alt="{{ $page->vaccine_title ?? 'Child Vaccination' }}" />

          <div class="h3 mt-4">{{ $page->vaccine_overview_title ?? 'Service Overview' }}</div>
          <p>{!! $page->vaccine_overview_p1 ?? 'At <b>Women & Child Care, Gurgaon</b>, we follow the complete IAP recommended vaccination schedule — from birth to teenage years. Every vaccine is given safely, with proper cold-chain maintenance, and every dose is recorded in your child\'s vaccination card.' !!}</p>
          <p>{!! $page->vaccine_overview_p2 ?? 'We never rush. Before every vaccine, your child is checked, and after vaccination, parents are explained what to expect — mild fever, pain, or swelling — and what to do at home.' !!}</p>

          <div class="content mt-40"><div class="text">
            <div class="h3">{{ $page->vaccine_support_title ?? 'We deliver gentle support every day' }}</div>
            <p>{!! $page->vaccine_support_text ?? 'Vaccination is the best protection for your child. We make it painless, safe, and stress-free for both child and parents, with full guidance and reminders for the next dose.' !!}</p>
            <blockquote class="blockquote-one">{{ $page->vaccine_quote ?? 'A Vaccinated Child Is A Protected Child — Never Miss A Dose, Never Delay.' }}</blockquote>
          </div>
          <div class="feature-list mt-4"><div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 column"><img class="mb-3" src="{{ asset($page->vaccine_feature1_image ?? 'images/resource/service-d1.jpg') }}" alt="images" /><p><b>{{ $page->vaccine_feature1_title ?? 'We Provide:' }}</b> {{ $page->vaccine_feature1_text ?? 'Birth Vaccines, 6 Weeks, 10 Weeks, 14 Weeks, 9 Months, 1 Year, Booster Doses, Flu Vaccines.' }}</p></div>
            <div class="col-lg-6 col-md-6 col-sm-12 column"><img class="mb-3" src="{{ asset($page->vaccine_feature2_image ?? 'images/resource/service-d2.jpg') }}" alt="images" /><p><b>{{ $page->vaccine_feature2_title ?? 'Extra Care:' }}</b> {{ $page->vaccine_feature2_text ?? 'Vaccination Card, Next Dose Reminder, Painless Vaccination, Fever Guidance After Vaccine.' }}</p></div>
          </div></div>
          </div>

          {{-- FAQ - Sab Dynamic --}}
          <div class="mt-25">
            <div class="h3">{{ $page->vaccine_faq_title ?? 'Frequently Asked Question' }}</div>
            <p>{{ $page->vaccine_faq_subtitle ?? 'Most commonly asked questions about Child Vaccination —' }}</p>
            <ul class="accordion-box">
              <li class="accordion block"><div class="acc-btn">{{ $page->vaccine_faq1_q ?? 'What to do if my child misses a vaccine dose?' }} <i class="icon fa-solid fa-chevron-down"></i></div><div class="acc-content"><div class="content"><div class="text">{{ $page->vaccine_faq1_a ?? 'Do not worry. Most missed doses can be given later with a catch-up schedule. Just visit us with your vaccination card and we will plan it.' }}</div></div></div></li>
              <li class="accordion block active-block"><div class="acc-btn active">{{ $page->vaccine_faq2_q ?? 'Will my child get fever after vaccination?' }} <i class="icon fa-solid fa-chevron-down"></i></div><div class="acc-content current"><div class="content"><div class="text">{{ $page->vaccine_faq2_a ?? 'Mild fever for 1-2 days is normal and a good sign that the vaccine is working. We will explain medicines and home care after every vaccine.' }}</div></div></div></li>
              <li class="accordion block"><div class="acc-btn">{{ $page->vaccine_faq3_q ?? 'How do I book an appointment?' }} <i class="icon fa-solid fa-chevron-down"></i></div><div class="acc-content"><div class="content"><div class="text">{!! $page->vaccine_faq3_a ?? 'Call us on <b>+91-90 15 59 8903</b>. Clinic: H.No-211, Sector-31, Gurgaon. Timing: Mon - Sat, 8:00 - 6:30.' !!}</div></div></div></li>
            </ul>
          </div>
        </div>
      </div>

    </div></div>
  </section>
@endsection