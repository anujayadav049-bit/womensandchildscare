@extends('layouts.app')

@section('title', 'About Us - Women & Childs Care')

@section('content')
<!-- Start main-content -->
<section class="page-title" style="background-image: url({{ $page->about_banner_image ? asset($page->about_banner_image) : asset('images/resource/page-title.jpg') }});">
  <div class="auto-container">
    <div class="title-outer text-center">
      <div class="h1 title">{{ $page->about_banner_title ?? 'About' }}</div>
      <ul class="page-breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>{{ $page->about_banner_breadcrumb ?? 'About' }}</li>
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
            <div class="image"><img src="{{ $page->about_image1 ? asset($page->about_image1) : asset('images/resource/about1-1.jpg') }}" alt=""></div>
          </div>
          <div class="image-box two wow fadeInUp" data-wow-delay="400ms">
            <div class="image"><img src="{{ $page->about_image2 ? asset($page->about_image2) : asset('images/resource/about1-2.jpg') }}" alt=""></div>
          </div>
        </div>
      </div>
      <div class="content-column col-xl-6 col-lg-10">
        <div class="inner-column">
          <div class="sec-title">
            <div class="h6 sub-title">{{ $page->about_subtitle ?? 'Who we are' }}</div>
            <div class="h2 title char-animation">{{ $page->about_title ?? 'Care That Grows With Your Family' }}</div>
            <div class="text">{{ $page->about_text ?? 'Women and Child Care Clinic me hum sirf ilaaj nahi karte, hum har maa aur har bacche ke saath ek lamba rishta banate hain. Pregnancy se lekar delivery, newborn care se lekar bacche ke growth tak — aur mahilaon ki har stage ki health ke liye, ek hi jagah par expert, gentle aur honest care.' }}</div>
          </div>
          <div class="feature-box">
            <div class="feature wow fadeInUp" data-wow-delay="200ms">
              <div class="icon"><i aria-hidden="true" class=" flaticon-set-ivf"></i></div>
              <div class="h5 title">{!! nl2br(e($page->about_feature1 ?? "No Hidden\nCosts")) !!}</div>
            </div>
            <div class="feature wow fadeInUp" data-wow-delay="400ms">
              <div class="icon"><i aria-hidden="true" class=" flaticon-set-maternity"></i></div>
              <div class="h5 title">{!! nl2br(e($page->about_feature2 ?? "One Clinic For\nMother & Child")) !!}</div>
            </div>
          </div>
          <ul class="list-style-one wow fadeInUp" data-wow-delay="500ms">
            <li><i aria-hidden="true" class="fas fa-check-circle"></i><span>{{ $page->about_point1 ?? 'Normal & High-Risk Pregnancy, Delivery aur Postpartum Care' }}</span></li>
            <li><i aria-hidden="true" class="fas fa-check-circle"></i><span>{{ $page->about_point2 ?? 'Newborn, Vaccination, Growth & Nutrition ke liye Child Care' }}</span></li>
            <li><i aria-hidden="true" class="fas fa-check-circle"></i><span>{{ $page->about_point3 ?? "Women's Health-PCOS, Ultrasound & General Checkup" }}</span></li>
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
          <div class="sec-title">
            <div class="h6 sub-title">{{ $page->wcu_subtitle ?? 'Why Choose Us' }}</div>
            <div class="h2 title char-animation">{{ $page->wcu_title ?? 'Why Families Trust Us?' }}</div>
            <div class="text">{{ $page->wcu_text ?? 'From pregnancy to childhood, we provide complete, safe and caring treatment for mother and child — all under one roof, with personal attention.' }}</div>
          </div>
          <ul class="accordion-box">
            @for($i=1; $i<=3; $i++)
            <li class="accordion block {{ $i==2 ? 'active-block' : '' }} wow fadeInUp" data-wow-delay="200ms">
              <div class="acc-btn {{ $i==2 ? 'active' : '' }}">{{ $i }}. {{ $page->{'wcu_acc'.$i.'_title'} ?? ['Expert Doctors for Mother & Child','Complete Care Under One Roof','Gentle & Personal Care'][$i-1] }}
                <i class="icon flaticon-common-right-arrow"></i>
              </div>
              <div class="acc-content {{ $i==2 ? 'current' : '' }}">
                <div class="content"><div class="text">{{ $page->{'wcu_acc'.$i.'_text'} ?? ['Experienced gynecologist and pediatrician together, so mother and baby both get expert care in every visit.','Pregnancy, delivery, vaccination and child growth — all services in one clinic, no need to run anywhere else.','We listen to every mother, explain everything clearly and give personal attention to every child.'][$i-1] }}</div></div>
              </div>
            </li>
            @endfor
          </ul>
        </div>
      </div>
      <div class="image-column col-xl-6 col-lg-8 col-md-10">
        <div class="inner-column wow fadeInUp" data-wow-delay="200ms">
          <div class="image"><img src="{{ $page->wcu_image ? asset($page->wcu_image) : asset('images/resource/wcu1-1.jpg') }}" alt=""></div>
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

<!-- start team-section -->
<section class="team-section section-padding fix">
  <div class="auto-container">
    <div class="row justify-content-center">
      <div class="sec-title col-lg-7 text-center mb-30">
        <div class="h6 sub-title">{{ $page->team_subtitle ?? 'Team' }}</div>
        <div class="h2 title">{{ $page->team_title ?? 'The team caring for mother & child' }}</div>
      </div>
    </div>
    <div class="swiper team-slider pb-0">
      <div class="swiper-wrapper">
        @for($i=1; $i<=3; $i++)
        <div class="team-block swiper-slide wow fadeInUp" data-wow-delay="200ms">
          <div class="inner-block">
            <div class="image"><img src="{{ $page->{'team'.$i.'_image'} ? asset($page->{'team'.$i.'_image'}) : asset('images/resource/team1-'.$i.'.jpg') }}" alt=""></div>
            <div class="content">
              <div class="h4 team-title"><a href="{{ url('/doctor') }}">{{ $page->{'team'.$i.'_name'} ?? ['Dr. Devendra Agarwal','Dr. Anubha Gupta','Dr. Anjali Gupta'][$i-1] }}</a></div>
              <div class="team-subtitle">{{ $page->{'team'.$i.'_role'} ?? ['MBBS, MD - Pediatrics','DGO, MBBS, Gynecologist,Obstetrician','Obstetrician'][$i-1] }}</div>
              <div class="social-icon"><div class="social-links">
                <div><a aria-label="facebook" href="#"><i class="fab fa-facebook"></i></a></div>
                <div><a aria-label="twitter" href="#"><i class="fab fa-twitter"></i></a></div>
                <div><a aria-label="instagram" href="#"><i class="fab fa-instagram"></i></a></div>
              </div></div>
            </div>
          </div>
        </div>
        @endfor
      </div>
    </div>
  </div>
</section>
<!-- end team-section -->
@endsection