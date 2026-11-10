@extends('layouts.app')

@section('title', 'Child Growth & Development - Women & Childs Care')

@section('content')
<!-- Page Title -->
  <section class="page-title" style="background-image: url({{ asset('images/resource/page-title.jpg') }});">
    <div class="auto-container"><div class="title-outer text-center">
      <div class="h1 title">Child Growth & Development</div>
      <ul class="page-breadcrumb"><li><a href="{{ url('/') }}">Home</a></li><li>Child Growth & Development</li></ul>
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
            <li><a href="{{ url('/womens-health') }}"><i class="fas fa-angle-right"></i><span>Women's Health</span></a></li>
            <li><a href="{{ url('/newborn-care') }}"><i class="fas fa-angle-right"></i><span>Newborn Care</span></a></li>
            <li><a href="{{ url('/child-vaccination') }}"><i class="fas fa-angle-right"></i><span>Child Vaccination</span></a></li>
            <li><a href="{{ url('/child-growth') }}" class="current"><i class="fas fa-angle-right"></i><span>Child Growth & Development</span></a></li>
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
          <img class="w-100" src="{{ asset('images/resource/service-details.jpg') }}" alt="Child Growth & Development" />
          <div class="h3 mt-4">Service Overview</div>
          <p>At <b>Women & Child Care, Gurgaon</b>, we track your child's growth from birth to teenage years — height, weight, head growth, milestones, speech, walking, talking, and learning. Every child grows at a different pace, and we help parents understand what is normal and what needs attention.</p>
          <p>With regular growth check-ups, we can catch problems early — like poor weight gain, delayed speech, or nutritional deficiency — and fix them on time.</p>

          <div class="content mt-40"><div class="text">
            <div class="h3">We deliver gentle support every day</div>
            <p>We do not just measure your child. We talk to parents, understand eating habits, sleep, school performance, and give simple, practical guidance that works at home.</p>
            <blockquote class="blockquote-one">Every Child Grows Differently — We Help You Understand Your Child's Growth Journey.</blockquote>
          </div>
          <div class="feature-list mt-4"><div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 column"><img class="mb-3" src="{{ asset('images/resource/service-d1.jpg') }}" alt="images" /><p><b>We Check:</b> Height & Weight, Growth Chart, Milestones, Speech & Language, Walking & Motor Skills.</p></div>
            <div class="col-lg-6 col-md-6 col-sm-12 column"><img class="mb-3" src="{{ asset('images/resource/service-d2.jpg') }}" alt="images" /><p><b>We Guide:</b> Nutrition & Diet Plan, Iron & Vitamin Advice, School & Behaviour Guidance, Parent Counselling.</p></div>
          </div></div>
          </div>

          <div class="mt-25">
            <div class="h3">Frequently Asked Question</div>
            <p>Most commonly asked questions about Child Growth & Development —</p>
            <ul class="accordion-box">
              <li class="accordion block"><div class="acc-btn">My child is not gaining weight. What should I do? <i class="icon fa-solid fa-chevron-down"></i></div><div class="acc-content"><div class="content"><div class="text">First, we check the growth chart and diet. Most cases improve with correct feeding and nutrition guidance. Visit us with your child's previous records.</div></div></div></li>
              <li class="accordion block active-block"><div class="acc-btn active">When should I worry about delayed speech? <i class="icon fa-solid fa-chevron-down"></i></div><div class="acc-content current"><div class="content"><div class="text">If your child is not speaking 2-3 words by 18 months or not making sentences by 2.5 years, get a developmental check-up done. Early guidance helps a lot.</div></div></div></li>
              <li class="accordion block"><div class="acc-btn">How do I book an appointment? <i class="icon fa-solid fa-chevron-down"></i></div><div class="acc-content"><div class="content"><div class="text">Call us on <b>+91-90 15 59 8903</b>. Clinic: H.No-211, Sector-31, Gurgaon. Timing: Mon - Sat, 8:00 - 6:30.</div></div></div></li>
            </ul>
          </div>
        </div>
      </div>

    </div></div>
  </section>
@endsection