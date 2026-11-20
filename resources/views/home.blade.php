@extends('layouts.app')

@section('title', 'Women & Childs Care - Home')

@section('content')
    <!-- start banner-section -->
<section class="banner-section fix">
      <div class="outer-box fix">
        <div class="bg bg-image"><img src="{{ asset($page->hero_image ?? 'images/banner/1.jpg') }}" alt=""></div>
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
              <span>{{ $page->hero_trusted ?? 'Trusted by 50,000+ patients' }} </span>
            </div> 
            <div class="h1 banner-title wow fadeInUp" data-wow-delay="200ms">{{ $page->hero_title ?? $page->title ?? 'Care for Every Woman Care for Every Child' }}</div>
            <div class="text wow fadeInUp" data-wow-delay="400ms">{{ $page->hero_text ?? $page->content ?? 'From pregnancy to motherhood, and from newborn to growing child — complete, gentle and expert care under one roof, at every stage of life.' }}</div>
          </div>
        </div>
        <div class="feature-box">
          <div class="row g-0">
            <div class="feature col-md-4 wow fadeInUp" data-wow-delay="200ms">
              <div class="inner">
                <span>{{ $page->hero_phone ?? '+91-90 15 59 8903' }}</span>
                <span class="call">Give Us a Call </span>
              </div>
            </div>
            <div class="feature col-md-4 wow fadeInUp" data-wow-delay="400ms">
              <div class="inner">
                <span>{{ $page->hero_timing ?? 'Mon - Fri: 8:00AM - 7:00PM' }}</span>
                <span>{{ $page->hero_timing2 ?? 'Sat - Sun: Closed' }}</span>
              </div>
            </div>
            <div class="feature col-md-4 wow fadeInUp" data-wow-delay="600ms">
              <div class="inner">
                <span>{{ $page->hero_address ?? 'Location-: H.No-211,' }}</span>
                <span>{{ $page->hero_address2 ?? 'Sector-31, Gurgaon, Haryana India' }}</span>
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
            <div class="image"><img src="{{ asset($page->about_image1 ?? 'images/resource/about1-1.jpg') }}" alt=""></div>
          </div>
          <div class="image-box two wow fadeInUp" data-wow-delay="400ms">
            <div class="image"><img src="{{ asset($page->about_image2 ?? 'images/resource/about1-2.jpg') }}" alt=""></div>
          </div>
        </div>
      </div>
      <div class="content-column col-xl-6 col-lg-10">
        <div class="inner-column">
          <div class="sec-title">
            <div class="h6 sub-title">{{ $page->about_subtitle ?? 'Who we are' }}</div>
            <div class="h2 title char-animation">{{ $page->about_title ?? 'Care That Grows With Your Family' }}</div>
            <div class="text">{{ $page->about_text ?? 'Women and Child Care Clinic me hum sirf ilaaj nahi karte, hum har maa aur har bacche ke saath ek lamba rishta banate hain.' }}</div>
          </div>
          <div class="feature-box">
            <div class="feature wow fadeInUp" data-wow-delay="200ms">
              <div class="icon"><i aria-hidden="true" class="flaticon-set-ivf"></i></div>
              <div class="h5 title">{!! nl2br($page->about_feature1 ?? 'No Hidden <br>Costs') !!}</div>
            </div>
            <div class="feature wow fadeInUp" data-wow-delay="400ms">
              <div class="icon"><i aria-hidden="true" class="flaticon-set-maternity"></i></div>
              <div class="h5 title">{!! nl2br($page->about_feature2 ?? 'One Clinic For <br>Mother & Child') !!}</div>
            </div>
          </div>
          <ul class="list-style-one wow fadeInUp" data-wow-delay="500ms">
            <li><i class="fas fa-check-circle"></i><span>{{ $page->about_point1 ?? 'Normal & High-Risk Pregnancy, Delivery aur Postpartum Care' }}</span></li>
            <li><i class="fas fa-check-circle"></i><span>{{ $page->about_point2 ?? 'Newborn, Vaccination, Growth & Nutrition ke liye Child Care' }}</span></li>
            <li><i class="fas fa-check-circle"></i><span>{{ $page->about_point3 ?? "Women's Health-PCOS, Ultrasound & General Checkup" }}</span></li>
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
<!-- start services-section -->
<section class="services-section">
  <div class="outer-box fix section-padding">
    <div class="auto-container">
      <div class="row justify-content-center">
        <div class="sec-title col-lg-7 mb-40 text-center">
          <div class="h6 sub-title border-style">{{ $page->services_subtitle ?? 'Service Area' }}</div>
          <div class="h2 title char-animation">{{ $page->services_title ?? 'Complete Women & Child Healthcare Services' }}</div>
        </div>
      </div>
    </div>
    <div class="outer-container fix">
      <div class="swiper services-slider pb-0">
        <div class="swiper-wrapper">

          {{-- Service 1 --}}
          <div class="service-block swiper-slide wow fadeInUp" data-wow-delay="200ms">
            <div class="inner-block"><div class="content-box"><div class="inner-box">
              <div class="icon"><div class="service-icon"><i aria-hidden="true" class="fa-solid fa-person-pregnant"></i></div></div>
              <div class="h4 service-title"><a href="{{ url('/pregnancy-care') }}">{{ $page->service1_title ?? 'Pregnancy Care' }}</a></div>
              <div class="service-details">{{ $page->service1_text ?? 'Complete care and monitoring for mother and baby, from pregnancy to recovery after birth.' }}</div>
              <a class="link-btn-style" href="{{ url('/pregnancy-care') }}">Read More<i class="flaticon-common-arrow-right1"></i></a>
            </div></div></div>
          </div>

          {{-- Service 2 --}}
          <div class="service-block swiper-slide wow fadeInUp" data-wow-delay="400ms">
            <div class="inner-block"><div class="content-box"><div class="inner-box">
              <div class="icon"><div class="service-icon"><i aria-hidden="true" class="fa-solid fa-heart-pulse"></i></div></div>
              <div class="h4 service-title"><a href="{{ url('/normal-delivery') }}">{{ $page->service2_title ?? 'Safe Delivery' }}</a></div>
              <div class="service-details">{{ $page->service2_text ?? "Specialized monitoring and medical care for high-risk pregnancy, for mother and baby's safety." }}</div>
              <a class="link-btn-style" href="{{ url('/normal-delivery') }}">Read More<i class="flaticon-common-arrow-right1"></i></a>
            </div></div></div>
          </div>

          {{-- Service 3 --}}
          <div class="service-block swiper-slide wow fadeInUp" data-wow-delay="600ms">
            <div class="inner-block"><div class="content-box"><div class="inner-box">
              <div class="icon"><div class="service-icon"><i aria-hidden="true" class="fa-solid fa-baby"></i></div></div>
              <div class="h4 service-title"><a href="{{ url('/child-vaccination') }}">{{ $page->service3_title ?? 'Child Vaccination' }}</a></div>
              <div class="service-details">{{ $page->service3_text ?? 'Safe delivery options — Normal, Instrumental and Cesarean, as per your condition and need.' }}</div>
              <a class="link-btn-style" href="{{ url('/child-vaccination') }}">Read More<i class="flaticon-common-arrow-right1"></i></a>
            </div></div></div>
          </div>

          {{-- Service 4 --}}
          <div class="service-block swiper-slide wow fadeInUp" data-wow-delay="800ms">
            <div class="inner-block"><div class="content-box"><div class="inner-box">
              <div class="icon"><div class="service-icon"><i aria-hidden="true" class="fa-solid fa-magnifying-glass"></i></div></div>
              <div class="h4 service-title"><a href="{{ url('/general-pediatrics') }}">{{ $page->service4_title ?? 'General Pediatrics' }}</a></div>
              <div class="service-details">{{ $page->service4_text ?? 'Complete evaluation and treatment for infertility, with accurate diagnosis and right guidance.' }}</div>
              <a class="link-btn-style" href="{{ url('/general-pediatrics') }}">Read More<i class="flaticon-common-arrow-right1"></i></a>
            </div></div></div>
          </div>

          {{-- Service 5 --}}
          <div class="service-block swiper-slide">
            <div class="inner-block"><div class="content-box"><div class="inner-box">
              <div class="icon"><div class="service-icon"><i aria-hidden="true" class="fa-solid fa-user-doctor"></i></div></div>
              <div class="h4 service-title"><a href="{{ url('/womens-health') }}">{{ $page->service5_title ?? "Women's Health" }}</a></div>
              <div class="service-details">{{ $page->service5_text ?? 'Minimally invasive surgery for gynecological problems, with faster recovery and less pain.' }}</div>
              <a class="link-btn-style" href="{{ url('/womens-health') }}">Read More<i class="flaticon-common-arrow-right1"></i></a>
            </div></div></div>
          </div>

          {{-- Service 6 --}}
          <div class="service-block swiper-slide">
            <div class="inner-block"><div class="content-box"><div class="inner-box">
              <div class="icon"><div class="service-icon"><i aria-hidden="true" class="fa-solid fa-scissors"></i></div></div>
              <div class="h4 service-title"><a href="{{ url('/newborn-care') }}">{{ $page->service6_title ?? 'Newborn Care' }}</a></div>
              <div class="service-details">{{ $page->service6_text ?? 'Safe surgical treatment for fibroids and uterus problems, with expert care and support.' }}</div>
              <a class="link-btn-style" href="{{ url('/newborn-care') }}">Read More<i class="flaticon-common-arrow-right1"></i></a>
            </div></div></div>
          </div>

          {{-- Service 7 --}}
          <div class="service-block swiper-slide">
            <div class="inner-block"><div class="content-box"><div class="inner-box">
              <div class="icon"><div class="service-icon"><i aria-hidden="true" class="fa-solid fa-spa"></i></div></div>
              <div class="h4 service-title"><a href="{{ url('/child-growth') }}">{{ $page->service7_title ?? 'Child-Growth' }}</a></div>
              <div class="service-details">{{ $page->service7_text ?? 'Aesthetic gynecology procedures including labiaplasty and vaginal rejuvenation, with privacy.' }}</div>
              <a class="link-btn-style" href="{{ url('/child-growth') }}">Read More<i class="flaticon-common-arrow-right1"></i></a>
            </div></div></div>
          </div>

          {{-- Service 8 --}}
          <div class="service-block swiper-slide">
            <div class="inner-block"><div class="content-box"><div class="inner-box">
              <div class="icon"><div class="service-icon"><i aria-hidden="true" class="fa-solid fa-droplet"></i></div></div>
              <div class="h4 service-title"><a href="{{ url('/high-risk-pregnancy') }}">{{ $page->service8_title ?? 'high-risk-pregnancy' }}</a></div>
              <div class="service-details">{{ $page->service8_text ?? 'Specialized care for pelvic health, bladder problems and reconstructive gynecology surgery.' }}</div>
              <a class="link-btn-style" href="{{ url('/high-risk-pregnancy') }}">Read More<i class="flaticon-common-arrow-right1"></i></a>
            </div></div></div>
          </div>

        </div>
        <div class="services-dot"></div>
      </div>
    </div>
  </div>
</section>
<!-- end services-section -->    <!-- end services-section -->

   <!-- start why-choose-us-section -->
<section class="why-choose-us-section fix section-padding">
  <div class="auto-container">
    <div class="row">
      <div class="content-column col-xl-6 col-lg-8">
        <div class="inner-column">
          <div class="sec-title">
            <div class="h6 sub-title">{{ $page->wcu_subtitle ?? 'Why Choose Us' }}</div>
            <div class="h2 title char-animation">{{ $page->wcu_title ?? 'Why Families Trust Us?' }}</div>
            <div class="text">{{ $page->wcu_text ?? 'From pregnancy to childhood, we provide complete, safe and caring treatment for mother and child — all under one roof, with personal attention.' }}</div>
          </div>
          <ul class="accordion-box">
            <li class="accordion block wow fadeInUp" data-wow-delay="200ms">
              <div class="acc-btn">{{ $page->wcu_acc1_title ?? '01. Expert Doctors for Mother & Child' }} <i class="icon flaticon-common-right-arrow"></i></div>
              <div class="acc-content"><div class="content"><div class="text">{{ $page->wcu_acc1_text ?? 'Experienced gynecologist and pediatrician together, so mother and baby both get expert care in every visit.' }}</div></div></div>
            </li>
            <li class="accordion block active-block wow fadeInUp" data-wow-delay="400ms">
              <div class="acc-btn active">{{ $page->wcu_acc2_title ?? '02. Complete Care Under One Roof' }} <i class="icon flaticon-common-right-arrow"></i></div>
              <div class="acc-content current"><div class="content"><div class="text">{{ $page->wcu_acc2_text ?? 'Pregnancy, delivery, vaccination and child growth — all services in one clinic, no need to run anywhere else.' }}</div></div></div>
            </li>
            <li class="accordion block wow fadeInUp" data-wow-delay="600ms">
              <div class="acc-btn">{{ $page->wcu_acc3_title ?? '03. Gentle & Personal Care' }} <i class="icon flaticon-common-right-arrow"></i></div>
              <div class="acc-content"><div class="content"><div class="text">{{ $page->wcu_acc3_text ?? 'We listen to every mother, explain everything clearly and give personal attention to every child.' }}</div></div></div>
            </li>
          </ul>
        </div>
      </div>
      <div class="image-column col-xl-6 col-lg-8 col-md-10">
        <div class="inner-column wow fadeInUp" data-wow-delay="200ms">
          <div class="image"><img src="{{ asset($page->wcu_image ?? 'images/resource/wcu1-1.jpg') }}" alt=""></div>
          <div class="info wow fadeInUp" data-wow-delay="400ms">
            <div class="h4 title">{{ $page->wcu_info_title ?? 'Care For Every Stage Of Life' }}</div>
            <div class="list-info">
              <ul class="list-style-two">
                <li><i class="fa-solid fa-check"></i><span> {{ $page->wcu_list1 ?? 'Pregnancy Care' }}</span></li>
                <li><i class="fa-solid fa-check"></i><span> {{ $page->wcu_list2 ?? 'Safe Delivery' }}</span></li>
                <li><i class="fa-solid fa-check"></i><span> {{ $page->wcu_list3 ?? 'Newborn Care' }}</span></li>
              </ul>
              <ul class="list-style-two">
                <li><i class="fa-solid fa-check"></i><span> {{ $page->wcu_list4 ?? 'Child Vaccination' }}</span></li>
                <li><i class="fa-solid fa-check"></i><span> {{ $page->wcu_list5 ?? "Women's Health" }}</span></li>
                <li><i class="fa-solid fa-check"></i><span> {{ $page->wcu_list6 ?? 'Growth Monitoring' }}</span></li>
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
      <div class="funfact-block col-md-3"><div class="inner-block"><div class="counter-box"> <div class="h2 count-box"><span class="count-text" data-speed="3000" data-stop="{{ $page->funfact1_number ?? '10' }}">0</span>{{ $page->funfact1_suffix ?? '' }}</div><div class="text">{{ $page->funfact1_text ?? 'Years of Experience' }}</div></div></div></div>
      <div class="funfact-block col-md-3"><div class="inner-block"><div class="counter-box"> <div class="h2 count-box"><span class="count-text" data-speed="3000" data-stop="{{ $page->funfact2_number ?? '20' }}">0</span>{{ $page->funfact2_suffix ?? '+' }}</div><div class="text">{{ $page->funfact2_text ?? 'Expert Doctors & Staff' }}</div></div></div></div>
      <div class="funfact-block col-md-3"><div class="inner-block"><div class="counter-box"> <div class="h2 count-box"><span class="count-text" data-speed="3000" data-stop="{{ $page->funfact3_number ?? '20' }}">0</span>{{ $page->funfact3_suffix ?? 'K' }}</div><div class="text">{{ $page->funfact3_text ?? 'Happy Families' }}</div></div></div></div>
      <div class="funfact-block col-md-3"><div class="inner-block mb-0"><div class="counter-box"> <div class="h2 count-box"><span class="count-text" data-speed="3000" data-stop="{{ $page->funfact4_number ?? '80' }}">0</span>{{ $page->funfact4_suffix ?? 'M' }}</div><div class="text">{{ $page->funfact4_text ?? 'Healthy Babies Delivered' }}</div></div></div></div>
    </div>
  </div>
</section>
<!-- end funfact-section -->
<!-- start working-section -->
<section class="working-section fix">
  <div class="outer-box fix section-padding">
    <div class="bg bg-image"><img src="{{ asset($page->working_image ?? 'images/resource/work1-1.jpg') }}" alt=""></div>
    <div class="auto-container">
      <div class="row align-items-center">
        <div class="content-column col-xl-6 col-lg-10">
          <div class="inner-column">
            <div class="sec-title light"> <div class="h6 sub-title">{{ $page->working_subtitle ?? 'Our Achievements' }}</div> <div class="h2 title char-animation">{{ $page->working_title ?? 'Trusted Care For Mother & Child' }}</div></div>
            <div class="text one">{{ $page->working_text1 ?? 'With our personal attention and complete care for mother and child, we help thousands of families stay healthy — from pregnancy to delivery and childhood. Care needs trust, patience and right guidance.' }}</div>
            <div class="text two">{{ $page->working_text2 ?? 'The chart shows our care success across key services — how our dedicated team and personalized care ensure healthy outcomes for every mother and child.' }}</div>
            <a href="{{ url('/appointment') }}" class="theme-btn btn-style-two">
              <span class="btn-arrow-left"><i class="fas flaticon-common-right-arrow"></i></span>
              <span class="btn-title">{{ $page->working_btn_text ?? 'Book a consultation' }}</span>
              <span class="btn-arrow-right"><i class="fas flaticon-common-right-arrow"></i></span>
            </a>
          </div>
        </div>
        <div class="exp-column col-xl-5 offset-xl-1">
          <div class="inner-column">
            <div class="exp-details__progress">
              @for($i=1; $i<=4; $i++)
              <div class="exp-details__progress-single"><div class="exp-details__progress-title">{{ $page->{'working_bar'.$i.'_title'} ?? ['Antenatal Care','Safe Delivery','Child Vaccination','Newborn Care'][$i-1] }}</div><div class="bar"><div class="bar-inner count-bar" data-percent="{{ $page->{'working_bar'.$i.'_percent'} ?? [98,97,96,99][$i-1] }}%"><div class="count-text">{{ $page->{'working_bar'.$i.'_percent'} ?? [98,97,96,99][$i-1] }}%</div></div></div></div>
              @endfor
            </div> <div class="h3 title">{{ $page->working_success_title ?? 'Our Care Success Rate' }}</div>
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
                <div class="sec-title mb-0"> <div class="h6 sub-title border-style">{{ $page->testi_subtitle ?? 'Testimonial' }}</div> <div class="h2 title">{{ $page->testi_title ?? 'Real stories from happy mothers' }}</div></div>
                <div class="swiper testimonial-slider pb-0">
                  <div class="swiper-wrapper">
                      @for($i=1; $i<=3; $i++)
                      <div class="swiper-slide"><div class="testi-slider-block-2">
                            <div class="quote-icon"><img src="{{ asset('images/icons/quote.png') }}" alt=""></div>
                            <div class="text">{{ $page->{'testi'.$i.'_text'} ?? ['Doctor explained everything so clearly during my pregnancy. I felt safe and relaxed at every visit, and my delivery was smooth and comfortable. Truly caring team.','From first checkup to my baby\'s vaccination, everything was perfect. They always answer our questions patiently and take great care of my child.','My daughter\'s growth and vaccination are always on time here. Doctors are kind, gentle with kids and give full attention to every small concern.'][$i-1] }}</div>
                            <div class="client-info"><div class="client-img"><img src="{{ asset($page->{'testi'.$i.'_image'} ?? 'images/resource/testi-2-1.jpg') }}" alt=""></div><div class="info-content"> <div class="h5 name">{{ $page->{'testi'.$i.'_name'} ?? ['Priya Sharma','Neha Verma','Anjali Gupta'][$i-1] }}</div><span>{{ $page->{'testi'.$i.'_role'} ?? ['New Mother','Mother of Two','Happy Parent'][$i-1] }}</span></div></div>
                      </div></div>
                      @endfor
                  </div>
                </div>
                <div class="array-button"><button class="array-prev"><i class="lnr-icon-arrow-left"></i></button><button class="array-next"><i class="lnr-icon-arrow-right"></i></button></div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
            <div class="tetsimonial-image-items">
                <div class="thumb fix"><img data-speed=".8" src="{{ asset($page->testi_side_image ?? 'images/resource/testimonial-image2-1.jpg') }}" alt=""></div>
                <div class="testi-ratting">
                    <div class="rattings"> <div class="h2 ratting-count">{{ $page->testi_rating ?? '4.8' }}</div>
                        <div class="star"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    </div>
                    <div class="testi-line"></div>
                    <p>{!! nl2br(e($page->testi_rating_text ?? "From 3k Members, \nReviewed by Google")) !!}</p>
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
      <div class="sec-title col-lg-7 text-center mb-30"> <div class="h6 sub-title">{{ $page->team_subtitle ?? 'Team' }}</div> <div class="h2 title">{{ $page->team_title ?? 'The team caring for mother & child' }}</div></div>
    </div>
    <div class="swiper team-slider pb-0">
      <div class="swiper-wrapper">
        @for($i=1; $i<=3; $i++)
        <div class="team-block swiper-slide wow fadeInUp" data-wow-delay="{{ $i*200 }}ms">
          <div class="inner-block"><div class="image"><img src="{{ asset($page->{'team'.$i.'_image'} ?? ['images/resource/team1-1.jpg','images/resource/team1-2.jpg','images/resource/team1-2.jpg'][$i-1]) }}" alt=""></div>
            <div class="content"> <div class="h4 team-title"><a href="{{ url('/doctor') }}">{{ $page->{'team'.$i.'_name'} ?? ['Dr. Devendra Agarwal','Dr. Anubha Gupta','Dr. Anjali Gupta'][$i-1] }}</a></div><div class="team-subtitle">{{ $page->{'team'.$i.'_role'} ?? ['MBBS, MD - Pediatrics','DGO, MBBS, Gynecologist,Obstetrician','Obstetrician'][$i-1] }}</div></div>
          </div>
        </div>
        @endfor
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
          <div class="image"><img src="{{ asset($page->contact_left_image ?? 'images/resource/contact1-1.jpg') }}" alt=""></div>
          <div class="content"> <div class="h2 title">{{ $page->contact_left_title ?? 'Mother & Child Questions Answered.' }}</div>
            <div class="info"><span>{{ $page->contact_email_label ?? 'Drop Us Email' }}</span> <div class="h4 info-title">{{ $page->contact_email ?? 'info@womenandchildcare.com' }}</div></div>
          </div>
        </div>
      </div>
      <div class="content-column col-xl-6">
        <div class="inner-column">
          <div class="bg bg-image"><img src="{{ asset($page->contact_bg_image ?? 'images/background/conatct-bg1-1.png') }}" alt=""></div>
          <div class="sec-title light mb-60"> <div class="h6 sub-title border-style">{{ $page->contact_subtitle ?? 'Contact us' }}</div> <div class="h2 title">{{ $page->contact_title ?? 'Book appointment today!' }}</div></div>
          <div class="form-box"><div class="inner-box">
              <form action="#">
                <div class="row gx-3">
                  <div class="col-sm-6 wow fadeInUp animated" data-wow-delay=".2s"><div class="form-clt"><input type="text" name="name" id="name" placeholder="Full Name" required=""></div></div>
                  <div class="col-sm-6 wow fadeInUp animated" data-wow-delay=".2s"><div class="form-clt"><input type="text" name="name" id="name2" placeholder="Phone No" required=""></div></div>
                  <div class="col-sm-12 wow fadeInUp animated" data-wow-delay=".4s"><div class="form-clt"><input type="email" name="email" id="email" placeholder="Email Address"></div></div>
                  <div class="col-sm-12 wow fadeInUp animated" data-wow-delay=".6s"><div class="form-clt"><textarea name="form_message" class="required" placeholder="Your Message"></textarea></div></div>
                  <div class="col-sm-12 wow fadeInUp animated" data-wow-delay=".8s"><button class="theme-btn btn-style-four" type="submit"><span class="btn-title">{{ $page->contact_btn_text ?? 'Book Appointment' }}</span></button></div>
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
      <div class="sec-title col-lg-6 text-center mb-30"> <div class="h6 sub-title">{{ $page->blog_subtitle ?? 'Our Blog' }}</div> <div class="h2 title">{{ $page->blog_title ?? 'Checkout latest news update & articles' }}</div></div>
    </div>
    <div class="row gx-4">
      @for($i=1; $i<=3; $i++)
      <div class="col-xl-4 col-md-6">
        <div class="blog-block wow fadeInUp" data-wow-delay="{{ $i*200 }}ms">
          <div class="thumb"><img src="{{ asset($page->{'blog'.$i.'_image'} ?? ['images/resource/blog1-1.jpg','images/resource/blog1-2.jpg','images/resource/blog1-3.jpg'][$i-1]) }}" alt=""><img src="{{ asset($page->{'blog'.$i.'_image'} ?? ['images/resource/blog1-1.jpg','images/resource/blog1-2.jpg','images/resource/blog1-3.jpg'][$i-1]) }}" alt=""><span class="date">{{ $page->{'blog'.$i.'_date'} ?? ['06','05','04'][$i-1] }}</span></div>
          <div class="content"> <div class="h4 entry-title"><a href="{{ url('/blog') }}">{{ $page->{'blog'.$i.'_title'} ?? ['Pregnancy Care Tips For Healthy Mother & Baby','Child Vaccination: What Every Parent Should Know','Newborn Care: First Month Guide For New Parents'][$i-1] }}</a></div><div class="mascot-post-excerpt">{{ $page->{'blog'.$i.'_excerpt'} ?? ['Simple tips for a healthy pregnancy, safe delivery and happy motherhood journey.','Complete guide to child vaccination schedule, safety and why on-time vaccine matters.','Feeding, sleep, hygiene and care tips for your newborn in the first precious month.'][$i-1] }}</div><a href="{{ url('/blog') }}" class="link-btn">Read More<i class="fa fa-arrow-right"></i></a></div>
        </div>
      </div>
      @endfor
    </div>
  </div>
</section>
<!-- end blog-section -->
 <!-- start cta-section -->
<section class="cta-section">
  <div class="outer-box fix">
    <div class="bg bg-image"><img src="{{ asset($page->cta_bg_image ?? 'images/background/cta-bg1-1.png') }}" alt=""></div>
    <div class="auto-container">
      <div class="row g-0">
        <div class="cta-block col-md-4"><div class="inner-block"> <div class="h4 title">{{ $page->cta1_title ?? 'Address' }}</div><span>{!! nl2br(e($page->cta1_text ?? "4140 Parker Rd. Allentown, \nNew Mexico 31134")) !!}</span></div></div>
        <div class="cta-block col-md-4"><div class="inner-block"> <div class="h4 title">{{ $page->cta2_title ?? 'Available Hour' }}</div><span>{{ $page->cta2_text1 ?? 'Fri - The: 10:00- 24:00' }}</span><span>{{ $page->cta2_text2 ?? 'Sat - Mon: 01:00- 12:00' }}</span></div></div>
        <div class="cta-block col-md-4"><div class="inner-block"> <div class="h4 title">{{ $page->cta3_title ?? 'Contact Us' }}</div><span>{{ $page->cta3_text1 ?? 'example1@email.com' }} </span><span>{{ $page->cta3_text2 ?? '+000 888 5555' }} </span></div></div>
      </div>
    </div>
  </div>
</section>
    <!-- end cta-section -->
@endsection