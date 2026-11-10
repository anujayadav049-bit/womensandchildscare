<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>@yield('title', 'Women & Childs Care')</title>
  <!-- Stylesheets -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/style-home-1.css') }}" rel="stylesheet" />
  @stack('styles')

  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon" />
  <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon" />

  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div class="page-wrapper">

    <div class="preloader"></div>

    <!-- Back-to-top start -->
    <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
        <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>
    <!-- Back-to-top end -->

    <!-- Main Header-->
    <header class="main-header header-style-one">
      <div class="header-lower ">
        <div class="inner-container">
          <div class="main-box">
            <div class="left-box">
              <div class="logo-box">
                <div class="logo">
                  <a href="{{ url('/') }}"><img src="{{ asset('images/logo1.jpeg') }}" alt="Logo" /></a>
                </div>
              </div>
              <div class="nav-outer">
                <nav class="nav main-menu">
                  <ul class="navigation">
                    <li class="{{ request()->is('/') ? 'current' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                    <li class="{{ request()->is('about') ? 'current' : '' }}"><a href="{{ url('/about') }}">About</a></li>
                    <li class="{{ request()->is('doctor') ? 'current' : '' }}"><a href="{{ url('/doctor') }}">Doctors</a></li>
                    <li class="{{ request()->is('contact') ? 'current' : '' }}"><a href="{{ url('/contact') }}">Contact</a></li>
                  </ul>
                </nav>
              </div>
            </div>

            <div class="right-box">
              <ul class="social-icon-list one">
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
              </ul>
              <button class="mobile-nav-toggler"><span></span><span></span><span></span></button>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile Menu  -->
      <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <nav class="menu-box">
          <div class="upper-box">
            <div class="nav-logo">
              <a href="{{ url('/') }}"><img src="{{ asset('images/logo5.jpg') }}" alt=""></a>
            </div>
            <div class="close-btn"><i class="icon fa fa-times"></i></div>
          </div>
          <ul class="navigation clearfix"></ul>
          <ul class="contact-list-one">
            <li>
              <div class="contact-info-box">
                <i class="icon lnr-icon-phone-handset"></i>
                <span class="title">Call Now</span>
                <a href="tel:+919015598903">+91-90 15 59 8903</a>
              </div>
            </li>
            <li>
              <div class="contact-info-box">
                <span class="icon lnr-icon-envelope1"></span>
                <span class="title">Send Email</span>
                <a href="mailto:info@womenandchildcare.com">info@womenandchildcare.com</a>
              </div>
            </li>
            <li>
              <div class="contact-info-box">
                <span class="icon lnr-icon-clock"></span>
                <span class="title">Timing</span>
                Mon - Sat 8:00 - 6:30, Sunday - CLOSED
              </div>
            </li>
          </ul>
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </nav>
      </div>
      <!-- End Mobile Menu -->

      <!-- Header Search -->
      <div class="search-popup">
        <span class="search-back-drop"></span>
        <button class="close-search"><span class="fa fa-times"></span></button>
        <div class="search-inner">
          <form method="post" action="{{ url('/') }}">
            <div class="form-group">
              <input type="search" name="search-field" value="" placeholder="Search..." required="" />
              <button type="submit"><i class="fa fa-search"></i></button>
            </div>
          </form>
        </div>
      </div>
      <!-- End Header Search -->

      <!-- Sticky Header  -->
      <div class="sticky-header">
        <div class="auto-container">
          <div class="inner-container">
            <div class="logo">
              <a href="{{ url('/') }}"><img src="{{ asset('images/logo5.jpg') }}" alt=""></a>
            </div>
            <div class="nav-outer">
              <nav class="main-menu">
                <div class="navbar-collapse show collapse clearfix">
                  <ul class="navigation clearfix"></ul>
                </div>
              </nav>
              <div class="mobile-nav-toggler"><span></span><span></span><span></span></div>
            </div>
            <a href="tel:+919015598903" class="header-phone_box">
              <span class="icon"><i aria-hidden="true" class="fas fa-phone-alt"></i></span>
              <span class="info">Call Anytime <strong> +91-90 15 59 8903</strong></span>
            </a>
          </div>
        </div>
      </div>
      <!-- End Sticky Menu -->
    </header>
    <!--End Main Header -->

    {{-- Yaha har page ka beech wala content aayega --}}
    @yield('content')

    <!-- Main Footer -->
    <footer class="main-footer footer-style-one">
      <div class="footer-area">
        <div class="outer-box">
          <div class="bg bg-image"><img src="{{ asset('images/background/footer-bg1-1.png') }}" alt=""></div>
          <div class="widgets-section">
            <div class="auto-container">
              <div class="row">
                <div class="footer-column border-0 col-xl-3 col-lg-9">
                  <div class="footer-widget about-widget wow fadeInLeft">
                    <div class="widget-content">
                      <div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('images/logo1.jpeg') }}" alt=""></a></div>
                      <div class="text text-white">Complete, safe and caring treatment for mother and child — from pregnancy to delivery and childhood, all under one roof.</div>
                      <div class="social-widget">
                        <ul class="social-icon-list1">
                          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                          <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="footer-column border-0 col-xl-3 col-lg-4 col-md-6">
                  <div class="footer-widget links-widget style-two col wow fadeInLeft" data-wow-delay="400ms">
                    <div class="h4 widget-title">Quick Link</div>
                    <div class="widget-content">
                      <ul class="user-links">
                        <li><a href="{{ url('/pregnancy-care') }}">Pregnancy Care</a></li>
                        <li><a href="{{ url('/normal-delivery') }}">Safe Delivery</a></li>
                        <li><a href="{{ url('/child-vaccination') }}">Child Vaccination</a></li>
                        <li><a href="{{ url('/general-pediatrics') }}">General Pediatrics</a></li>
                        <li><a href="{{ url('/womens-health') }}">Women's Health</a></li>
                        <li><a href="{{ url('/newborn-care') }}">Newborn Care</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="footer-column border-0 col-xl-3 col-lg-4 col-md-6">
                  <div class="footer-widget contact-widget style-two col wow fadeInLeft" data-wow-delay="400ms">
                    <div class="h4 widget-title">Contact</div>
                    <div class="widget-content">
                      <div class="text">Visit us for mother and child care, or call us to book your appointment today.</div>
                      <div class="info"><i aria-hidden="true" class=" flaticon-common-email-1"></i><span>info@womenandchildcare.com</span></div>
                      <div class="info"><i aria-hidden="true" class=" flaticon-common-location"></i><span> H.No-211, Sector-31, Gurgaon, Haryana India</span></div>
                      <div class="info"><i aria-hidden="true" class=" flaticon-common-call-1"></i><span> +91-90 15 59 8903</span></div>
                    </div>
                  </div>
                </div>
                <div class="footer-column border-0 col-xl-3 col-lg-4 col-md-6">
                  <div class="footer-widget newsletter-widget style-two col wow fadeInLeft" data-wow-delay="400ms">
                    <div class="h4 widget-title">About Us</div>
                    <div class="widget-content">
                      <div class="text">We provide trusted care for every mother and child with personal attention, safety and love.</div>
                      <div class="form-clt">
                        <input type="email" name="email" id="email2" placeholder="Email Address" required="">
                        <button class="submit-btn" type="submit"><i class="fa-regular fa-paper-plane"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="auto-container">
            <div class="footer-bottom">
              <div class="inner-container justify-content-center justify-content-md-between">
                <p class="copyright-text">© Copyright 2026 by womenandchildcare.com</p>
                <ul class="d-flex align-items-center">
                  <li><a href="#0">Trams & Condition</a></li>
                  <li><a href="#0">Privacy Policy</a></li>
                  <li><a href="#0">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--End Main Footer -->
  </div>
<!-- End Page Wrapper -->

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<script src="{{ asset('js/appear.js') }}"></script>
<script src="{{ asset('js/bxslider.js') }}"></script>
<script src="{{ asset('js/knob.js') }}"></script>
<script src="{{ asset('js/swiper.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/gsap.min.js') }}"></script>
<script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('js/splitType.js') }}"></script>
<script src="{{ asset('js/gsap-scroll-smoother.js') }}"></script>
<script src="{{ asset('js/gsap-scroll-to-plugin.js') }}"></script>
<script src="{{ asset('js/SplitText.min.js') }}"></script>
<script src="{{ asset('js/custom-gsap.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
@stack('scripts')
</body>
</html>