@extends('layouts.app')

@section('title', 'Our Doctors - Women & Childs Care')

@section('content')
<!-- Start main-content -->
    <section class="page-title" style="background-image: url({{ asset($page->doctor_banner_image ?? 'images/resource/page-title.jpg') }});">
      <div class="auto-container">
        <div class="title-outer text-center"> <div class="h1 title">{{ $page->doctor_banner_title ?? 'Doctors' }}</div>
          <ul class="page-breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>{{ $page->doctor_banner_breadcrumb ?? 'Doctors' }}</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

   <!-- start team-section -->
    <section class="team-section section-padding fix">
      <div class="auto-container">
        <div class="row justify-content-center">
          <div class="sec-title col-lg-7 text-center mb-30"> <div class="h6 sub-title">{{ $page->team_subtitle ?? 'Team' }}</div> <div class="h2 title">{{ $page->team_title ?? 'The team caring for mother & child' }}</div></div>
        </div>
        <div class="swiper team-slider pb-0">
          <div class="swiper-wrapper">
            <div class="team-block swiper-slide wow fadeInUp" data-wow-delay="200ms">
              <div class="inner-block">
                <div class="image"><img src="{{ asset($page->team1_image ?? 'images/resource/team1-1.jpg') }}" alt=""></div>
                <div class="content"> <div class="h4 team-title"><a href="{{ url('/doctor/devendra-agarwal') }}">{{ $page->team1_name ?? 'Dr. Devendra Agarwal' }}</a></div>
                  <div class="team-subtitle">{{ $page->team1_role ?? 'MBBS, MD - Pediatrics' }}</div>
                  <div class="social-icon"><div class="social-links">
                      <div><a aria-label="facebook" href="#"><i class="fab fa-facebook"></i></a></div>
                      <div><a aria-label="twitter" href="#"><i class="fab fa-twitter"></i></a></div>
                      <div><a aria-label="instagram" href="#"><i class="fab fa-instagram"></i></a></div>
                  </div></div>
                </div>
              </div>
            </div>
            <div class="team-block swiper-slide wow fadeInUp" data-wow-delay="400ms">
              <div class="inner-block">
                <div class="image"><img src="{{ asset($page->team2_image ?? 'images/resource/team1-2.jpg') }}" alt=""></div>
                <div class="content"> <div class="h4 team-title"><a href="{{ url('/doctor/anubha-gupta') }}">{{ $page->team2_name ?? 'Dr. Anubha Gupta' }}</a></div>
                  <div class="team-subtitle">{{ $page->team2_role ?? 'DGO, MBBS, Gynecologist, Obstetrician' }}</div>
                  <div class="social-icon"><div class="social-links">
                      <div><a aria-label="facebook" href="#"><i class="fab fa-facebook"></i></a></div>
                      <div><a aria-label="twitter" href="#"><i class="fab fa-twitter"></i></a></div>
                      <div><a aria-label="instagram" href="#"><i class="fab fa-instagram"></i></a></div>
                  </div></div>
                </div>
              </div>
            </div>
            <div class="team-block swiper-slide wow fadeInUp" data-wow-delay="600ms">
              <div class="inner-block">
                <div class="image"><img src="{{ asset($page->team3_image ?? 'images/resource/team1-3.jpg') }}" alt=""></div>
                <div class="content"> <div class="h4 team-title"><a href="{{ url('/doctor/anjali-gupta') }}">{{ $page->team3_name ?? 'Dr. Anjali Gupta' }}</a></div>
                  <div class="team-subtitle">{{ $page->team3_role ?? 'Obstetrician' }}</div>
                  <div class="social-icon"><div class="social-links">
                      <div><a aria-label="facebook" href="#"><i class="fab fa-facebook"></i></a></div>
                      <div><a aria-label="twitter" href="#"><i class="fab fa-twitter"></i></a></div>
                      <div><a aria-label="instagram" href="#"><i class="fab fa-instagram"></i></a></div>
                  </div></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end team-section -->
@endsection