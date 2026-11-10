@extends('layouts.app')

@section('title', 'Women & Childs Care - Home')

@section('content')
    <!-- start banner-section -->
    <section class="banner-section fix">
      <div class="outer-box fix">
        <div class="bg bg-image"><img src="{{ asset('images/banner/1.jpg') }}" alt=""></div>
        <div class="banner-content">
          <div class="inner-content">
            <div class="sub-title">
              <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <span>Trusted by 50,000+ patients </span>
            </div> <div class="h1 banner-title wow fadeInUp" data-wow-delay="200ms">Care for Every Woman Care for Every Child</div>
            <div class="text wow fadeInUp" data-wow-delay="400ms">From pregnancy to motherhood, and from newborn to growing child — complete, gentle and expert care under one roof, at every stage of life.</div>
          </div>
        </div>
        <div class="feature-box">
          <div class="row g-0">
            <div class="feature col-md-4 wow fadeInUp" data-wow-delay="200ms">
              <div class="inner">
                <span> +91-90 15 59 8903</span>
                <span class="call">Give Us a Call </span>
              </div>
            </div>
            <div class="feature col-md-4 wow fadeInUp" data-wow-delay="400ms">
              <div class="inner">
                <span>Mon - Fri: 8:00AM - 7:00PM</span>
                <span>Sat - Sun: Closed</span>
              </div>
            </div>
            <div class="feature col-md-4 wow fadeInUp" data-wow-delay="600ms">
              <div class="inner">
                <span>Location-: H.No-211,</span>
                <span>Sector-31, Gurgaon, Haryana India</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end banner-section -->

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
                <li><i aria-hidden="true" class="fas fa-check-circle"></i><span>Normal & High-Risk Pregnancy, Delivery aur Postpartum Care</span></li>
                <li><i aria-hidden="true" class="fas fa-check-circle"></i><span>Newborn, Vaccination, Growth & Nutrition ke liye Child Care</span></li>
                <li><i aria-hidden="true" class="fas fa-check-circle"></i><span>Women's Health-PCOS, Ultrasound & General Checkup</span></li>
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

    <!-- start services-section -->
    <section class="services-section">
      <div class="outer-box fix section-padding">
        <div class="auto-container">
          <div class="row justify-content-center">
            <div class="sec-title col-lg-7 mb-40 text-center"> <div class="h6 sub-title border-style">Service Area</div> <div class="h2 title char-animation">Complete Women & Child Healthcare Services</div>
            </div>
          </div>
        </div>
        <div class="outer-container fix">
          <div class="swiper services-slider pb-0">
            <div class="swiper-wrapper">
              <div class="service-block swiper-slide wow fadeInUp" data-wow-delay="200ms">
                <div class="inner-block"><div class="content-box"><div class="inner-box">
                      <div class="icon"><div class="service-icon"><i aria-hidden="true" class="fa-solid fa-person-pregnant"></i></div></div>
                      <div class="h4 service-title"><a href="{{ url('/pregnancy-care') }}">Pregnancy Care</a></div>
                      <div class="service-details">Complete care and monitoring for mother and baby, from pregnancy to recovery after birth.</div>
                      <a class="link-btn-style" href="{{ url('/pregnancy-care') }}">Read More<i class="flaticon-common-arrow-right1"></i></a>
                </div></div></div>
              </div>
              <div class="service-block swiper-slide wow fadeInUp" data-wow-delay="400ms">
                <div class="inner-block"><div class="content-box"><div class="inner-box">
                      <div class="icon"><div class="service-icon"><i aria-hidden="true" class="fa-solid fa-heart-pulse"></i></div></div>
                      <div class="h4 service-title"><a href="{{ url('/normal-delivery') }}">Safe Delivery</a></div>
                      <div class="service-details">Specialized monitoring and medical care for high-risk pregnancy, for mother and baby's safety.</div>
                      <a class="link-btn-style" href="{{ url('/normal-delivery') }}">Read More<i class="flaticon-common-arrow-right1"></i></a>
                </div></div></div>
              </div>
              <div class="service-block swiper-slide wow fadeInUp" data-wow-delay="600ms">
                <div class="inner-block"><div class="content-box"><div class="inner-box">
                      <div class="icon"><div class="service-icon"><i aria-hidden="true" class="fa-solid fa-baby"></i></div></div>
                      <div class="h4 service-title"><a href="{{ url('/child-vaccination') }}">Child Vaccination</a></div>
                      <div class="service-details">Safe delivery options — Normal, Instrumental and Cesarean, as per your condition and need.</div>
                      <a class="link-btn-style" href="{{ url('/child-vaccination') }}">Read More<i class="flaticon-common-arrow-right1"></i></a>
                </div></div></div>
              </div>
              <div class="service-block swiper-slide wow fadeInUp" data-wow-delay="800ms">
                <div class="inner-block"><div class="content-box"><div class="inner-box">
                      <div class="icon"><div class="service-icon"><i aria-hidden="true" class="fa-solid fa-magnifying-glass"></i></div></div>
                      <div class="h4 service-title"><a href="{{ url('/general-pediatrics') }}">General Pediatrics</a></div>
                      <div class="service-details">Complete evaluation and treatment for infertility, with accurate diagnosis and right guidance.</div>
                      <a class="link-btn-style" href="{{ url('/general-pediatrics') }}">Read More<i class="flaticon-common-arrow-right1"></i></a>
                </div></div></div>
              </div>
              <div class="service-block swiper-slide">
                <div class="inner-block"><div class="content-box"><div class="inner-box">
                      <div class="icon"><div class="service-icon"><i aria-hidden="true" class="fa-solid fa-user-doctor"></i></div></div>
                      <div class="h4 service-title"><a href="{{ url('/womens-health') }}">Women's Health</a></div>
                      <div class="service-details">Minimally invasive surgery for gynecological problems, with faster recovery and less pain.</div>
                      <a class="link-btn-style" href="{{ url('/womens-health') }}">Read More<i class="flaticon-common-arrow-right1"></i></a>
                </div></div></div>
              </div>
              <div class="service-block swiper-slide">
                <div class="inner-block"><div class="content-box"><div class="inner-box">
                      <div class="icon"><div class="service-icon"><i aria-hidden="true" class="fa-solid fa-scissors"></i></div></div>
                      <div class="h4 service-title"><a href="{{ url('/newborn-care') }}">Newborn Care</a></div>
                      <div class="service-details">Safe surgical treatment for fibroids and uterus problems, with expert care and support.</div>
                      <a class="link-btn-style" href="{{ url('/newborn-care') }}">Read More<i class="flaticon-common-arrow-right1"></i></a>
                </div></div></div>
              </div>
              <div class="service-block swiper-slide">
                <div class="inner-block"><div class="content-box"><div class="inner-box">
                      <div class="icon"><div class="service-icon"><i aria-hidden="true" class="fa-solid fa-spa"></i></div></div>
                      <div class="h4 service-title"><a href="{{ url('/child-growth') }}">Child-Growth</a></div>
                      <div class="service-details">Aesthetic gynecology procedures including labiaplasty and vaginal rejuvenation, with privacy.</div>
                      <a class="link-btn-style" href="{{ url('/child-growth') }}">Read More<i class="flaticon-common-arrow-right1"></i></a>
                </div></div></div>
              </div>
              <div class="service-block swiper-slide">
                <div class="inner-block"><div class="content-box"><div class="inner-box">
                      <div class="icon"><div class="service-icon"><i aria-hidden="true" class="fa-solid fa-droplet"></i></div></div>
                      <div class="h4 service-title"><a href="{{ url('/high-risk-pregnancy') }}">high-risk-pregnancy</a></div>
                      <div class="service-details">Specialized care for pelvic health, bladder problems and reconstructive gynecology surgery.</div>
                      <a class="link-btn-style" href="{{ url('/high-risk-pregnancy') }}">Read More<i class="flaticon-common-arrow-right1"></i></a>
                </div></div></div>
              </div>
            </div>
            <div class="services-dot"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- end services-section -->

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
                  <div class="acc-btn">01. Expert Doctors for Mother & Child <i class="icon flaticon-common-right-arrow"></i></div>
                  <div class="acc-content"><div class="content"><div class="text">Experienced gynecologist and pediatrician together, so mother and baby both get expert care in every visit.</div></div></div>
                </li>
                <li class="accordion block active-block wow fadeInUp" data-wow-delay="400ms">
                  <div class="acc-btn active">02. Complete Care Under One Roof <i class="icon flaticon-common-right-arrow"></i></div>
                  <div class="acc-content current"><div class="content"><div class="text">Pregnancy, delivery, vaccination and child growth — all services in one clinic, no need to run anywhere else.</div></div></div>
                </li>
                <li class="accordion block wow fadeInUp" data-wow-delay="600ms">
                  <div class="acc-btn">03. Gentle & Personal Care <i class="icon flaticon-common-right-arrow"></i></div>
                  <div class="acc-content"><div class="content"><div class="text">We listen to every mother, explain everything clearly and give personal attention to every child.</div></div></div>
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

    <!-- start funfact-section -->
    <section class="funfact-section section-padding pt-0">
      <div class="auto-container fix">
        <div class="row">
          <div class="funfact-block col-md-3"><div class="inner-block"><div class="counter-box"> <div class="h2 count-box"><span class="count-text" data-speed="3000" data-stop="10">0</span></div><div class="text">Years of Experience</div></div></div></div>
          <div class="funfact-block col-md-3"><div class="inner-block"><div class="counter-box"> <div class="h2 count-box"><span class="count-text" data-speed="3000" data-stop="20">0</span>+</div><div class="text">Expert Doctors & Staff</div></div></div></div>
          <div class="funfact-block col-md-3"><div class="inner-block"><div class="counter-box"> <div class="h2 count-box"><span class="count-text" data-speed="3000" data-stop="20">0</span>K</div><div class="text">Happy Families</div></div></div></div>
          <div class="funfact-block col-md-3"><div class="inner-block mb-0"><div class="counter-box"> <div class="h2 count-box"><span class="count-text" data-speed="3000" data-stop="80">0</span>M</div><div class="text">Healthy Babies Delivered</div></div></div></div>
        </div>
      </div>
    </section>
    <!-- end funfact-section -->

    <!-- start working-section -->
    <section class="working-section fix">
      <div class="outer-box fix section-padding">
        <div class="bg bg-image"><img src="{{ asset('images/resource/work1-1.jpg') }}" alt=""></div>
        <div class="auto-container">
          <div class="row align-items-center">
            <div class="content-column col-xl-6 col-lg-10">
              <div class="inner-column">
                <div class="sec-title light"> <div class="h6 sub-title">Our Achievements</div> <div class="h2 title char-animation">Trusted Care For Mother & Child</div></div>
                <div class="text one">With our personal attention and complete care for mother and child, we help thousands of families stay healthy — from pregnancy to delivery and childhood. Care needs trust, patience and right guidance.</div>
                <div class="text two">The chart shows our care success across key services — how our dedicated team and personalized care ensure healthy outcomes for every mother and child.</div>
                <a href="{{ url('/appointment') }}" class="theme-btn btn-style-two">
                  <span class="btn-arrow-left"><i class="fas flaticon-common-right-arrow"></i></span>
                  <span class="btn-title">Book a consultation</span>
                  <span class="btn-arrow-right"><i class="fas flaticon-common-right-arrow"></i></span>
                </a>
              </div>
            </div>
            <div class="exp-column col-xl-5 offset-xl-1">
              <div class="inner-column">
                <div class="exp-details__progress">
                  <div class="exp-details__progress-single"><div class="exp-details__progress-title">Antenatal Care</div><div class="bar"><div class="bar-inner count-bar" data-percent="98%"><div class="count-text">98%</div></div></div></div>
                  <div class="exp-details__progress-single"><div class="exp-details__progress-title">Safe Delivery</div><div class="bar"><div class="bar-inner count-bar" data-percent="97%"><div class="count-text">97%</div></div></div></div>
                  <div class="exp-details__progress-single"><div class="exp-details__progress-title">Child Vaccination</div><div class="bar marb-0"><div class="bar-inner count-bar" data-percent="96%"><div class="count-text">96%</div></div></div></div>
                  <div class="exp-details__progress-single"><div class="exp-details__progress-title">Newborn Care</div><div class="bar marb-0"><div class="bar-inner count-bar" data-percent="99%"><div class="count-text">99%</div></div></div></div>
                </div> <div class="h3 title">Our Care Success Rate</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end working-section -->

    <!-- Testimonial Section Start -->
    <section class="testimonial-section">
      <div class="outer-box fix section-padding">
        <div class="shape-1"><img src="{{ asset('images/icons/shape-1.png') }}" alt=""></div>
        <div class="shape-2"><img src="{{ asset('images/icons/shape-2.png') }}" alt=""></div>
        <div class="auto-container">
          <div class="row g-4">
              <div class="col-xl-7 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="testimonial-block-content2">
                    <div class="sec-title mb-0"> <div class="h6 sub-title border-style">Testimonial</div> <div class="h2 title char-animation">Real stories from happy mothers</div></div>
                    <div class="swiper testimonial-slider pb-0">
                      <div class="swiper-wrapper">
                          <div class="swiper-slide"><div class="testi-slider-block-2">
                                <div class="quote-icon"><img src="{{ asset('images/icons/quote.png') }}" alt=""></div>
                                <div class="text">Doctor explained everything so clearly during my pregnancy. I felt safe and relaxed at every visit, and my delivery was smooth and comfortable. Truly caring team.</div>
                                <div class="client-info"><div class="client-img"><img src="{{ asset('images/resource/testi-2-1.jpg') }}" alt=""></div><div class="info-content"> <div class="h5 name">Priya Sharma</div><span>New Mother</span></div></div>
                          </div></div>
                          <div class="swiper-slide"><div class="testi-slider-block-2">
                                <div class="quote-icon"><img src="{{ asset('images/icons/quote.png') }}" alt=""></div>
                                <div class="text">From first checkup to my baby's vaccination, everything was perfect. They always answer our questions patiently and take great care of my child.</div>
                                <div class="client-info"><div class="client-img"><img src="{{ asset('images/resource/testi-2-1.jpg') }}" alt=""></div><div class="info-content"> <div class="h5 name">Neha Verma</div><span>Mother of Two</span></div></div>
                          </div></div>
                          <div class="swiper-slide"><div class="testi-slider-block-2">
                                <div class="quote-icon"><img src="{{ asset('images/icons/quote.png') }}" alt=""></div>
                                <div class="text">My daughter's growth and vaccination are always on time here. Doctors are kind, gentle with kids and give full attention to every small concern.</div>
                                <div class="client-info"><div class="client-img"><img src="{{ asset('images/resource/testi-2-1.jpg') }}" alt=""></div><div class="info-content"> <div class="h5 name">Anjali Gupta</div><span>Happy Parent</span></div></div>
                          </div></div>
                      </div>
                    </div>
                    <div class="array-button"><button class="array-prev"><i class="lnr-icon-arrow-left"></i></button><button class="array-next"><i class="lnr-icon-arrow-right"></i></button></div>
                </div>
              </div>
              <div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="tetsimonial-image-items">
                    <div class="thumb fix"><img data-speed=".8" src="{{ asset('images/resource/testimonial-image2-1.jpg') }}" alt=""></div>
                    <div class="testi-ratting">
                        <div class="rattings"> <div class="h2 ratting-count">4.8</div>
                            <div class="star"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                        </div>
                        <div class="testi-line"></div>
                        <p>From 3k Members, <br> Reviewed by Google</p>
                    </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <!-- start team-section -->
    <section class="team-section section-padding fix">
      <div class="auto-container">
        <div class="row justify-content-center">
          <div class="sec-title col-lg-7 text-center mb-30"> <div class="h6 sub-title">Team</div> <div class="h2 title">The team caring for mother & child</div></div>
        </div>
        <div class="swiper team-slider pb-0">
          <div class="swiper-wrapper">
            <div class="team-block swiper-slide wow fadeInUp" data-wow-delay="200ms">
              <div class="inner-block"><div class="image"><img src="{{ asset('images/resource/team1-1.jpg') }}" alt=""></div>
                <div class="content"> <div class="h4 team-title"><a href="{{ url('/doctor') }}">Dr. Devendra Agarwal</a></div><div class="team-subtitle">MBBS, MD - Pediatrics</div></div>
              </div>
            </div>
            <div class="team-block swiper-slide wow fadeInUp" data-wow-delay="400ms">
              <div class="inner-block"><div class="image"><img src="{{ asset('images/resource/team1-2.jpg') }}" alt=""></div>
                <div class="content"> <div class="h4 team-title"><a href="{{ url('/doctor') }}"> Dr. Anubha Gupta</a></div><div class="team-subtitle">DGO, MBBS, Gynecologist,Obstetrician</div></div>
              </div>
            </div>
            <div class="team-block swiper-slide wow fadeInUp" data-wow-delay="600ms">
              <div class="inner-block"><div class="image"><img src="{{ asset('images/resource/team1-2.jpg') }}" alt=""></div>
                <div class="content"> <div class="h4 team-title"><a href="{{ url('/doctor') }}">Dr. Anjali Gupta</a></div><div class="team-subtitle">Obstetrician</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end team-section -->

   <!-- start contact-section -->
    <section class="contact-section fix">
      <div class="outer-container">
        <div class="row g-4">
          <div class="image-column col-xl-6">
            <div class="inner-column">
              <div class="image"><img src="{{ asset('images/resource/contact1-1.jpg') }}" alt=""></div>
              <div class="content"> <div class="h2 title char-animation">Mother & Child Questions Answered.</div>
                <div class="info"><span>Drop Us Email</span> <div class="h4 info-title">info@womenandchildcare.com</div></div>
              </div>
            </div>
          </div>
          <div class="content-column col-xl-6">
            <div class="inner-column">
              <div class="bg bg-image"><img src="{{ asset('images/background/conatct-bg1-1.png') }}" alt=""></div>
              <div class="sec-title light mb-60"> <div class="h6 sub-title border-style">Contact us</div> <div class="h2 title char-animation">Book appointment today!</div></div>
              <div class="form-box"><div class="inner-box">
                  <form action="#">
                    <div class="row gx-3">
                      <div class="col-sm-6 wow fadeInUp animated" data-wow-delay=".2s"><div class="form-clt"><input type="text" name="name" id="name" placeholder="Full Name" required=""></div></div>
                      <div class="col-sm-6 wow fadeInUp animated" data-wow-delay=".2s"><div class="form-clt"><input type="text" name="name" id="name2" placeholder="Phone No" required=""></div></div>
                      <div class="col-sm-12 wow fadeInUp animated" data-wow-delay=".4s"><div class="form-clt"><input type="email" name="email" id="email" placeholder="Email Address"></div></div>
                      <div class="col-sm-12 wow fadeInUp animated" data-wow-delay=".6s"><div class="form-clt"><textarea name="form_message" class="required" placeholder="Your Message"></textarea></div></div>
                      <div class="col-sm-12 wow fadeInUp animated" data-wow-delay=".8s"><button class="theme-btn btn-style-four" type="submit"><span class="btn-title">Book Appointment</span></button></div>
                    </div>
                  </form>
              </div></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end contact-section -->

    <!-- start blog-section -->
    <section class="blog-section fix section-padding">
      <div class="auto-container">
        <div class="row justify-content-center">
          <div class="sec-title col-lg-6 text-center mb-30"> <div class="h6 sub-title">Our Blog</div> <div class="h2 title char-animation">Checkout latest news update & articles</div></div>
        </div>
        <div class="row gx-4">
          <div class="col-xl-4 col-md-6">
            <div class="blog-block wow fadeInUp" data-wow-delay="200ms">
              <div class="thumb"><img src="{{ asset('images/resource/blog1-1.jpg') }}" alt=""><img src="{{ asset('images/resource/blog1-1.jpg') }}" alt=""><span class="date">06</span></div>
              <div class="content"> <div class="h4 entry-title"><a href="{{ url('/blog') }}">Pregnancy Care Tips For Healthy Mother & Baby</a></div><div class="mascot-post-excerpt">Simple tips for a healthy pregnancy, safe delivery and happy motherhood journey.</div><a href="{{ url('/blog') }}" class="link-btn">Read More<i class="fa fa-arrow-right"></i></a></div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="blog-block wow fadeInUp" data-wow-delay="400ms">
              <div class="thumb"><img src="{{ asset('images/resource/blog1-2.jpg') }}" alt=""><img src="{{ asset('images/resource/blog1-2.jpg') }}" alt=""><span class="date">05</span></div>
              <div class="content"> <div class="h4 entry-title"><a href="{{ url('/blog') }}">Child Vaccination: What Every Parent Should Know</a></div><div class="mascot-post-excerpt">Complete guide to child vaccination schedule, safety and why on-time vaccine matters.</div><a href="{{ url('/blog') }}" class="link-btn">Read More<i class="fa fa-arrow-right"></i></a></div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="blog-block wow fadeInUp" data-wow-delay="600ms">
              <div class="thumb"><img src="{{ asset('images/resource/blog1-3.jpg') }}" alt=""><img src="{{ asset('images/resource/blog1-3.jpg') }}" alt=""><span class="date">04</span></div>
              <div class="content"> <div class="h4 entry-title"><a href="{{ url('/blog') }}">Newborn Care: First Month Guide For New Parents</a></div><div class="mascot-post-excerpt">Feeding, sleep, hygiene and care tips for your newborn in the first precious month.</div><a href="{{ url('/blog') }}" class="link-btn">Read More<i class="fa fa-arrow-right"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end blog-section -->

    <!-- start cta-section -->
    <section class="cta-section">
      <div class="outer-box fix">
        <div class="bg bg-image"><img src="{{ asset('images/background/cta-bg1-1.png') }}" alt=""></div>
        <div class="auto-container">
          <div class="row g-0">
            <div class="cta-block col-md-4"><div class="inner-block"> <div class="h4 title">Address</div><span>4140 Parker Rd. Allentown, <br>New Mexico 31134</span></div></div>
            <div class="cta-block col-md-4"><div class="inner-block"> <div class="h4 title">Available Hour</div><span>Fri - The: 10:00- 24:00</span><span>Sat - Mon: 01:00- 12:00</span></div></div>
            <div class="cta-block col-md-4"><div class="inner-block"> <div class="h4 title">Contact Us</div><span>example1@email.com </span><span>+000 888 5555 </span></div></div>
          </div>
        </div>
      </div>
    </section>
    <!-- end cta-section -->
@endsection