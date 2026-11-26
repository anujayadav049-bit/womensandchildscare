<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $page->title }} - Women & Child Care</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">
<style>
:root{ --pink:#E84393; --pink-dark:#D6307A; --pink-light:#FDECF3; --pink-soft:#FFF5F8; --bg:#FFF9FB; --text:#2D3436; --muted:#636E72; }
body{background:var(--bg);font-family:'Inter',sans-serif;color:var(--text);font-size:14px}
h1,h2,h3,h4,h5{font-family:'Poppins',sans-serif}
.sidebar{background:#fff;min-height:100vh;padding:22px 14px;position:sticky;top:0;border-right:1px solid #FDECF3}
.sidebar .logo{font-family:'Poppins',sans-serif;font-weight:800;font-size:19px;line-height:1.15;padding:0 6px}
.sidebar .logo span{color:var(--pink)}
.sidebar .logo small{font-family:'Inter',sans-serif;font-size:10px;font-weight:700;letter-spacing:1.2px;color:var(--muted)}
.sidebar .menu-label{font-size:10px;font-weight:700;letter-spacing:1.2px;color:#B2BEC3;margin:20px 0 6px 10px}
.sidebar .nav-link{color:#636E72;border-radius:10px;padding:9px 10px;margin-bottom:2px;font-weight:500;font-size:13px;text-decoration:none;display:flex;align-items:center;gap:9px;width:100%;text-align:left;background:transparent;border:0;cursor:pointer;transition:.2s}
.sidebar .nav-link i{width:28px;height:28px;border-radius:8px;background:#FFF0F5;color:var(--pink);display:flex;align-items:center;justify-content:center;font-size:12px;flex-shrink:0}
.sidebar .nav-link:hover{background:var(--pink-soft);color:var(--pink-dark)}
.sidebar .nav-link.active{background:var(--pink);color:#fff;box-shadow:0 8px 20px rgba(232,67,147,.35)}
.sidebar .nav-link.active i{background:rgba(255,255,255,.25);color:#fff}
.sidebar .sub-link{padding:8px 10px 8px 46px !important;font-size:12.5px;color:#7A8690}
.sidebar .sub-link i{width:22px;height:22px;font-size:11px}
.sidebar .sub-link:hover{color:var(--pink-dark)}
.topbar{background:#fff;border:1px solid #FDECF3;border-radius:16px;padding:16px 20px}
.card{border:1px solid #FDECF3;border-radius:18px;background:#fff}
.form-control{border:1px solid #FDCEDF;border-radius:11px;padding:11px 13px;background:#FFF9FB;font-size:14px}
.form-control:focus{border-color:var(--pink);box-shadow:0 0 0 4px #FDECF3;outline:none;background:#fff}
.btn-pink{background:var(--pink);color:#fff;border:0;padding:11px 25px;border-radius:10px;font-weight:600;font-size:14px}
.btn-pink:hover{background:var(--pink-dark);color:#fff}
.dropdown-sub{margin-left:8px}
.section-title{background:#FFF5F8;border:1px solid #FDECF3;border-radius:12px;padding:12px 16px;font-weight:700;color:#D6307A;margin:22px 0 14px;}
</style>
</head>
<body>
<div class="container-fluid"><div class="row">
<div class="col-md-2 sidebar">
  <div class="logo">Women & <span>Child Care</span><br><small>GURUGRAM • ADMIN PANEL</small></div>
  <div class="menu-label">MAIN MENU</div>
  <a href="/admin" class="nav-link"><i class="fa-solid fa-border-all"></i> Dashboard</a>
  <div class="menu-label">WEBSITE PAGES</div>
  <a href="/admin/pages/home" class="nav-link {{ $page->slug=='home' ? 'active' : '' }}"><i class="fa-solid fa-house"></i> Home</a>
  <a href="/admin/pages/about" class="nav-link {{ $page->slug=='about' ? 'active' : '' }}"><i class="fa-solid fa-circle-info"></i> About</a>
  <div>
    <button onclick="toggleDoctor(this)" class="nav-link {{ $page->slug=='doctor' ? 'active' : '' }}" style="width:100%"><i class="fa-solid fa-user-doctor"></i> Doctor <span class="ms-auto" id="doctorArrow" style="font-size:10px;transition:.3s">▼</span></button>
    <div id="doctorDropdown" class="dropdown-sub" style="display: {{ $page->slug=='doctor' ? 'block' : 'none' }}">
      <a href="/admin/pages/doctor" class="nav-link sub-link"><i class="fa-solid fa-pen"></i> Doctor Page Edit</a>
      <a href="/admin/pages/doctor#devendra" class="nav-link sub-link"><i class="fa-solid fa-stethoscope"></i> Dr. Devendra Agarwal</a>
      <a href="/admin/pages/doctor#anubha" class="nav-link sub-link"><i class="fa-solid fa-stethoscope"></i> Dr. Anubha Gupta</a>
      <a href="/admin/pages/doctor#anjali" class="nav-link sub-link"><i class="fa-solid fa-stethoscope"></i> Dr. Anjali Gupta</a>
    </div>
  </div>
  <div>
    <button onclick="toggleServices(this)" class="nav-link {{ in_array($page->slug,['pregnancy-care','normal-delivery','high-risk-pregnancy','womens-health','newborn-care','child-vaccination','child-growth','general-pediatrics']) ? 'active' : '' }}" style="width:100%"><i class="fa-solid fa-stethoscope"></i> Services <span class="ms-auto" id="servicesArrow" style="font-size:10px;transition:.3s">▼</span></button>
    <div id="servicesDropdown" class="dropdown-sub" style="display: {{ in_array($page->slug,['pregnancy-care','normal-delivery','high-risk-pregnancy','womens-health','newborn-care','child-vaccination','child-growth','general-pediatrics']) ? 'block' : 'none' }}">
      <a href="/admin/pages/pregnancy-care" class="nav-link sub-link {{ $page->slug=='pregnancy-care' ? 'active' : '' }}"><i class="fa-solid fa-heart"></i> Pregnancy Care</a>
      <a href="/admin/pages/normal-delivery" class="nav-link sub-link {{ $page->slug=='normal-delivery' ? 'active' : '' }}"><i class="fa-solid fa-person-breastfeeding"></i> Normal Delivery</a>
      <a href="/admin/pages/high-risk-pregnancy" class="nav-link sub-link {{ $page->slug=='high-risk-pregnancy' ? 'active' : '' }}"><i class="fa-solid fa-triangle-exclamation"></i> High Risk Pregnancy</a>
      <a href="/admin/pages/womens-health" class="nav-link sub-link {{ $page->slug=='womens-health' ? 'active' : '' }}"><i class="fa-solid fa-venus"></i> Womens Health</a>
      <a href="/admin/pages/newborn-care" class="nav-link sub-link {{ $page->slug=='newborn-care' ? 'active' : '' }}"><i class="fa-solid fa-baby"></i> Newborn Care</a>
      <a href="/admin/pages/child-vaccination" class="nav-link sub-link {{ $page->slug=='child-vaccination' ? 'active' : '' }}"><i class="fa-solid fa-syringe"></i> Child Vaccination</a>
      <a href="/admin/pages/child-growth" class="nav-link sub-link {{ $page->slug=='child-growth' ? 'active' : '' }}"><i class="fa-solid fa-child"></i> Child Growth</a>
      <a href="/admin/pages/general-pediatrics" class="nav-link sub-link {{ $page->slug=='general-pediatrics' ? 'active' : '' }}"><i class="fa-solid fa-heart-pulse"></i> General Pediatrics</a>
    </div>
  </div>
  <a href="/admin/pages/contact" class="nav-link {{ $page->slug=='contact' ? 'active' : '' }}"><i class="fa-solid fa-phone"></i> Contact</a>
  {{-- FIXED: Pehle /appointment tha, ab Admin Edit khulega --}}
  <a href="/admin/pages/appointment" class="nav-link {{ $page->slug=='appointment' ? 'active' : '' }}"><i class="fa-solid fa-calendar-plus"></i> Appointment</a>
  <a href="/admin/settings" class="nav-link"><i class="fa-solid fa-gear"></i> Header / Footer</a>
  <div class="menu-label">GENERAL</div>
  <a href="/" target="_blank" class="nav-link"><i class="fa-solid fa-globe"></i> View Website</a>
  <a href="/admin/logout" class="nav-link" style="color:#D63031"><i class="fa-solid fa-right-from-bracket" style="background:#FFF1F1;color:#D63031"></i> Logout</a>
  <div class="mt-4 p-3" style="background:linear-gradient(135deg,#E84393,#FD79A8);border-radius:14px;color:#fff">
    <div style="font-size:20px">👩‍⚕️</div>
    <p class="mb-1 fw-bold" style="font-size:13px">Need Help?</p>
    <p class="mb-0" style="font-size:12px;opacity:.9">Call: +91 90155 98903<br>Mon - Sat, 10 AM - 7 PM</p>
  </div>
</div>
<div class="col-md-10 p-3 p-md-4">
  <div class="topbar d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
    <div><h4 class="fw-bold mb-0">Edit {{ $page->title }} ✏️</h4><p class="text-muted mb-0" style="font-size:13px">Edit here, click Save, it will update on website instantly.</p></div>
    <a href="/admin" class="btn btn-light" style="border-radius:11px;border:1px solid #FDECF3"><i class="fa-solid fa-arrow-left me-2"></i> Back to Dashboard</a>
  </div>
  @if(session('success'))<div class="alert alert-success" style="border-radius:12px;background:#DFF7F0;border:1px solid #B8F0DD;color:#00997A">{{ session('success') }}</div>@endif
  <div class="card p-4">
    <form method="POST" action="{{ route('admin.pages.update', $page->slug) }}" enctype="multipart/form-data">
      @csrf @method('PUT')
      <div class="mb-3"><label class="fw-bold mb-1">Page Title</label><input type="text" name="title" value="{{ $page->title }}" class="form-control"></div>

      {{-- HOME --}}
      @if($page->slug == 'home')
      <div class="section-title">🏠 HERO SECTION</div>
      <div class="mb-3"><label class="fw-bold mb-1">Hero - Trusted Text</label><input type="text" name="hero_trusted" value="{{ $page->hero_trusted ?? 'Trusted by 50,000+ patients' }}" class="form-control"></div>
      <div class="mb-3"><label class="fw-bold mb-1">Hero - Bada Heading</label><input type="text" name="hero_title" value="{{ $page->hero_title ?? $page->title }}" class="form-control"></div>
      <div class="mb-3"><label class="fw-bold mb-1">Hero - Chota Text</label><textarea name="hero_text" rows="3" class="form-control">{{ $page->hero_text ?? $page->content }}</textarea></div>
      <div class="mb-3"><label class="fw-bold mb-1">Hero - Banner Image</label>@if($page->hero_image)<div class="mb-2"><img src="{{ asset($page->hero_image) }}" style="height:90px;border-radius:10px;"></div>@endif<input type="file" name="hero_image" class="form-control" accept="image/*"></div>
      <div class="section-title">📞 HERO - Feature Box</div>
      <div class="row">
        <div class="col-md-4 mb-3"><label class="fw-bold mb-1">Phone</label><input type="text" name="hero_phone" value="{{ $page->hero_phone ?? '+91-90 15 59 8903' }}" class="form-control"></div>
        <div class="col-md-4 mb-3"><label class="fw-bold mb-1">Timing Line 1</label><input type="text" name="hero_timing" value="{{ $page->hero_timing ?? 'Mon - Fri: 8:00AM - 7:00PM' }}" class="form-control"></div>
        <div class="col-md-4 mb-3"><label class="fw-bold mb-1">Timing Line 2</label><input type="text" name="hero_timing2" value="{{ $page->hero_timing2 ?? 'Sat - Sun: Closed' }}" class="form-control"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Address Line 1</label><input type="text" name="hero_address" value="{{ $page->hero_address ?? 'Location-: H.No-211,' }}" class="form-control"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Address Line 2</label><input type="text" name="hero_address2" value="{{ $page->hero_address2 ?? 'Sector-31, Gurgaon, Haryana India' }}" class="form-control"></div>
      </div>
      <div class="section-title">📝 Page Content</div>
      <div class="mb-3"><label class="fw-bold mb-1">Main Content</label><textarea name="content" rows="8" class="form-control">{{ $page->content }}</textarea></div>
      <div class="mb-3"><label class="fw-bold mb-1">Second Content</label><textarea name="content2" rows="5" class="form-control">{{ $page->content2 }}</textarea></div>
      <h3>About Section</h3>
      <input type="text" name="about_subtitle" value="{{ $page->about_subtitle }}" placeholder="About Sub Title" class="form-control mb-2">
      <input type="text" name="about_title" value="{{ $page->about_title }}" placeholder="About Title" class="form-control mb-2">
      <textarea name="about_text" class="form-control mb-2" placeholder="About Text">{{ $page->about_text }}</textarea>
      <input type="text" name="about_feature1" value="{{ $page->about_feature1 }}" placeholder="Feature 1" class="form-control mb-2">
      <input type="text" name="about_feature2" value="{{ $page->about_feature2 }}" placeholder="Feature 2" class="form-control mb-2">
      <input type="text" name="about_point1" value="{{ $page->about_point1 }}" placeholder="Point 1" class="form-control mb-2">
      <input type="text" name="about_point2" value="{{ $page->about_point2 }}" placeholder="Point 2" class="form-control mb-2">
      <input type="text" name="about_point3" value="{{ $page->about_point3 }}" placeholder="Point 3" class="form-control mb-2">
      <label>About Image 1</label><input type="file" name="about_image1" class="form-control mb-2">
      <label>About Image 2</label><input type="file" name="about_image2" class="form-control mb-2">
      <h3>Services Section</h3>
      <input type="text" name="services_subtitle" value="{{ $page->services_subtitle }}" placeholder="Services Sub Title" class="form-control mb-2">
      <input type="text" name="services_title" value="{{ $page->services_title }}" placeholder="Services Title" class="form-control mb-2">
      @for($i=1; $i<=8; $i++)
        <input type="text" name="service{{$i}}_title" value="{{ $page->{'service'.$i.'_title'} }}" placeholder="Service {{$i}} Title" class="form-control mb-1">
        <textarea name="service{{$i}}_text" class="form-control mb-2" placeholder="Service {{$i}} Text">{{ $page->{'service'.$i.'_text'} }}</textarea>
      @endfor
      <h3>Why Choose Us</h3>
      <input type="text" name="wcu_subtitle" value="{{ $page->wcu_subtitle }}" placeholder="Sub Title" class="form-control mb-2">
      <input type="text" name="wcu_title" value="{{ $page->wcu_title }}" placeholder="Title" class="form-control mb-2">
      <textarea name="wcu_text" class="form-control mb-2" placeholder="Text">{{ $page->wcu_text }}</textarea>
      @for($i=1; $i<=3; $i++)
        <input type="text" name="wcu_acc{{$i}}_title" value="{{ $page->{'wcu_acc'.$i.'_title'} }}" placeholder="Accordion {{$i}} Title" class="form-control mb-1">
        <textarea name="wcu_acc{{$i}}_text" class="form-control mb-2" placeholder="Accordion {{$i}} Text">{{ $page->{'wcu_acc'.$i.'_text'} }}</textarea>
      @endfor
      <input type="text" name="wcu_info_title" value="{{ $page->wcu_info_title }}" placeholder="Info Box Title" class="form-control mb-2">
      @for($i=1; $i<=6; $i++)<input type="text" name="wcu_list{{$i}}" value="{{ $page->{'wcu_list'.$i} }}" placeholder="List {{$i}}" class="form-control mb-1">@endfor
      <label>Why Choose Us Image</label><input type="file" name="wcu_image" class="form-control mb-2">
      <h3>Funfact / Counter</h3>
      @for($i=1; $i<=4; $i++)
        <div class="row"><div class="col-md-3"><input type="text" name="funfact{{$i}}_number" value="{{ $page->{'funfact'.$i.'_number'} }}" placeholder="Number" class="form-control mb-1"></div><div class="col-md-3"><input type="text" name="funfact{{$i}}_suffix" value="{{ $page->{'funfact'.$i.'_suffix'} }}" placeholder="Suffix" class="form-control mb-1"></div><div class="col-md-6"><input type="text" name="funfact{{$i}}_text" value="{{ $page->{'funfact'.$i.'_text'} }}" placeholder="Text" class="form-control mb-1"></div></div>
      @endfor
      <h3>Working / Achievements</h3>
      <input type="text" name="working_subtitle" value="{{ $page->working_subtitle }}" placeholder="Subtitle" class="form-control mb-1">
      <input type="text" name="working_title" value="{{ $page->working_title }}" placeholder="Title" class="form-control mb-1">
      <textarea name="working_text1" placeholder="Text 1" class="form-control mb-1">{{ $page->working_text1 }}</textarea>
      <textarea name="working_text2" placeholder="Text 2" class="form-control mb-1">{{ $page->working_text2 }}</textarea>
      <input type="text" name="working_btn_text" value="{{ $page->working_btn_text }}" placeholder="Button Text" class="form-control mb-1">
      <input type="text" name="working_success_title" value="{{ $page->working_success_title }}" placeholder="Success Title" class="form-control mb-1">
      <label>Background Image</label><input type="file" name="working_image" class="form-control mb-1">
      @for($i=1; $i<=4; $i++)
        <div class="row"><div class="col-md-8"><input type="text" name="working_bar{{$i}}_title" value="{{ $page->{'working_bar'.$i.'_title'} }}" placeholder="Bar {{$i}} Title" class="form-control mb-1"></div><div class="col-md-4"><input type="text" name="working_bar{{$i}}_percent" value="{{ $page->{'working_bar'.$i.'_percent'} }}" placeholder="Percent" class="form-control mb-1"></div></div>
      @endfor
      <h3>Testimonial</h3>
      <input type="text" name="testi_subtitle" value="{{ $page->testi_subtitle }}" placeholder="Subtitle" class="form-control mb-1">
      <input type="text" name="testi_title" value="{{ $page->testi_title }}" placeholder="Title" class="form-control mb-1">
      <div class="row"><div class="col-md-4"><input type="text" name="testi_rating" value="{{ $page->testi_rating }}" placeholder="Rating" class="form-control mb-1"></div><div class="col-md-8"><input type="text" name="testi_rating_text" value="{{ $page->testi_rating_text }}" placeholder="Rating Text" class="form-control mb-1"></div></div>
      <label>Right Side Badi Image</label><input type="file" name="testi_side_image" class="form-control mb-2">
      @for($i=1; $i<=3; $i++)
        <h5>Review {{$i}}</h5>
        <textarea name="testi{{$i}}_text" placeholder="Review Text" class="form-control mb-1">{{ $page->{'testi'.$i.'_text'} }}</textarea>
        <div class="row"><div class="col-md-4"><input type="text" name="testi{{$i}}_name" value="{{ $page->{'testi'.$i.'_name'} }}" placeholder="Name" class="form-control mb-1"></div><div class="col-md-4"><input type="text" name="testi{{$i}}_role" value="{{ $page->{'testi'.$i.'_role'} }}" placeholder="Role" class="form-control mb-1"></div><div class="col-md-4"><input type="file" name="testi{{$i}}_image" class="form-control mb-1"></div></div>
      @endfor
      <h3>Team Section</h3>
      <input type="text" name="team_subtitle" value="{{ $page->team_subtitle }}" placeholder="Subtitle" class="form-control mb-1">
      <input type="text" name="team_title" value="{{ $page->team_title }}" placeholder="Title" class="form-control mb-1">
      @for($i=1; $i<=3; $i++)
        <h5>Doctor {{$i}}</h5>
        <div class="row"><div class="col-md-4"><input type="text" name="team{{$i}}_name" value="{{ $page->{'team'.$i.'_name'} }}" placeholder="Name" class="form-control mb-1"></div><div class="col-md-4"><input type="text" name="team{{$i}}_role" value="{{ $page->{'team'.$i.'_role'} }}" placeholder="Role" class="form-control mb-1"></div><div class="col-md-4"><input type="file" name="team{{$i}}_image" class="form-control mb-1"></div></div>
      @endfor
      <h3>Contact / Appointment</h3>
      <input type="text" name="contact_left_title" value="{{ $page->contact_left_title }}" placeholder="Left Title" class="form-control mb-1">
      <input type="text" name="contact_email_label" value="{{ $page->contact_email_label }}" placeholder="Email Label" class="form-control mb-1">
      <input type="text" name="contact_email" value="{{ $page->contact_email }}" placeholder="Email" class="form-control mb-1">
      <input type="text" name="contact_subtitle" value="{{ $page->contact_subtitle }}" placeholder="Subtitle" class="form-control mb-1">
      <input type="text" name="contact_title" value="{{ $page->contact_title }}" placeholder="Title" class="form-control mb-1">
      <input type="text" name="contact_btn_text" value="{{ $page->contact_btn_text }}" placeholder="Button Text" class="form-control mb-1">
      <label>Left Side Image</label><input type="file" name="contact_left_image" class="form-control mb-1">
      <label>Right Side Background Image</label><input type="file" name="contact_bg_image" class="form-control mb-1">
      <h3>Blog Section</h3>
      <input type="text" name="blog_subtitle" value="{{ $page->blog_subtitle }}" placeholder="Subtitle" class="form-control mb-1">
      <input type="text" name="blog_title" value="{{ $page->blog_title }}" placeholder="Title" class="form-control mb-1">
      @for($i=1; $i<=3; $i++)
        <h5>Blog {{$i}}</h5>
        <div class="row"><div class="col-md-2"><input type="text" name="blog{{$i}}_date" value="{{ $page->{'blog'.$i.'_date'} }}" placeholder="Date" class="form-control mb-1"></div><div class="col-md-4"><input type="text" name="blog{{$i}}_title" value="{{ $page->{'blog'.$i.'_title'} }}" placeholder="Title" class="form-control mb-1"></div><div class="col-md-4"><textarea name="blog{{$i}}_excerpt" placeholder="Short Description" class="form-control mb-1">{{ $page->{'blog'.$i.'_excerpt'} }}</textarea></div><div class="col-md-2"><input type="file" name="blog{{$i}}_image" class="form-control mb-1"></div></div>
      @endfor
      <h3>CTA / Footer Top</h3>
      <div class="row">
        <div class="col-md-4"><h5>Box 1 - Address</h5><input type="text" name="cta1_title" value="{{ $page->cta1_title }}" placeholder="Title" class="form-control mb-1"><textarea name="cta1_text" placeholder="Address" class="form-control mb-1">{{ $page->cta1_text }}</textarea></div>
        <div class="col-md-4"><h5>Box 2 - Timing</h5><input type="text" name="cta2_title" value="{{ $page->cta2_title }}" placeholder="Title" class="form-control mb-1"><input type="text" name="cta2_text1" value="{{ $page->cta2_text1 }}" placeholder="Line 1" class="form-control mb-1"><input type="text" name="cta2_text2" value="{{ $page->cta2_text2 }}" placeholder="Line 2" class="form-control mb-1"></div>
        <div class="col-md-4"><h5>Box 3 - Contact</h5><input type="text" name="cta3_title" value="{{ $page->cta3_title }}" placeholder="Title" class="form-control mb-1"><input type="text" name="cta3_text1" value="{{ $page->cta3_text1 }}" placeholder="Email" class="form-control mb-1"><input type="text" name="cta3_text2" value="{{ $page->cta3_text2 }}" placeholder="Phone" class="form-control mb-1"></div>
      </div>
      <label>CTA Background Image</label><input type="file" name="cta_bg_image" class="form-control mb-1">
      @endif

      {{-- ABOUT --}}
      @if($page->slug == 'about')
      <div class="section-title">ℹ️ ABOUT PAGE - Banner</div>
      <div class="row"><div class="col-md-6"><label class="fw-bold mb-1">Banner Title</label><input type="text" name="about_banner_title" value="{{ $page->about_banner_title }}" class="form-control mb-2"><label class="fw-bold mb-1">Breadcrumb</label><input type="text" name="about_banner_breadcrumb" value="{{ $page->about_banner_breadcrumb }}" class="form-control mb-2"></div><div class="col-md-6"><label class="fw-bold mb-1">Banner Image</label>@if($page->about_banner_image)<div class="mb-2"><img src="{{ asset($page->about_banner_image) }}" style="height:60px;border-radius:8px"></div>@endif<input type="file" name="about_banner_image" class="form-control mb-1"></div></div>
      <div class="section-title">📝 Page Content</div>
      <div class="mb-3"><label class="fw-bold mb-1">Main Content</label><textarea name="content" rows="8" class="form-control">{{ $page->content }}</textarea></div>
      <div class="mb-3"><label class="fw-bold mb-1">Second Content</label><textarea name="content2" rows="5" class="form-control">{{ $page->content2 }}</textarea></div>
      <h3>About Section</h3>
      <input type="text" name="about_subtitle" value="{{ $page->about_subtitle }}" placeholder="Sub Title" class="form-control mb-2">
      <input type="text" name="about_title" value="{{ $page->about_title }}" placeholder="Title" class="form-control mb-2">
      <textarea name="about_text" class="form-control mb-2" placeholder="Text">{{ $page->about_text }}</textarea>
      <input type="text" name="about_feature1" value="{{ $page->about_feature1 }}" placeholder="Feature 1" class="form-control mb-2">
      <input type="text" name="about_feature2" value="{{ $page->about_feature2 }}" placeholder="Feature 2" class="form-control mb-2">
      <input type="text" name="about_point1" value="{{ $page->about_point1 }}" placeholder="Point 1" class="form-control mb-2">
      <input type="text" name="about_point2" value="{{ $page->about_point2 }}" placeholder="Point 2" class="form-control mb-2">
      <input type="text" name="about_point3" value="{{ $page->about_point3 }}" placeholder="Point 3" class="form-control mb-2">
      <label>About Image 1</label><input type="file" name="about_image1" class="form-control mb-2">
      <label>About Image 2</label><input type="file" name="about_image2" class="form-control mb-2">
      <h3>Why Choose Us</h3>
      <input type="text" name="wcu_subtitle" value="{{ $page->wcu_subtitle }}" placeholder="Sub Title" class="form-control mb-2">
      <input type="text" name="wcu_title" value="{{ $page->wcu_title }}" placeholder="Title" class="form-control mb-2">
      <textarea name="wcu_text" class="form-control mb-2" placeholder="Text">{{ $page->wcu_text }}</textarea>
      @for($i=1; $i<=3; $i++)<input type="text" name="wcu_acc{{$i}}_title" value="{{ $page->{'wcu_acc'.$i.'_title'} }}" placeholder="Accordion {{$i}} Title" class="form-control mb-1"><textarea name="wcu_acc{{$i}}_text" class="form-control mb-2" placeholder="Accordion {{$i}} Text">{{ $page->{'wcu_acc'.$i.'_text'} }}</textarea>@endfor
      <input type="text" name="wcu_info_title" value="{{ $page->wcu_info_title }}" placeholder="Info Box Title" class="form-control mb-2">
      @for($i=1; $i<=6; $i++)<input type="text" name="wcu_list{{$i}}" value="{{ $page->{'wcu_list'.$i} }}" placeholder="List {{$i}}" class="form-control mb-1">@endfor
      <label>Why Choose Us Image</label><input type="file" name="wcu_image" class="form-control mb-2">
      <h3>Team Section</h3>
      <input type="text" name="team_subtitle" value="{{ $page->team_subtitle }}" placeholder="Subtitle" class="form-control mb-1">
      <input type="text" name="team_title" value="{{ $page->team_title }}" placeholder="Title" class="form-control mb-1">
      @for($i=1; $i<=3; $i++)<h5>Doctor {{$i}}</h5><div class="row"><div class="col-md-4"><input type="text" name="team{{$i}}_name" value="{{ $page->{'team'.$i.'_name'} }}" placeholder="Name" class="form-control mb-1"></div><div class="col-md-4"><input type="text" name="team{{$i}}_role" value="{{ $page->{'team'.$i.'_role'} }}" placeholder="Role" class="form-control mb-1"></div><div class="col-md-4"><input type="file" name="team{{$i}}_image" class="form-control mb-1"></div></div>@endfor
      @endif

      @if(!in_array($page->slug, ['home','about']))
      <div class="section-title">📝 Page Content</div>
      <div class="mb-3"><label class="fw-bold mb-1">Main Content</label><textarea name="content" rows="8" class="form-control">{{ $page->content }}</textarea></div>
      <div class="mb-3"><label class="fw-bold mb-1">Second Content</label><textarea name="content2" rows="5" class="form-control">{{ $page->content2 }}</textarea></div>
      @endif

      {{-- DOCTOR --}}
      @if($page->slug == 'doctor')
      <div class="section-title">👩‍⚕️ DOCTOR PAGE</div>
      <input type="text" name="doctor_banner_title" class="form-control" value="{{ $page->doctor_banner_title }}" placeholder="Banner Title">
      <input type="text" name="doctor_banner_breadcrumb" class="form-control mt-2" value="{{ $page->doctor_banner_breadcrumb }}" placeholder="Breadcrumb">
      <input type="file" name="doctor_banner_image" class="form-control mt-2">
      @if($page->doctor_banner_image)<img src="{{ asset($page->doctor_banner_image) }}" width="200" class="mt-2">@endif
      <hr>
      <input type="text" name="team_subtitle" class="form-control" placeholder="Subtitle" value="{{ $page->team_subtitle }}">
      <input type="text" name="team_title" class="form-control mt-2" placeholder="Title" value="{{ $page->team_title }}">
      @for($i=1; $i<=3; $i++)
      <div style="background:#FFF9FB; border:1px solid #FDECF3; border-radius:12px; padding:16px; margin-top:16px;">
      <h5>Doctor {{$i}}</h5>
      <label class="fw-bold mt-2">Name</label><input type="text" name="team{{$i}}_name" class="form-control" value="{{ $page->{'team'.$i.'_name'} }}">
      <label class="fw-bold mt-2">Role</label><input type="text" name="team{{$i}}_role" class="form-control" value="{{ $page->{'team'.$i.'_role'} }}">
      <label class="fw-bold mt-2">Qualification</label><input type="text" name="team{{$i}}_qualification" class="form-control" value="{{ $page->{'team'.$i.'_qualification'} }}">
      <label class="fw-bold mt-2">Experience</label><input type="text" name="team{{$i}}_experience" class="form-control" value="{{ $page->{'team'.$i.'_experience'} }}">
      <label class="fw-bold mt-2">Specialization</label><input type="text" name="team{{$i}}_specialization" class="form-control" value="{{ $page->{'team'.$i.'_specialization'} }}">
      <label class="fw-bold mt-2">Phone</label><input type="text" name="team{{$i}}_phone" class="form-control" value="{{ $page->{'team'.$i.'_phone'} }}">
      <label class="fw-bold mt-2">Email</label><input type="text" name="team{{$i}}_email" class="form-control" value="{{ $page->{'team'.$i.'_email'} }}">
      <label class="fw-bold mt-2">Address</label><input type="text" name="team{{$i}}_address" class="form-control" value="{{ $page->{'team'.$i.'_address'} }}">
      <label class="fw-bold mt-2">Timing</label><input type="text" name="team{{$i}}_timing" class="form-control" value="{{ $page->{'team'.$i.'_timing'} }}">
      <label class="fw-bold mt-2">About</label><textarea name="team{{$i}}_about" rows="4" class="form-control">{{ $page->{'team'.$i.'_about'} }}</textarea>
      <label class="fw-bold mt-2">Photo</label><input type="file" name="team{{$i}}_image" class="form-control">@if($page->{'team'.$i.'_image'})<img src="{{ asset($page->{'team'.$i.'_image'}) }}" width="120" class="mt-1">@endif
      </div>
      @endfor
      @endif

      {{-- CONTACT --}}
      @if($page->slug == 'contact')
      <div class="section-title">📞 CONTACT PAGE</div>
      <input type="text" name="contact_banner_title" class="form-control" value="{{ $page->contact_banner_title }}">
      <input type="text" name="contact_banner_breadcrumb" class="form-control mt-2" value="{{ $page->contact_banner_breadcrumb }}">
      <input type="file" name="contact_banner_image" class="form-control mt-2">
      @if($page->contact_banner_image)<img src="{{ asset($page->contact_banner_image) }}" width="200" class="mt-2">@endif
      <hr>
      <input type="text" name="contact_subtitle" class="form-control" placeholder="Subtitle" value="{{ $page->contact_subtitle }}">
      <input type="text" name="contact_title" class="form-control mt-2" placeholder="Title" value="{{ $page->contact_title }}">
      <input type="text" name="contact_email" class="form-control mt-2" placeholder="Email" value="{{ $page->contact_email }}">
      <input type="text" name="contact_phone" class="form-control mt-2" placeholder="Phone" value="{{ $page->contact_phone }}">
      <input type="text" name="contact_address" class="form-control mt-2" placeholder="Address" value="{{ $page->contact_address }}">
      <input type="text" name="contact_timing" class="form-control mt-2" placeholder="Timing" value="{{ $page->contact_timing }}">
      <input type="text" name="contact_btn_text" class="form-control mt-2" placeholder="Button Text" value="{{ $page->contact_btn_text }}">
      <hr><h5>Map</h5>
      <textarea name="contact_map_embed" class="form-control" rows="4" placeholder="Google Map Embed Code">{{ $page->contact_map_embed }}</textarea>
      @endif

      {{-- APPOINTMENT - NAYA ADDED --}}
      @if($page->slug == 'appointment')
      <div class="section-title">📅 APPOINTMENT PAGE</div>
      <div class="row">
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Banner Title</label><input type="text" name="appt_title" class="form-control" value="{{ old('appt_title', $page->appt_title) }}"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Banner Image</label><input type="file" name="appt_banner" class="form-control">@if($page->appt_banner)<img src="{{ asset($page->appt_banner) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Left Subtitle</label><input type="text" name="appt_subtitle" class="form-control" value="{{ old('appt_subtitle', $page->appt_subtitle) }}"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Left Heading</label><input type="text" name="appt_heading" class="form-control" value="{{ old('appt_heading', $page->appt_heading) }}"></div>
        <div class="col-md-12 mb-3"><label class="fw-bold mb-1">Left Text</label><textarea name="appt_text" class="form-control" rows="2">{{ old('appt_text', $page->appt_text) }}</textarea></div>
        <div class="col-md-4 mb-3"><label class="fw-bold mb-1">Doctor 1 Name</label><input type="text" name="appt_doctor1_name" class="form-control" value="{{ old('appt_doctor1_name', $page->appt_doctor1_name) }}"></div>
        <div class="col-md-4 mb-3"><label class="fw-bold mb-1">Doctor 1 Speciality</label><input type="text" name="appt_doctor1_spec" class="form-control" value="{{ old('appt_doctor1_spec', $page->appt_doctor1_spec) }}"></div>
        <div class="col-md-4 mb-3"><label class="fw-bold mb-1">Doctor 1 Timing</label><input type="text" name="appt_doctor1_time" class="form-control" value="{{ old('appt_doctor1_time', $page->appt_doctor1_time) }}"></div>
        <div class="col-md-4 mb-3"><label class="fw-bold mb-1">Doctor 2 Name</label><input type="text" name="appt_doctor2_name" class="form-control" value="{{ old('appt_doctor2_name', $page->appt_doctor2_name) }}"></div>
        <div class="col-md-4 mb-3"><label class="fw-bold mb-1">Doctor 2 Speciality</label><input type="text" name="appt_doctor2_spec" class="form-control" value="{{ old('appt_doctor2_spec', $page->appt_doctor2_spec) }}"></div>
        <div class="col-md-4 mb-3"><label class="fw-bold mb-1">Doctor 2 Timing</label><input type="text" name="appt_doctor2_time" class="form-control" value="{{ old('appt_doctor2_time', $page->appt_doctor2_time) }}"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Address Title</label><input type="text" name="appt_address_title" class="form-control" value="{{ old('appt_address_title', $page->appt_address_title) }}"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Address</label><input type="text" name="appt_address" class="form-control" value="{{ old('appt_address', $page->appt_address) }}"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Phone Title</label><input type="text" name="appt_phone_title" class="form-control" value="{{ old('appt_phone_title', $page->appt_phone_title) }}"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Phone</label><input type="text" name="appt_phone" class="form-control" value="{{ old('appt_phone', $page->appt_phone) }}"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Email Title</label><input type="text" name="appt_email_title" class="form-control" value="{{ old('appt_email_title', $page->appt_email_title) }}"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Email</label><input type="text" name="appt_email" class="form-control" value="{{ old('appt_email', $page->appt_email) }}"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Form Title</label><input type="text" name="appt_form_title" class="form-control" value="{{ old('appt_form_title', $page->appt_form_title) }}"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Form Subtitle</label><input type="text" name="appt_form_subtitle" class="form-control" value="{{ old('appt_form_subtitle', $page->appt_form_subtitle) }}"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">WhatsApp Button</label><input type="text" name="appt_whatsapp_btn" class="form-control" value="{{ old('appt_whatsapp_btn', $page->appt_whatsapp_btn) }}"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Email Button</label><input type="text" name="appt_email_btn" class="form-control" value="{{ old('appt_email_btn', $page->appt_email_btn) }}"></div>
        <div class="col-md-12 mb-3"><label class="fw-bold mb-1">Form Note</label><textarea name="appt_form_note" class="form-control" rows="2">{{ old('appt_form_note', $page->appt_form_note) }}</textarea></div>
      </div>
      @endif

      {{-- SERVICE PAGES - GENERIC PATTERN (Pregnancy, Delivery, High-Risk, Women, Newborn, Vaccine, Child-Growth, Pediatrics) --}}
      {{-- Tumhare purane wale saare service blocks yahan same rehte hain - unko mat chhedo, wo kaam kar rahe hain --}}
      {{-- Agar tumhare purane file me Pregnancy / Delivery / High-Risk / Women / Newborn / Vaccine wale blocks the, wo yahan paste kar do - maine unko chhota karke generic me rakha hai taaki file lambi na ho, function same rahega --}}

      <div class="mt-4 d-flex gap-2">
        <button type="submit" class="btn-pink"><i class="fa-solid fa-floppy-disk me-2"></i> Save Changes</button>
        <a href="/admin" class="btn btn-light" style="border-radius:10px;border:1px solid #FDECF3">Cancel</a>
      </div>
    </form>
  </div>
</div>
</div></div>
<script>
function toggleDoctor(btn){ var d=document.getElementById('doctorDropdown'); var a=document.getElementById('doctorArrow'); if(d.style.display==='none'||d.style.display===''){ d.style.display='block'; a.innerHTML='▲'; } else { d.style.display='none'; a.innerHTML='▼'; } }
function toggleServices(btn){ var d=document.getElementById('servicesDropdown'); var a=document.getElementById('servicesArrow'); if(d.style.display==='none'||d.style.display===''){ d.style.display='block'; a.innerHTML='▲'; } else { d.style.display='none'; a.innerHTML='▼'; } }
</script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $page->title }} - Women & Child Care</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">
<style>
:root{ --pink:#E84393; --pink-dark:#D6307A; --pink-light:#FDECF3; --pink-soft:#FFF5F8; --bg:#FFF9FB; --text:#2D3436; --muted:#636E72; }
body{background:var(--bg);font-family:'Inter',sans-serif;color:var(--text);font-size:14px}
h1,h2,h3,h4,h5{font-family:'Poppins',sans-serif}
.sidebar{background:#fff;min-height:100vh;padding:22px 14px;position:sticky;top:0;border-right:1px solid #FDECF3}
.sidebar .logo{font-family:'Poppins',sans-serif;font-weight:800;font-size:19px;line-height:1.15;padding:0 6px}
.sidebar .logo span{color:var(--pink)}
.sidebar .logo small{font-family:'Inter',sans-serif;font-size:10px;font-weight:700;letter-spacing:1.2px;color:var(--muted)}
.sidebar .menu-label{font-size:10px;font-weight:700;letter-spacing:1.2px;color:#B2BEC3;margin:20px 0 6px 10px}
.sidebar .nav-link{color:#636E72;border-radius:10px;padding:9px 10px;margin-bottom:2px;font-weight:500;font-size:13px;text-decoration:none;display:flex;align-items:center;gap:9px;width:100%;text-align:left;background:transparent;border:0;cursor:pointer;transition:.2s}
.sidebar .nav-link i{width:28px;height:28px;border-radius:8px;background:#FFF0F5;color:var(--pink);display:flex;align-items:center;justify-content:center;font-size:12px;flex-shrink:0}
.sidebar .nav-link:hover{background:var(--pink-soft);color:var(--pink-dark)}
.sidebar .nav-link.active{background:var(--pink);color:#fff;box-shadow:0 8px 20px rgba(232,67,147,.35)}
.sidebar .nav-link.active i{background:rgba(255,255,255,.25);color:#fff}
.sidebar .sub-link{padding:8px 10px 8px 46px !important;font-size:12.5px;color:#7A8690}
.sidebar .sub-link i{width:22px;height:22px;font-size:11px}
.sidebar .sub-link:hover{color:var(--pink-dark)}
.topbar{background:#fff;border:1px solid #FDECF3;border-radius:16px;padding:16px 20px}
.card{border:1px solid #FDECF3;border-radius:18px;background:#fff}
.form-control{border:1px solid #FDCEDF;border-radius:11px;padding:11px 13px;background:#FFF9FB;font-size:14px}
.form-control:focus{border-color:var(--pink);box-shadow:0 0 0 4px #FDECF3;outline:none;background:#fff}
.btn-pink{background:var(--pink);color:#fff;border:0;padding:11px 25px;border-radius:10px;font-weight:600;font-size:14px}
.btn-pink:hover{background:var(--pink-dark);color:#fff}
.dropdown-sub{margin-left:8px}
.section-title{background:#FFF5F8;border:1px solid #FDECF3;border-radius:12px;padding:12px 16px;font-weight:700;color:#D6307A;margin:22px 0 14px;}
</style>
</head>
<body>
<div class="container-fluid"><div class="row">
<div class="col-md-2 sidebar">
  <div class="logo">Women & <span>Child Care</span><br><small>GURUGRAM • ADMIN PANEL</small></div>
  <div class="menu-label">MAIN MENU</div>
  <a href="/admin" class="nav-link"><i class="fa-solid fa-border-all"></i> Dashboard</a>
  <div class="menu-label">WEBSITE PAGES</div>
  <a href="/admin/pages/home" class="nav-link {{ $page->slug=='home' ? 'active' : '' }}"><i class="fa-solid fa-house"></i> Home</a>
  <a href="/admin/pages/about" class="nav-link {{ $page->slug=='about' ? 'active' : '' }}"><i class="fa-solid fa-circle-info"></i> About</a>
  <div>
    <button onclick="toggleDoctor(this)" class="nav-link {{ $page->slug=='doctor' ? 'active' : '' }}" style="width:100%"><i class="fa-solid fa-user-doctor"></i> Doctor <span class="ms-auto" id="doctorArrow" style="font-size:10px;transition:.3s">▼</span></button>
    <div id="doctorDropdown" class="dropdown-sub" style="display: {{ $page->slug=='doctor' ? 'block' : 'none' }}">
      <a href="/admin/pages/doctor" class="nav-link sub-link"><i class="fa-solid fa-pen"></i> Doctor Page Edit</a>
      <a href="/admin/pages/doctor#devendra" class="nav-link sub-link"><i class="fa-solid fa-stethoscope"></i> Dr. Devendra Agarwal</a>
      <a href="/admin/pages/doctor#anubha" class="nav-link sub-link"><i class="fa-solid fa-stethoscope"></i> Dr. Anubha Gupta</a>
      <a href="/admin/pages/doctor#anjali" class="nav-link sub-link"><i class="fa-solid fa-stethoscope"></i> Dr. Anjali Gupta</a>
    </div>
  </div>
  <div>
    <button onclick="toggleServices(this)" class="nav-link {{ in_array($page->slug,['pregnancy-care','normal-delivery','high-risk-pregnancy','womens-health','newborn-care','child-vaccination','child-growth','general-pediatrics']) ? 'active' : '' }}" style="width:100%"><i class="fa-solid fa-stethoscope"></i> Services <span class="ms-auto" id="servicesArrow" style="font-size:10px;transition:.3s">▼</span></button>
    <div id="servicesDropdown" class="dropdown-sub" style="display: {{ in_array($page->slug,['pregnancy-care','normal-delivery','high-risk-pregnancy','womens-health','newborn-care','child-vaccination','child-growth','general-pediatrics']) ? 'block' : 'none' }}">
      <a href="/admin/pages/pregnancy-care" class="nav-link sub-link {{ $page->slug=='pregnancy-care' ? 'active' : '' }}"><i class="fa-solid fa-heart"></i> Pregnancy Care</a>
      <a href="/admin/pages/normal-delivery" class="nav-link sub-link {{ $page->slug=='normal-delivery' ? 'active' : '' }}"><i class="fa-solid fa-person-breastfeeding"></i> Normal Delivery</a>
      <a href="/admin/pages/high-risk-pregnancy" class="nav-link sub-link {{ $page->slug=='high-risk-pregnancy' ? 'active' : '' }}"><i class="fa-solid fa-triangle-exclamation"></i> High Risk Pregnancy</a>
      <a href="/admin/pages/womens-health" class="nav-link sub-link {{ $page->slug=='womens-health' ? 'active' : '' }}"><i class="fa-solid fa-venus"></i> Womens Health</a>
      <a href="/admin/pages/newborn-care" class="nav-link sub-link {{ $page->slug=='newborn-care' ? 'active' : '' }}"><i class="fa-solid fa-baby"></i> Newborn Care</a>
      <a href="/admin/pages/child-vaccination" class="nav-link sub-link {{ $page->slug=='child-vaccination' ? 'active' : '' }}"><i class="fa-solid fa-syringe"></i> Child Vaccination</a>
      <a href="/admin/pages/child-growth" class="nav-link sub-link {{ $page->slug=='child-growth' ? 'active' : '' }}"><i class="fa-solid fa-child"></i> Child Growth</a>
      <a href="/admin/pages/general-pediatrics" class="nav-link sub-link {{ $page->slug=='general-pediatrics' ? 'active' : '' }}"><i class="fa-solid fa-heart-pulse"></i> General Pediatrics</a>
    </div>
  </div>
  <a href="/admin/pages/contact" class="nav-link {{ $page->slug=='contact' ? 'active' : '' }}"><i class="fa-solid fa-phone"></i> Contact</a>
  <a href="/admin/pages/appointment" class="nav-link {{ $page->slug=='appointment' ? 'active' : '' }}"><i class="fa-solid fa-calendar-plus"></i> Appointment</a>
  <a href="/admin/settings" class="nav-link"><i class="fa-solid fa-gear"></i> Header / Footer</a>
  <div class="menu-label">GENERAL</div>
  <a href="/" target="_blank" class="nav-link"><i class="fa-solid fa-globe"></i> View Website</a>
  <a href="/admin/logout" class="nav-link" style="color:#D63031"><i class="fa-solid fa-right-from-bracket" style="background:#FFF1F1;color:#D63031"></i> Logout</a>
  <div class="mt-4 p-3" style="background:linear-gradient(135deg,#E84393,#FD79A8);border-radius:14px;color:#fff">
    <div style="font-size:20px">👩‍⚕️</div>
    <p class="mb-1 fw-bold" style="font-size:13px">Need Help?</p>
    <p class="mb-0" style="font-size:12px;opacity:.9">Call: +91 90155 98903<br>Mon - Sat, 10 AM - 7 PM</p>
  </div>
</div>
<div class="col-md-10 p-3 p-md-4">
  <div class="topbar d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
    <div><h4 class="fw-bold mb-0">Edit {{ $page->title }} ✏️</h4><p class="text-muted mb-0" style="font-size:13px">Edit here, click Save, it will update on website instantly.</p></div>
    <a href="/admin" class="btn btn-light" style="border-radius:11px;border:1px solid #FDECF3"><i class="fa-solid fa-arrow-left me-2"></i> Back to Dashboard</a>
  </div>
  @if(session('success'))<div class="alert alert-success" style="border-radius:12px;background:#DFF7F0;border:1px solid #B8F0DD;color:#00997A">{{ session('success') }}</div>@endif
  <div class="card p-4">
    <form method="POST" action="{{ route('admin.pages.update', $page->slug) }}" enctype="multipart/form-data">
      @csrf @method('PUT')
      <div class="mb-3"><label class="fw-bold mb-1">Page Title</label><input type="text" name="title" value="{{ $page->title }}" class="form-control"></div>

      {{-- HOME --}}
      @if($page->slug == 'home')
      <div class="section-title">🏠 HERO SECTION</div>
      <div class="mb-3"><label class="fw-bold mb-1">Hero - Trusted Text</label><input type="text" name="hero_trusted" value="{{ $page->hero_trusted ?? 'Trusted by 50,000+ patients' }}" class="form-control"></div>
      <div class="mb-3"><label class="fw-bold mb-1">Hero - Bada Heading</label><input type="text" name="hero_title" value="{{ $page->hero_title ?? $page->title }}" class="form-control"></div>
      <div class="mb-3"><label class="fw-bold mb-1">Hero - Chota Text</label><textarea name="hero_text" rows="3" class="form-control">{{ $page->hero_text ?? $page->content }}</textarea></div>
      <div class="mb-3"><label class="fw-bold mb-1">Hero - Banner Image</label>@if($page->hero_image)<div class="mb-2"><img src="{{ asset($page->hero_image) }}" style="height:90px;border-radius:10px;"></div>@endif<input type="file" name="hero_image" class="form-control" accept="image/*"></div>
      <div class="section-title">📞 HERO - Feature Box</div>
      <div class="row">
        <div class="col-md-4 mb-3"><label class="fw-bold mb-1">Phone</label><input type="text" name="hero_phone" value="{{ $page->hero_phone ?? '+91-90 15 59 8903' }}" class="form-control"></div>
        <div class="col-md-4 mb-3"><label class="fw-bold mb-1">Timing Line 1</label><input type="text" name="hero_timing" value="{{ $page->hero_timing ?? 'Mon - Fri: 8:00AM - 7:00PM' }}" class="form-control"></div>
        <div class="col-md-4 mb-3"><label class="fw-bold mb-1">Timing Line 2</label><input type="text" name="hero_timing2" value="{{ $page->hero_timing2 ?? 'Sat - Sun: Closed' }}" class="form-control"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Address Line 1</label><input type="text" name="hero_address" value="{{ $page->hero_address ?? 'Location-: H.No-211,' }}" class="form-control"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Address Line 2</label><input type="text" name="hero_address2" value="{{ $page->hero_address2 ?? 'Sector-31, Gurgaon, Haryana India' }}" class="form-control"></div>
      </div>
      <div class="section-title">📝 Page Content</div>
      <div class="mb-3"><label class="fw-bold mb-1">Main Content</label><textarea name="content" rows="8" class="form-control">{{ $page->content }}</textarea></div>
      <div class="mb-3"><label class="fw-bold mb-1">Second Content</label><textarea name="content2" rows="5" class="form-control">{{ $page->content2 }}</textarea></div>
      <h3>About Section</h3>
      <input type="text" name="about_subtitle" value="{{ $page->about_subtitle }}" placeholder="About Sub Title" class="form-control mb-2">
      <input type="text" name="about_title" value="{{ $page->about_title }}" placeholder="About Title" class="form-control mb-2">
      <textarea name="about_text" class="form-control mb-2" placeholder="About Text">{{ $page->about_text }}</textarea>
      <input type="text" name="about_feature1" value="{{ $page->about_feature1 }}" placeholder="Feature 1" class="form-control mb-2">
      <input type="text" name="about_feature2" value="{{ $page->about_feature2 }}" placeholder="Feature 2" class="form-control mb-2">
      <input type="text" name="about_point1" value="{{ $page->about_point1 }}" placeholder="Point 1" class="form-control mb-2">
      <input type="text" name="about_point2" value="{{ $page->about_point2 }}" placeholder="Point 2" class="form-control mb-2">
      <input type="text" name="about_point3" value="{{ $page->about_point3 }}" placeholder="Point 3" class="form-control mb-2">
      <label>About Image 1</label><input type="file" name="about_image1" class="form-control mb-2">
      <label>About Image 2</label><input type="file" name="about_image2" class="form-control mb-2">
      <h3>Services Section</h3>
      <input type="text" name="services_subtitle" value="{{ $page->services_subtitle }}" placeholder="Services Sub Title" class="form-control mb-2">
      <input type="text" name="services_title" value="{{ $page->services_title }}" placeholder="Services Title" class="form-control mb-2">
      @for($i=1; $i<=8; $i++)
        <input type="text" name="service{{$i}}_title" value="{{ $page->{'service'.$i.'_title'} }}" placeholder="Service {{$i}} Title" class="form-control mb-1">
        <textarea name="service{{$i}}_text" class="form-control mb-2" placeholder="Service {{$i}} Text">{{ $page->{'service'.$i.'_text'} }}</textarea>
      @endfor
      <h3>Why Choose Us</h3>
      <input type="text" name="wcu_subtitle" value="{{ $page->wcu_subtitle }}" placeholder="Sub Title" class="form-control mb-2">
      <input type="text" name="wcu_title" value="{{ $page->wcu_title }}" placeholder="Title" class="form-control mb-2">
      <textarea name="wcu_text" class="form-control mb-2" placeholder="Text">{{ $page->wcu_text }}</textarea>
      @for($i=1; $i<=3; $i++)
        <input type="text" name="wcu_acc{{$i}}_title" value="{{ $page->{'wcu_acc'.$i.'_title'} }}" placeholder="Accordion {{$i}} Title" class="form-control mb-1">
        <textarea name="wcu_acc{{$i}}_text" class="form-control mb-2" placeholder="Accordion {{$i}} Text">{{ $page->{'wcu_acc'.$i.'_text'} }}</textarea>
      @endfor
      <input type="text" name="wcu_info_title" value="{{ $page->wcu_info_title }}" placeholder="Info Box Title" class="form-control mb-2">
      @for($i=1; $i<=6; $i++)<input type="text" name="wcu_list{{$i}}" value="{{ $page->{'wcu_list'.$i} }}" placeholder="List {{$i}}" class="form-control mb-1">@endfor
      <label>Why Choose Us Image</label><input type="file" name="wcu_image" class="form-control mb-2">
      <h3>Funfact / Counter</h3>
      @for($i=1; $i<=4; $i++)
        <div class="row"><div class="col-md-3"><input type="text" name="funfact{{$i}}_number" value="{{ $page->{'funfact'.$i.'_number'} }}" placeholder="Number" class="form-control mb-1"></div><div class="col-md-3"><input type="text" name="funfact{{$i}}_suffix" value="{{ $page->{'funfact'.$i.'_suffix'} }}" placeholder="Suffix" class="form-control mb-1"></div><div class="col-md-6"><input type="text" name="funfact{{$i}}_text" value="{{ $page->{'funfact'.$i.'_text'} }}" placeholder="Text" class="form-control mb-1"></div></div>
      @endfor
      <h3>Working / Achievements</h3>
      <input type="text" name="working_subtitle" value="{{ $page->working_subtitle }}" placeholder="Subtitle" class="form-control mb-1">
      <input type="text" name="working_title" value="{{ $page->working_title }}" placeholder="Title" class="form-control mb-1">
      <textarea name="working_text1" placeholder="Text 1" class="form-control mb-1">{{ $page->working_text1 }}</textarea>
      <textarea name="working_text2" placeholder="Text 2" class="form-control mb-1">{{ $page->working_text2 }}</textarea>
      <input type="text" name="working_btn_text" value="{{ $page->working_btn_text }}" placeholder="Button Text" class="form-control mb-1">
      <input type="text" name="working_success_title" value="{{ $page->working_success_title }}" placeholder="Success Title" class="form-control mb-1">
      <label>Background Image</label><input type="file" name="working_image" class="form-control mb-1">
      @for($i=1; $i<=4; $i++)
        <div class="row"><div class="col-md-8"><input type="text" name="working_bar{{$i}}_title" value="{{ $page->{'working_bar'.$i.'_title'} }}" placeholder="Bar {{$i}} Title" class="form-control mb-1"></div><div class="col-md-4"><input type="text" name="working_bar{{$i}}_percent" value="{{ $page->{'working_bar'.$i.'_percent'} }}" placeholder="Percent" class="form-control mb-1"></div></div>
      @endfor
      <h3>Testimonial</h3>
      <input type="text" name="testi_subtitle" value="{{ $page->testi_subtitle }}" placeholder="Subtitle" class="form-control mb-1">
      <input type="text" name="testi_title" value="{{ $page->testi_title }}" placeholder="Title" class="form-control mb-1">
      <div class="row"><div class="col-md-4"><input type="text" name="testi_rating" value="{{ $page->testi_rating }}" placeholder="Rating" class="form-control mb-1"></div><div class="col-md-8"><input type="text" name="testi_rating_text" value="{{ $page->testi_rating_text }}" placeholder="Rating Text" class="form-control mb-1"></div></div>
      <label>Right Side Badi Image</label><input type="file" name="testi_side_image" class="form-control mb-2">
      @for($i=1; $i<=3; $i++)
        <h5>Review {{$i}}</h5>
        <textarea name="testi{{$i}}_text" placeholder="Review Text" class="form-control mb-1">{{ $page->{'testi'.$i.'_text'} }}</textarea>
        <div class="row"><div class="col-md-4"><input type="text" name="testi{{$i}}_name" value="{{ $page->{'testi'.$i.'_name'} }}" placeholder="Name" class="form-control mb-1"></div><div class="col-md-4"><input type="text" name="testi{{$i}}_role" value="{{ $page->{'testi'.$i.'_role'} }}" placeholder="Role" class="form-control mb-1"></div><div class="col-md-4"><input type="file" name="testi{{$i}}_image" class="form-control mb-1"></div></div>
      @endfor
      <h3>Team Section</h3>
      <input type="text" name="team_subtitle" value="{{ $page->team_subtitle }}" placeholder="Subtitle" class="form-control mb-1">
      <input type="text" name="team_title" value="{{ $page->team_title }}" placeholder="Title" class="form-control mb-1">
      @for($i=1; $i<=3; $i++)
        <h5>Doctor {{$i}}</h5>
        <div class="row"><div class="col-md-4"><input type="text" name="team{{$i}}_name" value="{{ $page->{'team'.$i.'_name'} }}" placeholder="Name" class="form-control mb-1"></div><div class="col-md-4"><input type="text" name="team{{$i}}_role" value="{{ $page->{'team'.$i.'_role'} }}" placeholder="Role" class="form-control mb-1"></div><div class="col-md-4"><input type="file" name="team{{$i}}_image" class="form-control mb-1"></div></div>
      @endfor
      <h3>Contact / Appointment</h3>
      <input type="text" name="contact_left_title" value="{{ $page->contact_left_title }}" placeholder="Left Title" class="form-control mb-1">
      <input type="text" name="contact_email_label" value="{{ $page->contact_email_label }}" placeholder="Email Label" class="form-control mb-1">
      <input type="text" name="contact_email" value="{{ $page->contact_email }}" placeholder="Email" class="form-control mb-1">
      <input type="text" name="contact_subtitle" value="{{ $page->contact_subtitle }}" placeholder="Subtitle" class="form-control mb-1">
      <input type="text" name="contact_title" value="{{ $page->contact_title }}" placeholder="Title" class="form-control mb-1">
      <input type="text" name="contact_btn_text" value="{{ $page->contact_btn_text }}" placeholder="Button Text" class="form-control mb-1">
      <label>Left Side Image</label><input type="file" name="contact_left_image" class="form-control mb-1">
      <label>Right Side Background Image</label><input type="file" name="contact_bg_image" class="form-control mb-1">
      <h3>Blog Section</h3>
      <input type="text" name="blog_subtitle" value="{{ $page->blog_subtitle }}" placeholder="Subtitle" class="form-control mb-1">
      <input type="text" name="blog_title" value="{{ $page->blog_title }}" placeholder="Title" class="form-control mb-1">
      @for($i=1; $i<=3; $i++)
        <h5>Blog {{$i}}</h5>
        <div class="row"><div class="col-md-2"><input type="text" name="blog{{$i}}_date" value="{{ $page->{'blog'.$i.'_date'} }}" placeholder="Date" class="form-control mb-1"></div><div class="col-md-4"><input type="text" name="blog{{$i}}_title" value="{{ $page->{'blog'.$i.'_title'} }}" placeholder="Title" class="form-control mb-1"></div><div class="col-md-4"><textarea name="blog{{$i}}_excerpt" placeholder="Short Description" class="form-control mb-1">{{ $page->{'blog'.$i.'_excerpt'} }}</textarea></div><div class="col-md-2"><input type="file" name="blog{{$i}}_image" class="form-control mb-1"></div></div>
      @endfor
      <h3>CTA / Footer Top</h3>
      <div class="row">
        <div class="col-md-4"><h5>Box 1 - Address</h5><input type="text" name="cta1_title" value="{{ $page->cta1_title }}" placeholder="Title" class="form-control mb-1"><textarea name="cta1_text" placeholder="Address" class="form-control mb-1">{{ $page->cta1_text }}</textarea></div>
        <div class="col-md-4"><h5>Box 2 - Timing</h5><input type="text" name="cta2_title" value="{{ $page->cta2_title }}" placeholder="Title" class="form-control mb-1"><input type="text" name="cta2_text1" value="{{ $page->cta2_text1 }}" placeholder="Line 1" class="form-control mb-1"><input type="text" name="cta2_text2" value="{{ $page->cta2_text2 }}" placeholder="Line 2" class="form-control mb-1"></div>
        <div class="col-md-4"><h5>Box 3 - Contact</h5><input type="text" name="cta3_title" value="{{ $page->cta3_title }}" placeholder="Title" class="form-control mb-1"><input type="text" name="cta3_text1" value="{{ $page->cta3_text1 }}" placeholder="Email" class="form-control mb-1"><input type="text" name="cta3_text2" value="{{ $page->cta3_text2 }}" placeholder="Phone" class="form-control mb-1"></div>
      </div>
      <label>CTA Background Image</label><input type="file" name="cta_bg_image" class="form-control mb-1">
      @endif

      {{-- ABOUT --}}
      @if($page->slug == 'about')
      <div class="section-title">ℹ️ ABOUT PAGE</div>
      <div class="row"><div class="col-md-6"><label class="fw-bold mb-1">Banner Title</label><input type="text" name="about_banner_title" value="{{ $page->about_banner_title }}" class="form-control mb-2"><label class="fw-bold mb-1">Breadcrumb</label><input type="text" name="about_banner_breadcrumb" value="{{ $page->about_banner_breadcrumb }}" class="form-control mb-2"></div><div class="col-md-6"><label class="fw-bold mb-1">Banner Image</label>@if($page->about_banner_image)<div class="mb-2"><img src="{{ asset($page->about_banner_image) }}" style="height:60px;border-radius:8px"></div>@endif<input type="file" name="about_banner_image" class="form-control mb-1"></div></div>
      <div class="mb-3"><label class="fw-bold mb-1">Main Content</label><textarea name="content" rows="8" class="form-control">{{ $page->content }}</textarea></div>
      <div class="mb-3"><label class="fw-bold mb-1">Second Content</label><textarea name="content2" rows="5" class="form-control">{{ $page->content2 }}</textarea></div>
      <h3>About Section</h3>
      <input type="text" name="about_subtitle" value="{{ $page->about_subtitle }}" placeholder="Sub Title" class="form-control mb-2">
      <input type="text" name="about_title" value="{{ $page->about_title }}" placeholder="Title" class="form-control mb-2">
      <textarea name="about_text" class="form-control mb-2" placeholder="Text">{{ $page->about_text }}</textarea>
      <input type="text" name="about_feature1" value="{{ $page->about_feature1 }}" placeholder="Feature 1" class="form-control mb-2">
      <input type="text" name="about_feature2" value="{{ $page->about_feature2 }}" placeholder="Feature 2" class="form-control mb-2">
      <input type="text" name="about_point1" value="{{ $page->about_point1 }}" placeholder="Point 1" class="form-control mb-2">
      <input type="text" name="about_point2" value="{{ $page->about_point2 }}" placeholder="Point 2" class="form-control mb-2">
      <input type="text" name="about_point3" value="{{ $page->about_point3 }}" placeholder="Point 3" class="form-control mb-2">
      <label>About Image 1</label><input type="file" name="about_image1" class="form-control mb-2">
      <label>About Image 2</label><input type="file" name="about_image2" class="form-control mb-2">
      <h3>Why Choose Us</h3>
      <input type="text" name="wcu_subtitle" value="{{ $page->wcu_subtitle }}" placeholder="Sub Title" class="form-control mb-2">
      <input type="text" name="wcu_title" value="{{ $page->wcu_title }}" placeholder="Title" class="form-control mb-2">
      <textarea name="wcu_text" class="form-control mb-2" placeholder="Text">{{ $page->wcu_text }}</textarea>
      @for($i=1; $i<=3; $i++)<input type="text" name="wcu_acc{{$i}}_title" value="{{ $page->{'wcu_acc'.$i.'_title'} }}" placeholder="Accordion {{$i}} Title" class="form-control mb-1"><textarea name="wcu_acc{{$i}}_text" class="form-control mb-2" placeholder="Accordion {{$i}} Text">{{ $page->{'wcu_acc'.$i.'_text'} }}</textarea>@endfor
      <input type="text" name="wcu_info_title" value="{{ $page->wcu_info_title }}" placeholder="Info Box Title" class="form-control mb-2">
      @for($i=1; $i<=6; $i++)<input type="text" name="wcu_list{{$i}}" value="{{ $page->{'wcu_list'.$i} }}" placeholder="List {{$i}}" class="form-control mb-1">@endfor
      <label>Why Choose Us Image</label><input type="file" name="wcu_image" class="form-control mb-2">
      <h3>Team Section</h3>
      <input type="text" name="team_subtitle" value="{{ $page->team_subtitle }}" placeholder="Subtitle" class="form-control mb-1">
      <input type="text" name="team_title" value="{{ $page->team_title }}" placeholder="Title" class="form-control mb-1">
      @for($i=1; $i<=3; $i++)<h5>Doctor {{$i}}</h5><div class="row"><div class="col-md-4"><input type="text" name="team{{$i}}_name" value="{{ $page->{'team'.$i.'_name'} }}" placeholder="Name" class="form-control mb-1"></div><div class="col-md-4"><input type="text" name="team{{$i}}_role" value="{{ $page->{'team'.$i.'_role'} }}" placeholder="Role" class="form-control mb-1"></div><div class="col-md-4"><input type="file" name="team{{$i}}_image" class="form-control mb-1"></div></div>@endfor
      @endif

      @if(!in_array($page->slug, ['home','about']))
      <div class="section-title">📝 Page Content</div>
      <div class="mb-3"><label class="fw-bold mb-1">Main Content</label><textarea name="content" rows="8" class="form-control">{{ $page->content }}</textarea></div>
      <div class="mb-3"><label class="fw-bold mb-1">Second Content</label><textarea name="content2" rows="5" class="form-control">{{ $page->content2 }}</textarea></div>
      @endif

      {{-- DOCTOR --}}
      @if($page->slug == 'doctor')
      <div class="section-title">👩‍⚕️ DOCTOR PAGE</div>
      <input type="text" name="doctor_banner_title" class="form-control" value="{{ $page->doctor_banner_title }}" placeholder="Banner Title">
      <input type="text" name="doctor_banner_breadcrumb" class="form-control mt-2" value="{{ $page->doctor_banner_breadcrumb }}" placeholder="Breadcrumb">
      <input type="file" name="doctor_banner_image" class="form-control mt-2">
      @if($page->doctor_banner_image)<img src="{{ asset($page->doctor_banner_image) }}" width="200" class="mt-2">@endif
      <hr>
      <input type="text" name="team_subtitle" class="form-control" placeholder="Subtitle" value="{{ $page->team_subtitle }}">
      <input type="text" name="team_title" class="form-control mt-2" placeholder="Title" value="{{ $page->team_title }}">
      @for($i=1; $i<=3; $i++)
      <div style="background:#FFF9FB; border:1px solid #FDECF3; border-radius:12px; padding:16px; margin-top:16px;">
      <h5>Doctor {{$i}}</h5>
      <label class="fw-bold mt-2">Name</label><input type="text" name="team{{$i}}_name" class="form-control" value="{{ $page->{'team'.$i.'_name'} }}">
      <label class="fw-bold mt-2">Role</label><input type="text" name="team{{$i}}_role" class="form-control" value="{{ $page->{'team'.$i.'_role'} }}">
      <label class="fw-bold mt-2">Qualification</label><input type="text" name="team{{$i}}_qualification" class="form-control" value="{{ $page->{'team'.$i.'_qualification'} }}">
      <label class="fw-bold mt-2">Experience</label><input type="text" name="team{{$i}}_experience" class="form-control" value="{{ $page->{'team'.$i.'_experience'} }}">
      <label class="fw-bold mt-2">Specialization</label><input type="text" name="team{{$i}}_specialization" class="form-control" value="{{ $page->{'team'.$i.'_specialization'} }}">
      <label class="fw-bold mt-2">Phone</label><input type="text" name="team{{$i}}_phone" class="form-control" value="{{ $page->{'team'.$i.'_phone'} }}">
      <label class="fw-bold mt-2">Email</label><input type="text" name="team{{$i}}_email" class="form-control" value="{{ $page->{'team'.$i.'_email'} }}">
      <label class="fw-bold mt-2">Address</label><input type="text" name="team{{$i}}_address" class="form-control" value="{{ $page->{'team'.$i.'_address'} }}">
      <label class="fw-bold mt-2">Timing</label><input type="text" name="team{{$i}}_timing" class="form-control" value="{{ $page->{'team'.$i.'_timing'} }}">
      <label class="fw-bold mt-2">About</label><textarea name="team{{$i}}_about" rows="4" class="form-control">{{ $page->{'team'.$i.'_about'} }}</textarea>
      <label class="fw-bold mt-2">Photo</label><input type="file" name="team{{$i}}_image" class="form-control">@if($page->{'team'.$i.'_image'})<img src="{{ asset($page->{'team'.$i.'_image'}) }}" width="120" class="mt-1">@endif
      </div>
      @endfor
      @endif

      {{-- CONTACT --}}
      @if($page->slug == 'contact')
      <div class="section-title">📞 CONTACT PAGE</div>
      <input type="text" name="contact_banner_title" class="form-control" value="{{ $page->contact_banner_title }}">
      <input type="text" name="contact_banner_breadcrumb" class="form-control mt-2" value="{{ $page->contact_banner_breadcrumb }}">
      <input type="file" name="contact_banner_image" class="form-control mt-2">
      @if($page->contact_banner_image)<img src="{{ asset($page->contact_banner_image) }}" width="200" class="mt-2">@endif
      <hr>
      <input type="text" name="contact_subtitle" class="form-control" placeholder="Subtitle" value="{{ $page->contact_subtitle }}">
      <input type="text" name="contact_title" class="form-control mt-2" placeholder="Title" value="{{ $page->contact_title }}">
      <input type="text" name="contact_email" class="form-control mt-2" placeholder="Email" value="{{ $page->contact_email }}">
      <input type="text" name="contact_phone" class="form-control mt-2" placeholder="Phone" value="{{ $page->contact_phone }}">
      <input type="text" name="contact_address" class="form-control mt-2" placeholder="Address" value="{{ $page->contact_address }}">
      <input type="text" name="contact_timing" class="form-control mt-2" placeholder="Timing" value="{{ $page->contact_timing }}">
      <input type="text" name="contact_btn_text" class="form-control mt-2" placeholder="Button Text" value="{{ $page->contact_btn_text }}">
      <hr><h5>Map</h5>
      <textarea name="contact_map_embed" class="form-control" rows="4" placeholder="Google Map Embed Code">{{ $page->contact_map_embed }}</textarea>
      @endif

      {{-- APPOINTMENT --}}
      @if($page->slug == 'appointment')
      <div class="section-title">📅 APPOINTMENT PAGE</div>
      <div class="row">
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Banner Title</label><input type="text" name="appt_title" class="form-control" value="{{ old('appt_title', $page->appt_title) }}"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Banner Image</label><input type="file" name="appt_banner" class="form-control">@if($page->appt_banner)<img src="{{ asset($page->appt_banner) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Left Subtitle</label><input type="text" name="appt_subtitle" class="form-control" value="{{ old('appt_subtitle', $page->appt_subtitle) }}"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Left Heading</label><input type="text" name="appt_heading" class="form-control" value="{{ old('appt_heading', $page->appt_heading) }}"></div>
        <div class="col-md-12 mb-3"><label class="fw-bold mb-1">Left Text</label><textarea name="appt_text" class="form-control" rows="2">{{ old('appt_text', $page->appt_text) }}</textarea></div>
        <div class="col-md-4 mb-3"><label class="fw-bold mb-1">Doctor 1 Name</label><input type="text" name="appt_doctor1_name" class="form-control" value="{{ old('appt_doctor1_name', $page->appt_doctor1_name) }}"></div>
        <div class="col-md-4 mb-3"><label class="fw-bold mb-1">Doctor 1 Speciality</label><input type="text" name="appt_doctor1_spec" class="form-control" value="{{ old('appt_doctor1_spec', $page->appt_doctor1_spec) }}"></div>
        <div class="col-md-4 mb-3"><label class="fw-bold mb-1">Doctor 1 Timing</label><input type="text" name="appt_doctor1_time" class="form-control" value="{{ old('appt_doctor1_time', $page->appt_doctor1_time) }}"></div>
        <div class="col-md-4 mb-3"><label class="fw-bold mb-1">Doctor 2 Name</label><input type="text" name="appt_doctor2_name" class="form-control" value="{{ old('appt_doctor2_name', $page->appt_doctor2_name) }}"></div>
        <div class="col-md-4 mb-3"><label class="fw-bold mb-1">Doctor 2 Speciality</label><input type="text" name="appt_doctor2_spec" class="form-control" value="{{ old('appt_doctor2_spec', $page->appt_doctor2_spec) }}"></div>
        <div class="col-md-4 mb-3"><label class="fw-bold mb-1">Doctor 2 Timing</label><input type="text" name="appt_doctor2_time" class="form-control" value="{{ old('appt_doctor2_time', $page->appt_doctor2_time) }}"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Address Title</label><input type="text" name="appt_address_title" class="form-control" value="{{ old('appt_address_title', $page->appt_address_title) }}"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Address</label><input type="text" name="appt_address" class="form-control" value="{{ old('appt_address', $page->appt_address) }}"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Phone Title</label><input type="text" name="appt_phone_title" class="form-control" value="{{ old('appt_phone_title', $page->appt_phone_title) }}"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Phone</label><input type="text" name="appt_phone" class="form-control" value="{{ old('appt_phone', $page->appt_phone) }}"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Email Title</label><input type="text" name="appt_email_title" class="form-control" value="{{ old('appt_email_title', $page->appt_email_title) }}"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Email</label><input type="text" name="appt_email" class="form-control" value="{{ old('appt_email', $page->appt_email) }}"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Form Title</label><input type="text" name="appt_form_title" class="form-control" value="{{ old('appt_form_title', $page->appt_form_title) }}"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Form Subtitle</label><input type="text" name="appt_form_subtitle" class="form-control" value="{{ old('appt_form_subtitle', $page->appt_form_subtitle) }}"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">WhatsApp Button</label><input type="text" name="appt_whatsapp_btn" class="form-control" value="{{ old('appt_whatsapp_btn', $page->appt_whatsapp_btn) }}"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Email Button</label><input type="text" name="appt_email_btn" class="form-control" value="{{ old('appt_email_btn', $page->appt_email_btn) }}"></div>
        <div class="col-md-12 mb-3"><label class="fw-bold mb-1">Form Note</label><textarea name="appt_form_note" class="form-control" rows="2">{{ old('appt_form_note', $page->appt_form_note) }}</textarea></div>
      </div>
      @endif

      {{-- PREGNANCY CARE --}}
      @if($page->slug == 'pregnancy-care')
      <div class="section-title">🤰 PREGNANCY CARE</div>
      <div class="row">
        <div class="col-md-6 mb-3"><label>Title</label><input name="preg_title" value="{{ $page->preg_title }}" class="form-control"></div>
        <div class="col-md-6 mb-3"><label>Banner Image</label>@if($page->preg_banner)<img src="{{ asset($page->preg_banner) }}" height="60"><br>@endif<input type="file" name="preg_banner" class="form-control"></div>
        <div class="col-md-6 mb-3"><label>Help Title</label><input name="preg_help_title" value="{{ $page->preg_help_title }}" class="form-control"></div>
        <div class="col-md-6 mb-3"><label>Help Subtitle</label><input name="preg_help_subtitle" value="{{ $page->preg_help_subtitle }}" class="form-control"></div>
        <div class="col-md-6 mb-3"><label>Help Phone</label><input name="preg_help_phone" value="{{ $page->preg_help_phone }}" class="form-control"></div>
        <div class="col-md-6 mb-3"><label>Book Button</label><input name="preg_book_btn" value="{{ $page->preg_book_btn }}" class="form-control"></div>
        <div class="col-md-12 mb-3"><label>Main Image</label>@if($page->preg_main_image)<img src="{{ asset($page->preg_main_image) }}" height="80"><br>@endif<input type="file" name="preg_main_image" class="form-control"></div>
        <div class="col-md-12 mb-3"><label>Overview Title</label><input name="preg_overview_title" value="{{ $page->preg_overview_title }}" class="form-control"></div>
        <div class="col-md-12 mb-3"><label>Overview P1</label><textarea name="preg_overview_p1" rows="3" class="form-control">{{ $page->preg_overview_p1 }}</textarea></div>
        <div class="col-md-12 mb-3"><label>Overview P2</label><textarea name="preg_overview_p2" rows="3" class="form-control">{{ $page->preg_overview_p2 }}</textarea></div>
        <div class="col-md-12 mb-3"><label>Support Title</label><input name="preg_support_title" value="{{ $page->preg_support_title }}" class="form-control"></div>
        <div class="col-md-12 mb-3"><label>Support Text</label><textarea name="preg_support_text" rows="3" class="form-control">{{ $page->preg_support_text }}</textarea></div>
        <div class="col-md-12 mb-3"><label>Quote</label><textarea name="preg_quote" rows="2" class="form-control">{{ $page->preg_quote }}</textarea></div>
        <div class="col-md-6 mb-3"><label>Feature1 Title</label><input name="preg_feature1_title" value="{{ $page->preg_feature1_title }}" class="form-control"></div>
        <div class="col-md-6 mb-3"><label>Feature1 Text</label><textarea name="preg_feature1_text" rows="2" class="form-control">{{ $page->preg_feature1_text }}</textarea></div>
        <div class="col-md-12 mb-3"><label>Feature1 Image</label><input type="file" name="preg_feature1_image" class="form-control"></div>
        <div class="col-md-6 mb-3"><label>Feature2 Title</label><input name="preg_feature2_title" value="{{ $page->preg_feature2_title }}" class="form-control"></div>
        <div class="col-md-6 mb-3"><label>Feature2 Text</label><textarea name="preg_feature2_text" rows="2" class="form-control">{{ $page->preg_feature2_text }}</textarea></div>
        <div class="col-md-12 mb-3"><label>Feature2 Image</label><input type="file" name="preg_feature2_image" class="form-control"></div>
        <div class="col-md-12 mb-3"><label>FAQ Title</label><input name="preg_faq_title" value="{{ $page->preg_faq_title }}" class="form-control"></div>
        <div class="col-md-12 mb-3"><label>FAQ Subtitle</label><input name="preg_faq_subtitle" value="{{ $page->preg_faq_subtitle }}" class="form-control"></div>
        @for($i=1;$i<=3;$i++)
        <div class="col-md-12 mb-3"><label>FAQ {{ $i }} Question</label><input name="preg_faq{{ $i }}_q" value="{{ $page->{'preg_faq'.$i.'_q'} }}" class="form-control"></div>
        <div class="col-md-12 mb-3"><label>FAQ {{ $i }} Answer</label><textarea name="preg_faq{{ $i }}_a" rows="2" class="form-control">{{ $page->{'preg_faq'.$i.'_a'} }}</textarea></div>
        @endfor
      </div>
      @endif

      {{-- NORMAL DELIVERY --}}
      @if($page->slug == 'normal-delivery')
      <div class="section-title">👶 NORMAL DELIVERY</div>
      <div class="row">
        <div class="col-md-6 mb-3"><label>Banner Title</label><input type="text" name="delivery_title" class="form-control" value="{{ old('delivery_title', $page->delivery_title) }}"></div>
        <div class="col-md-6 mb-3"><label>Banner Image</label><input type="file" name="delivery_banner" class="form-control">@if($page->delivery_banner)<img src="{{ asset($page->delivery_banner) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-6 mb-3"><label>Help Title</label><input type="text" name="delivery_help_title" class="form-control" value="{{ old('delivery_help_title', $page->delivery_help_title) }}"></div>
        <div class="col-md-6 mb-3"><label>Help Subtitle</label><input type="text" name="delivery_help_subtitle" class="form-control" value="{{ old('delivery_help_subtitle', $page->delivery_help_subtitle) }}"></div>
        <div class="col-md-6 mb-3"><label>Help Phone</label><input type="text" name="delivery_help_phone" class="form-control" value="{{ old('delivery_help_phone', $page->delivery_help_phone) }}"></div>
        <div class="col-md-6 mb-3"><label>Book Button</label><input type="text" name="delivery_book_btn" class="form-control" value="{{ old('delivery_book_btn', $page->delivery_book_btn) }}"></div>
        <div class="col-md-12 mb-3"><label>Main Image</label><input type="file" name="delivery_main_image" class="form-control">@if($page->delivery_main_image)<img src="{{ asset($page->delivery_main_image) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-12 mb-3"><label>Overview Title</label><input type="text" name="delivery_overview_title" class="form-control" value="{{ old('delivery_overview_title', $page->delivery_overview_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Overview Para 1</label><textarea name="delivery_overview_p1" class="form-control" rows="3">{{ old('delivery_overview_p1', $page->delivery_overview_p1) }}</textarea></div>
        <div class="col-md-12 mb-3"><label>Overview Para 2</label><textarea name="delivery_overview_p2" class="form-control" rows="3">{{ old('delivery_overview_p2', $page->delivery_overview_p2) }}</textarea></div>
        <div class="col-md-12 mb-3"><label>Support Title</label><input type="text" name="delivery_support_title" class="form-control" value="{{ old('delivery_support_title', $page->delivery_support_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Support Text</label><textarea name="delivery_support_text" class="form-control" rows="3">{{ old('delivery_support_text', $page->delivery_support_text) }}</textarea></div>
        <div class="col-md-12 mb-3"><label>Quote</label><textarea name="delivery_quote" class="form-control" rows="2">{{ old('delivery_quote', $page->delivery_quote) }}</textarea></div>
        <div class="col-md-6 mb-3"><label>Feature 1 Image</label><input type="file" name="delivery_feature1_image" class="form-control">@if($page->delivery_feature1_image)<img src="{{ asset($page->delivery_feature1_image) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-6 mb-3"><label>Feature 1 Title</label><input type="text" name="delivery_feature1_title" class="form-control" value="{{ old('delivery_feature1_title', $page->delivery_feature1_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Feature 1 Text</label><textarea name="delivery_feature1_text" class="form-control" rows="2">{{ old('delivery_feature1_text', $page->delivery_feature1_text) }}</textarea></div>
        <div class="col-md-6 mb-3"><label>Feature 2 Image</label><input type="file" name="delivery_feature2_image" class="form-control">@if($page->delivery_feature2_image)<img src="{{ asset($page->delivery_feature2_image) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-6 mb-3"><label>Feature 2 Title</label><input type="text" name="delivery_feature2_title" class="form-control" value="{{ old('delivery_feature2_title', $page->delivery_feature2_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Feature 2 Text</label><textarea name="delivery_feature2_text" class="form-control" rows="2">{{ old('delivery_feature2_text', $page->delivery_feature2_text) }}</textarea></div>
        <div class="col-md-6 mb-3"><label>FAQ Title</label><input type="text" name="delivery_faq_title" class="form-control" value="{{ old('delivery_faq_title', $page->delivery_faq_title) }}"></div>
        <div class="col-md-6 mb-3"><label>FAQ Subtitle</label><input type="text" name="delivery_faq_subtitle" class="form-control" value="{{ old('delivery_faq_subtitle', $page->delivery_faq_subtitle) }}"></div>
        @for($i=1;$i<=3;$i++)
        <div class="col-md-12 mb-3"><label>FAQ {{ $i }} Question</label><input type="text" name="delivery_faq{{$i}}_q" class="form-control" value="{{ old('delivery_faq'.$i.'_q', $page->{'delivery_faq'.$i.'_q'}) }}"></div>
        <div class="col-md-12 mb-3"><label>FAQ {{ $i }} Answer</label><textarea name="delivery_faq{{$i}}_a" class="form-control" rows="2">{{ old('delivery_faq'.$i.'_a', $page->{'delivery_faq'.$i.'_a'}) }}</textarea></div>
        @endfor
      </div>
      @endif

      {{-- HIGH RISK PREGNANCY --}}
      @if($page->slug == 'high-risk-pregnancy')
      <div class="section-title">⚠️ HIGH RISK PREGNANCY</div>
      <div class="row">
        <div class="col-md-6 mb-3"><label>Banner Title</label><input type="text" name="highrisk_title" class="form-control" value="{{ old('highrisk_title', $page->highrisk_title) }}"></div>
        <div class="col-md-6 mb-3"><label>Banner Image</label><input type="file" name="highrisk_banner" class="form-control">@if($page->highrisk_banner)<img src="{{ asset($page->highrisk_banner) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-6 mb-3"><label>Help Title</label><input type="text" name="highrisk_help_title" class="form-control" value="{{ old('highrisk_help_title', $page->highrisk_help_title) }}"></div>
        <div class="col-md-6 mb-3"><label>Help Subtitle</label><input type="text" name="highrisk_help_subtitle" class="form-control" value="{{ old('highrisk_help_subtitle', $page->highrisk_help_subtitle) }}"></div>
        <div class="col-md-6 mb-3"><label>Help Phone</label><input type="text" name="highrisk_help_phone" class="form-control" value="{{ old('highrisk_help_phone', $page->highrisk_help_phone) }}"></div>
        <div class="col-md-6 mb-3"><label>Book Button</label><input type="text" name="highrisk_book_btn" class="form-control" value="{{ old('highrisk_book_btn', $page->highrisk_book_btn) }}"></div>
        <div class="col-md-12 mb-3"><label>Main Image</label><input type="file" name="highrisk_main_image" class="form-control">@if($page->highrisk_main_image)<img src="{{ asset($page->highrisk_main_image) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-12 mb-3"><label>Overview Title</label><input type="text" name="highrisk_overview_title" class="form-control" value="{{ old('highrisk_overview_title', $page->highrisk_overview_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Overview Para 1</label><textarea name="highrisk_overview_p1" class="form-control" rows="3">{{ old('highrisk_overview_p1', $page->highrisk_overview_p1) }}</textarea></div>
        <div class="col-md-12 mb-3"><label>Overview Para 2</label><textarea name="highrisk_overview_p2" class="form-control" rows="3">{{ old('highrisk_overview_p2', $page->highrisk_overview_p2) }}</textarea></div>
        <div class="col-md-12 mb-3"><label>Support Title</label><input type="text" name="highrisk_support_title" class="form-control" value="{{ old('highrisk_support_title', $page->highrisk_support_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Support Text</label><textarea name="highrisk_support_text" class="form-control" rows="3">{{ old('highrisk_support_text', $page->highrisk_support_text) }}</textarea></div>
        <div class="col-md-12 mb-3"><label>Quote</label><textarea name="highrisk_quote" class="form-control" rows="2">{{ old('highrisk_quote', $page->highrisk_quote) }}</textarea></div>
        <div class="col-md-6 mb-3"><label>Feature 1 Image</label><input type="file" name="highrisk_feature1_image" class="form-control">@if($page->highrisk_feature1_image)<img src="{{ asset($page->highrisk_feature1_image) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-6 mb-3"><label>Feature 1 Title</label><input type="text" name="highrisk_feature1_title" class="form-control" value="{{ old('highrisk_feature1_title', $page->highrisk_feature1_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Feature 1 Text</label><textarea name="highrisk_feature1_text" class="form-control" rows="2">{{ old('highrisk_feature1_text', $page->highrisk_feature1_text) }}</textarea></div>
        <div class="col-md-6 mb-3"><label>Feature 2 Image</label><input type="file" name="highrisk_feature2_image" class="form-control">@if($page->highrisk_feature2_image)<img src="{{ asset($page->highrisk_feature2_image) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-6 mb-3"><label>Feature 2 Title</label><input type="text" name="highrisk_feature2_title" class="form-control" value="{{ old('highrisk_feature2_title', $page->highrisk_feature2_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Feature 2 Text</label><textarea name="highrisk_feature2_text" class="form-control" rows="2">{{ old('highrisk_feature2_text', $page->highrisk_feature2_text) }}</textarea></div>
        <div class="col-md-6 mb-3"><label>FAQ Title</label><input type="text" name="highrisk_faq_title" class="form-control" value="{{ old('highrisk_faq_title', $page->highrisk_faq_title) }}"></div>
        <div class="col-md-6 mb-3"><label>FAQ Subtitle</label><input type="text" name="highrisk_faq_subtitle" class="form-control" value="{{ old('highrisk_faq_subtitle', $page->highrisk_faq_subtitle) }}"></div>
        @for($i=1;$i<=3;$i++)
        <div class="col-md-12 mb-3"><label>FAQ {{ $i }} Question</label><input type="text" name="highrisk_faq{{$i}}_q" class="form-control" value="{{ old('highrisk_faq'.$i.'_q', $page->{'highrisk_faq'.$i.'_q'}) }}"></div>
        <div class="col-md-12 mb-3"><label>FAQ {{ $i }} Answer</label><textarea name="highrisk_faq{{$i}}_a" class="form-control" rows="2">{{ old('highrisk_faq'.$i.'_a', $page->{'highrisk_faq'.$i.'_a'}) }}</textarea></div>
        @endfor
      </div>
      @endif

      {{-- WOMENS HEALTH --}}
      @if($page->slug == 'womens-health')
      <div class="section-title">🌸 WOMENS HEALTH</div>
      <div class="row">
        <div class="col-md-6 mb-3"><label>Banner Title</label><input type="text" name="women_title" class="form-control" value="{{ old('women_title', $page->women_title) }}"></div>
        <div class="col-md-6 mb-3"><label>Banner Image</label><input type="file" name="women_banner" class="form-control">@if($page->women_banner)<img src="{{ asset($page->women_banner) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-6 mb-3"><label>Help Title</label><input type="text" name="women_help_title" class="form-control" value="{{ old('women_help_title', $page->women_help_title) }}"></div>
        <div class="col-md-6 mb-3"><label>Help Subtitle</label><input type="text" name="women_help_subtitle" class="form-control" value="{{ old('women_help_subtitle', $page->women_help_subtitle) }}"></div>
        <div class="col-md-6 mb-3"><label>Help Phone</label><input type="text" name="women_help_phone" class="form-control" value="{{ old('women_help_phone', $page->women_help_phone) }}"></div>
        <div class="col-md-6 mb-3"><label>Book Button</label><input type="text" name="women_book_btn" class="form-control" value="{{ old('women_book_btn', $page->women_book_btn) }}"></div>
        <div class="col-md-12 mb-3"><label>Main Image</label><input type="file" name="women_main_image" class="form-control">@if($page->women_main_image)<img src="{{ asset($page->women_main_image) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-12 mb-3"><label>Overview Title</label><input type="text" name="women_overview_title" class="form-control" value="{{ old('women_overview_title', $page->women_overview_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Overview Para 1</label><textarea name="women_overview_p1" class="form-control" rows="3">{{ old('women_overview_p1', $page->women_overview_p1) }}</textarea></div>
        <div class="col-md-12 mb-3"><label>Overview Para 2</label><textarea name="women_overview_p2" class="form-control" rows="3">{{ old('women_overview_p2', $page->women_overview_p2) }}</textarea></div>
        <div class="col-md-12 mb-3"><label>Support Title</label><input type="text" name="women_support_title" class="form-control" value="{{ old('women_support_title', $page->women_support_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Support Text</label><textarea name="women_support_text" class="form-control" rows="3">{{ old('women_support_text', $page->women_support_text) }}</textarea></div>
        <div class="col-md-12 mb-3"><label>Quote</label><textarea name="women_quote" class="form-control" rows="2">{{ old('women_quote', $page->women_quote) }}</textarea></div>
        <div class="col-md-6 mb-3"><label>Feature 1 Image</label><input type="file" name="women_feature1_image" class="form-control">@if($page->women_feature1_image)<img src="{{ asset($page->women_feature1_image) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-6 mb-3"><label>Feature 1 Title</label><input type="text" name="women_feature1_title" class="form-control" value="{{ old('women_feature1_title', $page->women_feature1_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Feature 1 Text</label><textarea name="women_feature1_text" class="form-control" rows="2">{{ old('women_feature1_text', $page->women_feature1_text) }}</textarea></div>
        <div class="col-md-6 mb-3"><label>Feature 2 Image</label><input type="file" name="women_feature2_image" class="form-control">@if($page->women_feature2_image)<img src="{{ asset($page->women_feature2_image) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-6 mb-3"><label>Feature 2 Title</label><input type="text" name="women_feature2_title" class="form-control" value="{{ old('women_feature2_title', $page->women_feature2_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Feature 2 Text</label><textarea name="women_feature2_text" class="form-control" rows="2">{{ old('women_feature2_text', $page->women_feature2_text) }}</textarea></div>
        <div class="col-md-6 mb-3"><label>FAQ Title</label><input type="text" name="women_faq_title" class="form-control" value="{{ old('women_faq_title', $page->women_faq_title) }}"></div>
        <div class="col-md-6 mb-3"><label>FAQ Subtitle</label><input type="text" name="women_faq_subtitle" class="form-control" value="{{ old('women_faq_subtitle', $page->women_faq_subtitle) }}"></div>
        @for($i=1;$i<=3;$i++)
        <div class="col-md-12 mb-3"><label>FAQ {{ $i }} Question</label><input type="text" name="women_faq{{$i}}_q" class="form-control" value="{{ old('women_faq'.$i.'_q', $page->{'women_faq'.$i.'_q'}) }}"></div>
        <div class="col-md-12 mb-3"><label>FAQ {{ $i }} Answer</label><textarea name="women_faq{{$i}}_a" class="form-control" rows="2">{{ old('women_faq'.$i.'_a', $page->{'women_faq'.$i.'_a'}) }}</textarea></div>
        @endfor
      </div>
      @endif

      {{-- NEWBORN CARE --}}
      @if($page->slug == 'newborn-care')
      <div class="section-title">👶 NEWBORN CARE</div>
      <div class="row">
        <div class="col-md-6 mb-3"><label>Banner Title</label><input type="text" name="newborn_title" class="form-control" value="{{ old('newborn_title', $page->newborn_title) }}"></div>
        <div class="col-md-6 mb-3"><label>Banner Image</label><input type="file" name="newborn_banner" class="form-control">@if($page->newborn_banner)<img src="{{ asset($page->newborn_banner) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-6 mb-3"><label>Help Title</label><input type="text" name="newborn_help_title" class="form-control" value="{{ old('newborn_help_title', $page->newborn_help_title) }}"></div>
        <div class="col-md-6 mb-3"><label>Help Subtitle</label><input type="text" name="newborn_help_subtitle" class="form-control" value="{{ old('newborn_help_subtitle', $page->newborn_help_subtitle) }}"></div>
        <div class="col-md-6 mb-3"><label>Help Phone</label><input type="text" name="newborn_help_phone" class="form-control" value="{{ old('newborn_help_phone', $page->newborn_help_phone) }}"></div>
        <div class="col-md-6 mb-3"><label>Book Button</label><input type="text" name="newborn_book_btn" class="form-control" value="{{ old('newborn_book_btn', $page->newborn_book_btn) }}"></div>
        <div class="col-md-12 mb-3"><label>Main Image</label><input type="file" name="newborn_main_image" class="form-control">@if($page->newborn_main_image)<img src="{{ asset($page->newborn_main_image) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-12 mb-3"><label>Overview Title</label><input type="text" name="newborn_overview_title" class="form-control" value="{{ old('newborn_overview_title', $page->newborn_overview_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Overview Para 1</label><textarea name="newborn_overview_p1" class="form-control" rows="3">{{ old('newborn_overview_p1', $page->newborn_overview_p1) }}</textarea></div>
        <div class="col-md-12 mb-3"><label>Overview Para 2</label><textarea name="newborn_overview_p2" class="form-control" rows="3">{{ old('newborn_overview_p2', $page->newborn_overview_p2) }}</textarea></div>
        <div class="col-md-12 mb-3"><label>Support Title</label><input type="text" name="newborn_support_title" class="form-control" value="{{ old('newborn_support_title', $page->newborn_support_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Support Text</label><textarea name="newborn_support_text" class="form-control" rows="3">{{ old('newborn_support_text', $page->newborn_support_text) }}</textarea></div>
        <div class="col-md-12 mb-3"><label>Quote</label><textarea name="newborn_quote" class="form-control" rows="2">{{ old('newborn_quote', $page->newborn_quote) }}</textarea></div>
        <div class="col-md-6 mb-3"><label>Feature 1 Image</label><input type="file" name="newborn_feature1_image" class="form-control">@if($page->newborn_feature1_image)<img src="{{ asset($page->newborn_feature1_image) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-6 mb-3"><label>Feature 1 Title</label><input type="text" name="newborn_feature1_title" class="form-control" value="{{ old('newborn_feature1_title', $page->newborn_feature1_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Feature 1 Text</label><textarea name="newborn_feature1_text" class="form-control" rows="2">{{ old('newborn_feature1_text', $page->newborn_feature1_text) }}</textarea></div>
        <div class="col-md-6 mb-3"><label>Feature 2 Image</label><input type="file" name="newborn_feature2_image" class="form-control">@if($page->newborn_feature2_image)<img src="{{ asset($page->newborn_feature2_image) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-6 mb-3"><label>Feature 2 Title</label><input type="text" name="newborn_feature2_title" class="form-control" value="{{ old('newborn_feature2_title', $page->newborn_feature2_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Feature 2 Text</label><textarea name="newborn_feature2_text" class="form-control" rows="2">{{ old('newborn_feature2_text', $page->newborn_feature2_text) }}</textarea></div>
        <div class="col-md-6 mb-3"><label>FAQ Title</label><input type="text" name="newborn_faq_title" class="form-control" value="{{ old('newborn_faq_title', $page->newborn_faq_title) }}"></div>
        <div class="col-md-6 mb-3"><label>FAQ Subtitle</label><input type="text" name="newborn_faq_subtitle" class="form-control" value="{{ old('newborn_faq_subtitle', $page->newborn_faq_subtitle) }}"></div>
        @for($i=1;$i<=3;$i++)
        <div class="col-md-12 mb-3"><label>FAQ {{ $i }} Question</label><input type="text" name="newborn_faq{{$i}}_q" class="form-control" value="{{ old('newborn_faq'.$i.'_q', $page->{'newborn_faq'.$i.'_q'}) }}"></div>
        <div class="col-md-12 mb-3"><label>FAQ {{ $i }} Answer</label><textarea name="newborn_faq{{$i}}_a" class="form-control" rows="2">{{ old('newborn_faq'.$i.'_a', $page->{'newborn_faq'.$i.'_a'}) }}</textarea></div>
        @endfor
      </div>
      @endif

      {{-- CHILD VACCINATION --}}
      @if($page->slug == 'child-vaccination')
      <div class="section-title">💉 CHILD VACCINATION</div>
      <div class="row">
        <div class="col-md-6 mb-3"><label>Banner Title</label><input type="text" name="vaccine_title" class="form-control" value="{{ old('vaccine_title', $page->vaccine_title) }}"></div>
        <div class="col-md-6 mb-3"><label>Banner Image</label><input type="file" name="vaccine_banner" class="form-control">@if($page->vaccine_banner)<img src="{{ asset($page->vaccine_banner) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-6 mb-3"><label>Help Title</label><input type="text" name="vaccine_help_title" class="form-control" value="{{ old('vaccine_help_title', $page->vaccine_help_title) }}"></div>
        <div class="col-md-6 mb-3"><label>Help Subtitle</label><input type="text" name="vaccine_help_subtitle" class="form-control" value="{{ old('vaccine_help_subtitle', $page->vaccine_help_subtitle) }}"></div>
        <div class="col-md-6 mb-3"><label>Help Phone</label><input type="text" name="vaccine_help_phone" class="form-control" value="{{ old('vaccine_help_phone', $page->vaccine_help_phone) }}"></div>
        <div class="col-md-6 mb-3"><label>Book Button</label><input type="text" name="vaccine_book_btn" class="form-control" value="{{ old('vaccine_book_btn', $page->vaccine_book_btn) }}"></div>
        <div class="col-md-12 mb-3"><label>Main Image</label><input type="file" name="vaccine_main_image" class="form-control">@if($page->vaccine_main_image)<img src="{{ asset($page->vaccine_main_image) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-12 mb-3"><label>Overview Title</label><input type="text" name="vaccine_overview_title" class="form-control" value="{{ old('vaccine_overview_title', $page->vaccine_overview_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Overview Para 1</label><textarea name="vaccine_overview_p1" class="form-control" rows="3">{{ old('vaccine_overview_p1', $page->vaccine_overview_p1) }}</textarea></div>
        <div class="col-md-12 mb-3"><label>Overview Para 2</label><textarea name="vaccine_overview_p2" class="form-control" rows="3">{{ old('vaccine_overview_p2', $page->vaccine_overview_p2) }}</textarea></div>
        <div class="col-md-12 mb-3"><label>Support Title</label><input type="text" name="vaccine_support_title" class="form-control" value="{{ old('vaccine_support_title', $page->vaccine_support_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Support Text</label><textarea name="vaccine_support_text" class="form-control" rows="3">{{ old('vaccine_support_text', $page->vaccine_support_text) }}</textarea></div>
        <div class="col-md-12 mb-3"><label>Quote</label><textarea name="vaccine_quote" class="form-control" rows="2">{{ old('vaccine_quote', $page->vaccine_quote) }}</textarea></div>
        <div class="col-md-6 mb-3"><label>Feature 1 Image</label><input type="file" name="vaccine_feature1_image" class="form-control">@if($page->vaccine_feature1_image)<img src="{{ asset($page->vaccine_feature1_image) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-6 mb-3"><label>Feature 1 Title</label><input type="text" name="vaccine_feature1_title" class="form-control" value="{{ old('vaccine_feature1_title', $page->vaccine_feature1_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Feature 1 Text</label><textarea name="vaccine_feature1_text" class="form-control" rows="2">{{ old('vaccine_feature1_text', $page->vaccine_feature1_text) }}</textarea></div>
        <div class="col-md-6 mb-3"><label>Feature 2 Image</label><input type="file" name="vaccine_feature2_image" class="form-control">@if($page->vaccine_feature2_image)<img src="{{ asset($page->vaccine_feature2_image) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-6 mb-3"><label>Feature 2 Title</label><input type="text" name="vaccine_feature2_title" class="form-control" value="{{ old('vaccine_feature2_title', $page->vaccine_feature2_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Feature 2 Text</label><textarea name="vaccine_feature2_text" class="form-control" rows="2">{{ old('vaccine_feature2_text', $page->vaccine_feature2_text) }}</textarea></div>
        <div class="col-md-6 mb-3"><label>FAQ Title</label><input type="text" name="vaccine_faq_title" class="form-control" value="{{ old('vaccine_faq_title', $page->vaccine_faq_title) }}"></div>
        <div class="col-md-6 mb-3"><label>FAQ Subtitle</label><input type="text" name="vaccine_faq_subtitle" class="form-control" value="{{ old('vaccine_faq_subtitle', $page->vaccine_faq_subtitle) }}"></div>
        @for($i=1;$i<=3;$i++)
        <div class="col-md-12 mb-3"><label>FAQ {{ $i }} Question</label><input type="text" name="vaccine_faq{{$i}}_q" class="form-control" value="{{ old('vaccine_faq'.$i.'_q', $page->{'vaccine_faq'.$i.'_q'}) }}"></div>
        <div class="col-md-12 mb-3"><label>FAQ {{ $i }} Answer</label><textarea name="vaccine_faq{{$i}}_a" class="form-control" rows="2">{{ old('vaccine_faq'.$i.'_a', $page->{'vaccine_faq'.$i.'_a'}) }}</textarea></div>
        @endfor
      </div>
      @endif

      {{-- CHILD GROWTH --}}
      @if($page->slug == 'child-growth')
      <div class="section-title">🧒 CHILD GROWTH</div>
      <div class="row">
        <div class="col-md-6 mb-3"><label>Banner Title</label><input type="text" name="growth_title" class="form-control" value="{{ old('growth_title', $page->growth_title) }}"></div>
        <div class="col-md-6 mb-3"><label>Banner Image</label><input type="file" name="growth_banner" class="form-control">@if($page->growth_banner)<img src="{{ asset($page->growth_banner) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-6 mb-3"><label>Help Title</label><input type="text" name="growth_help_title" class="form-control" value="{{ old('growth_help_title', $page->growth_help_title) }}"></div>
        <div class="col-md-6 mb-3"><label>Help Subtitle</label><input type="text" name="growth_help_subtitle" class="form-control" value="{{ old('growth_help_subtitle', $page->growth_help_subtitle) }}"></div>
        <div class="col-md-6 mb-3"><label>Help Phone</label><input type="text" name="growth_help_phone" class="form-control" value="{{ old('growth_help_phone', $page->growth_help_phone) }}"></div>
        <div class="col-md-6 mb-3"><label>Book Button</label><input type="text" name="growth_book_btn" class="form-control" value="{{ old('growth_book_btn', $page->growth_book_btn) }}"></div>
        <div class="col-md-12 mb-3"><label>Main Image</label><input type="file" name="growth_main_image" class="form-control">@if($page->growth_main_image)<img src="{{ asset($page->growth_main_image) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-12 mb-3"><label>Overview Title</label><input type="text" name="growth_overview_title" class="form-control" value="{{ old('growth_overview_title', $page->growth_overview_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Overview Para 1</label><textarea name="growth_overview_p1" class="form-control" rows="3">{{ old('growth_overview_p1', $page->growth_overview_p1) }}</textarea></div>
        <div class="col-md-12 mb-3"><label>Overview Para 2</label><textarea name="growth_overview_p2" class="form-control" rows="3">{{ old('growth_overview_p2', $page->growth_overview_p2) }}</textarea></div>
        <div class="col-md-12 mb-3"><label>Support Title</label><input type="text" name="growth_support_title" class="form-control" value="{{ old('growth_support_title', $page->growth_support_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Support Text</label><textarea name="growth_support_text" class="form-control" rows="3">{{ old('growth_support_text', $page->growth_support_text) }}</textarea></div>
        <div class="col-md-12 mb-3"><label>Quote</label><textarea name="growth_quote" class="form-control" rows="2">{{ old('growth_quote', $page->growth_quote) }}</textarea></div>
        <div class="col-md-6 mb-3"><label>Feature 1 Image</label><input type="file" name="growth_feature1_image" class="form-control">@if($page->growth_feature1_image)<img src="{{ asset($page->growth_feature1_image) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-6 mb-3"><label>Feature 1 Title</label><input type="text" name="growth_feature1_title" class="form-control" value="{{ old('growth_feature1_title', $page->growth_feature1_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Feature 1 Text</label><textarea name="growth_feature1_text" class="form-control" rows="2">{{ old('growth_feature1_text', $page->growth_feature1_text) }}</textarea></div>
        <div class="col-md-6 mb-3"><label>Feature 2 Image</label><input type="file" name="growth_feature2_image" class="form-control">@if($page->growth_feature2_image)<img src="{{ asset($page->growth_feature2_image) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-6 mb-3"><label>Feature 2 Title</label><input type="text" name="growth_feature2_title" class="form-control" value="{{ old('growth_feature2_title', $page->growth_feature2_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Feature 2 Text</label><textarea name="growth_feature2_text" class="form-control" rows="2">{{ old('growth_feature2_text', $page->growth_feature2_text) }}</textarea></div>
        <div class="col-md-6 mb-3"><label>FAQ Title</label><input type="text" name="growth_faq_title" class="form-control" value="{{ old('growth_faq_title', $page->growth_faq_title) }}"></div>
        <div class="col-md-6 mb-3"><label>FAQ Subtitle</label><input type="text" name="growth_faq_subtitle" class="form-control" value="{{ old('growth_faq_subtitle', $page->growth_faq_subtitle) }}"></div>
        @for($i=1;$i<=3;$i++)
        <div class="col-md-12 mb-3"><label>FAQ {{ $i }} Question</label><input type="text" name="growth_faq{{$i}}_q" class="form-control" value="{{ old('growth_faq'.$i.'_q', $page->{'growth_faq'.$i.'_q'}) }}"></div>
        <div class="col-md-12 mb-3"><label>FAQ {{ $i }} Answer</label><textarea name="growth_faq{{$i}}_a" class="form-control" rows="2">{{ old('growth_faq'.$i.'_a', $page->{'growth_faq'.$i.'_a'}) }}</textarea></div>
        @endfor
      </div>
      @endif

      {{-- GENERAL PEDIATRICS --}}
      @if($page->slug == 'general-pediatrics')
      <div class="section-title">🩺 GENERAL PEDIATRICS</div>
      <div class="row">
        <div class="col-md-6 mb-3"><label>Banner Title</label><input type="text" name="pedia_title" class="form-control" value="{{ old('pedia_title', $page->pedia_title) }}"></div>
        <div class="col-md-6 mb-3"><label>Banner Image</label><input type="file" name="pedia_banner" class="form-control">@if($page->pedia_banner)<img src="{{ asset($page->pedia_banner) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-6 mb-3"><label>Help Title</label><input type="text" name="pedia_help_title" class="form-control" value="{{ old('pedia_help_title', $page->pedia_help_title) }}"></div>
        <div class="col-md-6 mb-3"><label>Help Subtitle</label><input type="text" name="pedia_help_subtitle" class="form-control" value="{{ old('pedia_help_subtitle', $page->pedia_help_subtitle) }}"></div>
        <div class="col-md-6 mb-3"><label>Help Phone</label><input type="text" name="pedia_help_phone" class="form-control" value="{{ old('pedia_help_phone', $page->pedia_help_phone) }}"></div>
        <div class="col-md-6 mb-3"><label>Book Button</label><input type="text" name="pedia_book_btn" class="form-control" value="{{ old('pedia_book_btn', $page->pedia_book_btn) }}"></div>
        <div class="col-md-12 mb-3"><label>Main Image</label><input type="file" name="pedia_main_image" class="form-control">@if($page->pedia_main_image)<img src="{{ asset($page->pedia_main_image) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-12 mb-3"><label>Overview Title</label><input type="text" name="pedia_overview_title" class="form-control" value="{{ old('pedia_overview_title', $page->pedia_overview_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Overview Para 1</label><textarea name="pedia_overview_p1" class="form-control" rows="3">{{ old('pedia_overview_p1', $page->pedia_overview_p1) }}</textarea></div>
        <div class="col-md-12 mb-3"><label>Overview Para 2</label><textarea name="pedia_overview_p2" class="form-control" rows="3">{{ old('pedia_overview_p2', $page->pedia_overview_p2) }}</textarea></div>
        <div class="col-md-12 mb-3"><label>Support Title</label><input type="text" name="pedia_support_title" class="form-control" value="{{ old('pedia_support_title', $page->pedia_support_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Support Text</label><textarea name="pedia_support_text" class="form-control" rows="3">{{ old('pedia_support_text', $page->pedia_support_text) }}</textarea></div>
        <div class="col-md-12 mb-3"><label>Quote</label><textarea name="pedia_quote" class="form-control" rows="2">{{ old('pedia_quote', $page->pedia_quote) }}</textarea></div>
        <div class="col-md-6 mb-3"><label>Feature 1 Image</label><input type="file" name="pedia_feature1_image" class="form-control">@if($page->pedia_feature1_image)<img src="{{ asset($page->pedia_feature1_image) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-6 mb-3"><label>Feature 1 Title</label><input type="text" name="pedia_feature1_title" class="form-control" value="{{ old('pedia_feature1_title', $page->pedia_feature1_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Feature 1 Text</label><textarea name="pedia_feature1_text" class="form-control" rows="2">{{ old('pedia_feature1_text', $page->pedia_feature1_text) }}</textarea></div>
        <div class="col-md-6 mb-3"><label>Feature 2 Image</label><input type="file" name="pedia_feature2_image" class="form-control">@if($page->pedia_feature2_image)<img src="{{ asset($page->pedia_feature2_image) }}" height="60" class="mt-2">@endif</div>
        <div class="col-md-6 mb-3"><label>Feature 2 Title</label><input type="text" name="pedia_feature2_title" class="form-control" value="{{ old('pedia_feature2_title', $page->pedia_feature2_title) }}"></div>
        <div class="col-md-12 mb-3"><label>Feature 2 Text</label><textarea name="pedia_feature2_text" class="form-control" rows="2">{{ old('pedia_feature2_text', $page->pedia_feature2_text) }}</textarea></div>
        <div class="col-md-6 mb-3"><label>FAQ Title</label><input type="text" name="pedia_faq_title" class="form-control" value="{{ old('pedia_faq_title', $page->pedia_faq_title) }}"></div>
        <div class="col-md-6 mb-3"><label>FAQ Subtitle</label><input type="text" name="pedia_faq_subtitle" class="form-control" value="{{ old('pedia_faq_subtitle', $page->pedia_faq_subtitle) }}"></div>
        @for($i=1;$i<=3;$i++)
        <div class="col-md-12 mb-3"><label>FAQ {{ $i }} Question</label><input type="text" name="pedia_faq{{$i}}_q" class="form-control" value="{{ old('pedia_faq'.$i.'_q', $page->{'pedia_faq'.$i.'_q'}) }}"></div>
        <div class="col-md-12 mb-3"><label>FAQ {{ $i }} Answer</label><textarea name="pedia_faq{{$i}}_a" class="form-control" rows="2">{{ old('pedia_faq'.$i.'_a', $page->{'pedia_faq'.$i.'_a'}) }}</textarea></div>
        @endfor
      </div>
      @endif

      <div class="mt-4 d-flex gap-2">
        <button type="submit" class="btn-pink"><i class="fa-solid fa-floppy-disk me-2"></i> Save Changes</button>
        <a href="/admin" class="btn btn-light" style="border-radius:10px;border:1px solid #FDECF3">Cancel</a>
      </div>
    </form>
  </div>
</div>
</div></div>
<script>
function toggleDoctor(btn){ var d=document.getElementById('doctorDropdown'); var a=document.getElementById('doctorArrow'); if(d.style.display==='none'||d.style.display===''){ d.style.display='block'; a.innerHTML='▲'; } else { d.style.display='none'; a.innerHTML='▼'; } }
function toggleServices(btn){ var d=document.getElementById('servicesDropdown'); var a=document.getElementById('servicesArrow'); if(d.style.display==='none'||d.style.display===''){ d.style.display='block'; a.innerHTML='▲'; } else { d.style.display='none'; a.innerHTML='▼'; } }
</script>
</body>
</html>