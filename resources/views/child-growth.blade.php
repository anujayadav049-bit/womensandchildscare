@extends('layouts.app')

@section('title', ($page->growth_title ?? 'Child Growth & Development') . ' - Women & Childs Care')

@section('content')
<!-- Page Title -->
  <section class="page-title" style="background-image: url({{ asset($page->growth_banner ?? 'images/resource/page-title.jpg') }});">
    <div class="auto-container"><div class="title-outer text-center">
      <div class="h1 title">{{ $page->growth_title ?? 'Child Growth & Development' }}</div>
      <ul class="page-breadcrumb"><li><a href="{{ url('/') }}">Home</a></li><li>{{ $page->growth_title ?? 'Child Growth & Development' }}</li></ul>
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
            <li><a href="{{ url('/child-vaccination') }}"><i class="fas fa-angle-right"></i><span>Child Vaccination</span></a></li>
            <li><a href="{{ url('/child-growth') }}" class="current"><i class="fas fa-angle-right"></i><span>Child Growth & Development</span></a></li>
            <li><a href="{{ url('/general-pediatrics') }}"><i class="fas fa-angle-right"></i><span>General Pediatrics</span></a></li>
          </ul></div>

          <div class="service-details-help">
            <div class="help-shape-1"></div><div class="help-shape-2"></div>
            <div class="h2 help-title">{{ $page->growth_help_title ?? 'Contact with us for any advice' }}</div>
            <div class="help-icon"><span class="lnr-icon-phone-handset"></span></div>
            <div class="help-contact"><p>{{ $page->growth_help_subtitle ?? 'Need help? Talk to an expert' }}</p><a href="tel:+919015598903">{{ $page->growth_help_phone ?? '+91-90 15 59 8903' }}</a></div>
          </div>

          <div class="sidebar-widget service-sidebar-single mt-4">
            <div class="service-sidebar-single-btn"><a href="{{ url('/appointment') }}" class="theme-btn btn-style-four"><span class="btn-title"><span class="fas fa-phone"></span> {{ $page->growth_book_btn ?? 'Book Appointment' }}</span></a></div>
          </div>
        </div></div>
      </div>

      <!-- Content - Sab Dynamic - Tumhara Asli Text -->
      <div class="col-xl-8 col-lg-8">
        <div class="services-details__content">
          <img class="w-100" src="{{ asset($page->growth_main_image ?? 'images/resource/service-details.jpg') }}" alt="{{ $page->growth_title ?? 'Child Growth & Development' }}" />

          <div class="h3 mt-4">{{ $page->growth_overview_title ?? 'Service Overview' }}</div>
          <p>{!! $page->growth_overview_p1 ?? 'At <b>Women & Child Care, Gurgaon</b>, we track your child\'s growth from birth to teenage years — height, weight, head growth, milestones, speech, walking, talking, and learning. Every child grows at a different pace, and we help parents understand what is normal and what needs attention.' !!}</p>
          <p>{!! $page->growth_overview_p2 ?? 'With regular growth check-ups, we can catch problems early — like poor weight gain, delayed speech, or nutritional deficiency — and fix them on time.' !!}</p>

          <div class="content mt-40"><div class="text">
            <div class="h3">{{ $page->growth_support_title ?? 'We deliver gentle support every day' }}</div>
            <p>{!! $page->growth_support_text ?? 'We do not just measure your child. We talk to parents, understand eating habits, sleep, school performance, and give simple, practical guidance that works at home.' !!}</p>
            <blockquote class="blockquote-one">{{ $page->growth_quote ?? "Every Child Grows Differently — We Help You Understand Your Child's Growth Journey." }}</blockquote>
          </div>
          <div class="feature-list mt-4"><div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 column"><img class="mb-3" src="{{ asset($page->growth_feature1_image ?? 'images/resource/service-d1.jpg') }}" alt="images" /><p><b>{{ $page->growth_feature1_title ?? 'We Check:' }}</b> {{ $page->growth_feature1_text ?? 'Height & Weight, Growth Chart, Milestones, Speech & Language, Walking & Motor Skills.' }}</p></div>
            <div class="col-lg-6 col-md-6 col-sm-12 column"><img class="mb-3" src="{{ asset($page->growth_feature2_image ?? 'images/resource/service-d2.jpg') }}" alt="images" /><p><b>{{ $page->growth_feature2_title ?? 'We Guide:' }}</b> {{ $page->growth_feature2_text ?? 'Nutrition & Diet Plan, Iron & Vitamin Advice, School & Behaviour Guidance, Parent Counselling.' }}</p></div>
          </div></div>
          </div>

          {{-- FAQ - Sab Dynamic - Tumhara Asli FAQ --}}
          <div class="mt-25">
            <div class="h3">{{ $page->growth_faq_title ?? 'Frequently Asked Question' }}</div>
            <p>{{ $page->growth_faq_subtitle ?? 'Most commonly asked questions about Child Growth & Development —' }}</p>
            <ul class="accordion-box">
              <li class="accordion block"><div class="acc-btn">{{ $page->growth_faq1_q ?? 'My child is not gaining weight. What should I do?' }} <i class="icon fa-solid fa-chevron-down"></i></div><div class="acc-content"><div class="content"><div class="text">{{ $page->growth_faq1_a ?? 'First, we check the growth chart and diet. Most cases improve with correct feeding and nutrition guidance. Visit us with your child\'s previous records.' }}</div></div></div></li>
              <li class="accordion block active-block"><div class="acc-btn active">{{ $page->growth_faq2_q ?? 'When should I worry about delayed speech?' }} <i class="icon fa-solid fa-chevron-down"></i></div><div class="acc-content current"><div class="content"><div class="text">{{ $page->growth_faq2_a ?? 'If your child is not speaking 2-3 words by 18 months or not making sentences by 2.5 years, get a developmental check-up done. Early guidance helps a lot.' }}</div></div></div></li>
              <li class="accordion block"><div class="acc-btn">{{ $page->growth_faq3_q ?? 'How do I book an appointment?' }} <i class="icon fa-solid fa-chevron-down"></i></div><div class="acc-content"><div class="content"><div class="text">{!! $page->growth_faq3_a ?? 'Call us on <b>+91-90 15 59 8903</b>. Clinic: H.No-211, Sector-31, Gurgaon. Timing: Mon - Sat, 8:00 - 6:30.' !!}</div></div></div></li>
            </ul>
          </div>
        </div>
      </div>

    </div></div>
  </section>
@endsection