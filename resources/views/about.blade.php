@extends('layouts.app')

@section('title', 'About Us - Women & Childs Care')

@section('content')
<!-- Start main-content -->
    <section class="page-title" style="background-image: url({{ asset('images/resource/page-title.jpg') }});">
      <div class="auto-container">
        <div class="title-outer text-center"> <div class="h1 title">About</div>
          <ul class="page-breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>About</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

     <!-- start about-section -->
    <section class="about-section fix section-padding">
      <div class="auto-container">
        <div class="row">
          <div class="image-column col-xl-6 col-lg-7">
            <div class="inner-column">
              <div class="image-box one wow fadeInUp" data-wow-delay="200ms">
                <div class="image"><img src="{{ asset('images/resource/about1-1.jpg') }}" alt=""></div>
              </div>
              <div class="image-box two wow fadeInUp" data-wow-delay="400ms">
                <div class="image"><img src="{{ asset('images/resource/about1-2.jpg') }}" alt=""></div>
              </div>
            </div>
          </div>
          <div class="content-column col-xl-6 col-lg-10">
            <div class="inner-column">
              <div class="sec-title"> <div class="h6 sub-title">Who we are</div> <div class="h2 title char-animation">Care That Grows With Your Family</div>
                <div class="text">Women and Child Care Clinic me hum sirf ilaaj nahi karte, hum har maa aur har bacche ke saath ek lamba rishta banate hain. Pregnancy se lekar delivery, newborn care se lekar bacche ke growth tak — aur mahilaon ki har stage ki health ke liye, ek hi jagah par expert, gentle aur honest care.</div>
              </div>
              <div class="feature-box">
                <div class="feature wow fadeInUp" data-wow-delay="200ms">
                  <div class="icon"><i aria-hidden="true" class=" flaticon-set-ivf"></i></div> <div class="h5 title">No Hidden <br>Costs</div>
                </div>
                <div class="feature wow fadeInUp" data-wow-delay="400ms">
                  <div class="icon"><i aria-hidden="true" class=" flaticon-set-maternity"></i></div> <div class="h5 title">One Clinic For <br>Mother & Child </div>
                </div>
              </div>
              <ul class="list-style-one wow fadeInUp" data-wow-delay="500ms">
                <li>
                  <i aria-hidden="true" class="fas fa-check-circle"></i>
                  <span>Normal & High-Risk Pregnancy, Delivery aur Postpartum Care</span>
                </li>
                <li>
                  <i aria-hidden="true" class="fas fa-check-circle"></i>
                  <span>Newborn, Vaccination, Growth & Nutrition ke liye Child Care</span>
                </li>
                <li>
                  <i aria-hidden="true" class="fas fa-check-circle"></i>
                  <span>Women's Health-PCOS, Ultrasound & General Checkup</span>
                </li>
              </ul>
              <a href="{{ url('/about') }}" class="theme-btn btn-style-one">
                <span class="btn-arrow-left"><i class="fas flaticon-common-right-arrow"></i></span>
                <span class="btn-title">More About Us</span>
                <span class="btn-arrow-right"><i class="fas flaticon-common-right-arrow"></i></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end about-section -->

      <!-- start marquee-section -->
<section class="marquee-section fix section-padding pt-0 pb-0">
  <div class="marquee one">
    <div class="marquee-group">
      <div class="text" data-text="Pregnancy Care">Pregnancy Care</div><span class="text divider">✦</span>
      <div class="text" data-text="Normal Delivery">Normal Delivery</div><span class="text divider">✦</span>
      <div class="text" data-text="High-Risk Pregnancy">High-Risk Pregnancy</div><span class="text divider">✦</span>
      <div class="text" data-text="Women's Health">Women's Health</div><span class="text divider">✦</span>
      <div class="text" data-text="Pregnancy Care">Pregnancy Care</div><span class="text divider">✦</span>
      <div class="text" data-text="Normal Delivery">Normal Delivery</div><span class="text divider">✦</span>
      <div class="text" data-text="High-Risk Pregnancy">High-Risk Pregnancy</div><span class="text divider">✦</span>
      <div class="text" data-text="Women's Health">Women's Health</div><span class="text divider">✦</span>
    </div>
    <div class="marquee-group">
      <div class="text" data-text="Pregnancy Care">Pregnancy Care</div><span class="text divider">✦</span>
      <div class="text" data-text="Normal Delivery">Normal Delivery</div><span class="text divider">✦</span>
      <div class="text" data-text="High-Risk Pregnancy">High-Risk Pregnancy</div><span class="text divider">✦</span>
      <div class="text" data-text="Women's Health">Women's Health</div><span class="text divider">✦</span>
      <div class="text" data-text="Pregnancy Care">Pregnancy Care</div><span class="text divider">✦</span>
      <div class="text" data-text="Normal Delivery">Normal Delivery</div><span class="text divider">✦</span>
      <div class="text" data-text="High-Risk Pregnancy">High-Risk Pregnancy</div><span class="text divider">✦</span>
      <div class="text" data-text="Women's Health">Women's Health</div><span class="text divider">✦</span>
    </div>
  </div>

  <div class="marquee two">
    <div class="marquee-group">
      <div class="text" data-text="Newborn Care">Newborn Care</div><span class="text divider">✦</span>
      <div class="text" data-text="Child Vaccination">Child Vaccination</div><span class="text divider">✦</span>
      <div class="text" data-text="Child Growth">Child Growth</div><span class="text divider">✦</span>
      <div class="text" data-text="Pediatrics">Pediatrics</div><span class="text divider">✦</span>
      <div class="text" data-text="Newborn Care">Newborn Care</div><span class="text divider">✦</span>
      <div class="text" data-text="Child Vaccination">Child Vaccination</div><span class="text divider">✦</span>
      <div class="text" data-text="Child Growth">Child Growth</div><span class="text divider">✦</span>
      <div class="text" data-text="Pediatrics">Pediatrics</div><span class="text divider">✦</span>
    </div>
    <div class="marquee-group">
      <div class="text" data-text="Newborn Care">Newborn Care</div><span class="text divider">✦</span>
      <div class="text" data-text="Child Vaccination">Child Vaccination</div><span class="text divider">✦</span>
      <div class="text" data-text="Child Growth">Child Growth</div><span class="text divider">✦</span>
      <div class="text" data-text="Pediatrics">Pediatrics</div><span class="text divider">✦</span>
      <div class="text" data-text="Newborn Care">Newborn Care</div><span class="text divider">✦</span>
      <div class="text" data-text="Child Vaccination">Child Vaccination</div><span class="text divider">✦</span>
      <div class="text" data-text="Child Growth">Child Growth</div><span class="text divider">✦</span>
      <div class="text" data-text="Pediatrics">Pediatrics</div><span class="text divider">✦</span>
    </div>
  </div>
</section>
<!--Marquee End-->

<!-- start why-choose-us-section -->
    <section class="why-choose-us-section fix section-padding">
      <div class="auto-container">
        <div class="row">
          <div class="content-column col-xl-6 col-lg-8">
            <div class="inner-column">
              <div class="sec-title"> <div class="h6 sub-title">Why Choose Us</div> <div class="h2 title char-animation">Why Families Trust Us?</div>
                <div class="text">From pregnancy to childhood, we provide complete, safe and caring treatment for mother and child — all under one roof, with personal attention.</div>
              </div>
              <ul class="accordion-box">
                <li class="accordion block wow fadeInUp" data-wow-delay="200ms">
                  <div class="acc-btn">01. Expert Doctors for Mother & Child
                    <i class="icon flaticon-common-right-arrow"></i>
                  </div>
                  <div class="acc-content">
                    <div class="content">
                      <div class="text">Experienced gynecologist and pediatrician together, so mother and baby both get expert care in every visit.</div>
                    </div>
                  </div>
                </li>
                <li class="accordion block active-block wow fadeInUp" data-wow-delay="400ms">
                  <div class="acc-btn active">02. Complete Care Under One Roof
                    <i class="icon flaticon-common-right-arrow"></i>
                  </div>
                  <div class="acc-content current">
                    <div class="content">
                      <div class="text">Pregnancy, delivery, vaccination and child growth — all services in one clinic, no need to run anywhere else.</div>
                    </div>
                  </div>
                </li>
                <li class="accordion block wow fadeInUp" data-wow-delay="600ms">
                  <div class="acc-btn">03. Gentle & Personal Care
                    <i class="icon flaticon-common-right-arrow"></i>
                  </div>
                  <div class="acc-content">
                    <div class="content">
                      <div class="text">We listen to every mother, explain everything clearly and give personal attention to every child.</div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="image-column col-xl-6 col-lg-8 col-md-10">
            <div class="inner-column wow fadeInUp" data-wow-delay="200ms">
              <div class="image"><img src="{{ asset('images/resource/wcu1-1.jpg') }}" alt=""></div>
              <div class="info wow fadeInUp" data-wow-delay="400ms"> <div class="h4 title">Care For Every Stage Of Life</div>
                <div class="list-info">
                  <ul class="list-style-two">
                    <li><i class="fa-solid fa-check"></i><span> Pregnancy Care</span></li>
                    <li><i class="fa-solid fa-check"></i><span> Safe Delivery</span></li>
                    <li><i class="fa-solid fa-check"></i><span> Newborn Care</span></li>
                  </ul>
                  <ul class="list-style-two">
                    <li><i class="fa-solid fa-check"></i><span> Child Vaccination</span></li>
                    <li><i class="fa-solid fa-check"></i><span> Women's Health</span></li>
                    <li><i class="fa-solid fa-check"></i><span> Growth Monitoring</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end why-choose-us-section -->
  
   <!-- start team-section -->
    <section class="team-section section-padding fix">
      <div class="auto-container">
        <div class="row justify-content-center">
          <div class="sec-title col-lg-7 text-center mb-30"> <div class="h6 sub-title">Team</div> <div class="h2 title">The team caring for mother & child</div></div>
        </div>
        <div class="swiper team-slider pb-0">
          <div class="swiper-wrapper">
            <div class="team-block swiper-slide wow fadeInUp" data-wow-delay="200ms">
              <div class="inner-block">
                <div class="image"><img src="{{ asset('images/resource/team1-1.jpg') }}" alt=""></div>
                <div class="content"> <div class="h4 team-title"><a href="{{ url('/doctor') }}">Dr. Devendra Agarwal</a></div>
                  <div class="team-subtitle">MBBS, MD - Pediatrics</div>
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
                <div class="image"><img src="{{ asset('images/resource/team1-2.jpg') }}" alt=""></div>
                <div class="content"> <div class="h4 team-title"><a href="{{ url('/doctor') }}"> Dr. Anubha Gupta</a></div>
                  <div class="team-subtitle">DGO, MBBS, Gynecologist,Obstetrician</div>
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
                <div class="image"><img src="{{ asset('images/resource/team1-2.jpg') }}" alt=""></div>
                <div class="content"> <div class="h4 team-title"><a href="{{ url('/doctor') }}">Dr. Anjali Gupta</a></div>
                  <div class="team-subtitle">Obstetrician</div>
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