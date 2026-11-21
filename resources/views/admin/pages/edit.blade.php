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
:root{ --pink:#E84393; --pink-dark:#D6307A; --pink-light:#FDECF3; --pink-soft:#FFF5F8; --green:#00B894; --bg:#FFF9FB; --text:#2D3436; --muted:#636E72; }
body{background:var(--bg);font-family:'Inter',sans-serif;color:var(--text);font-size:14px}
h1,h2,h3,h4,h5{font-family:'Poppins',sans-serif}
.sidebar{background:#fff;min-height:100vh;padding:28px 18px;position:sticky;top:0;border-right:1px solid #FDECF3}
.sidebar .logo{font-family:'Poppins',sans-serif;font-weight:800;font-size:20px;line-height:1.15}
.sidebar .logo span{color:var(--pink)}
.sidebar .logo small{font-family:'Inter',sans-serif;font-size:10px;font-weight:700;letter-spacing:1.2px;color:var(--muted)}
.sidebar .menu-label{font-size:11px;font-weight:700;letter-spacing:1px;color:#B2BEC3;margin:18px 0 8px 10px}
.sidebar .nav-link{color:#636E72;border-radius:12px;padding:12px;margin-bottom:4px;font-weight:600;font-size:13.5px;text-decoration:none;display:flex;align-items:center;gap:10px;width:100%;text-align:left;background:transparent;border:0;cursor:pointer}
.sidebar .nav-link i{width:32px;height:32px;border-radius:9px;background:#FFF0F5;color:var(--pink);display:flex;align-items:center;justify-content:center;font-size:14px;flex-shrink:0}
.sidebar .nav-link:hover{background:var(--pink-soft);color:var(--pink-dark)}
.sidebar .nav-link.active{background:var(--pink);color:#fff;box-shadow:0 8px 20px rgba(232,67,147,.35)}
.sidebar .nav-link.active i{background:rgba(255,255,255,.25);color:#fff}
.topbar{background:#fff;border:1px solid #FDECF3;border-radius:16px;padding:16px 20px}
.card{border:1px solid #FDECF3;border-radius:18px;background:#fff}
.form-control{border:1px solid #FDCEDF;border-radius:11px;padding:11px 13px;background:#FFF9FB;font-size:14px}
.form-control:focus{border-color:var(--pink);box-shadow:0 0 0 4px #FDECF3;outline:none;background:#fff}
.btn-pink{background:var(--pink);color:#fff;border:0;padding:11px 25px;border-radius:10px;font-weight:600;font-size:14px}
.btn-pink:hover{background:var(--pink-dark);color:#fff}
.dropdown-sub{border-left:3px solid var(--pink-light);margin-left:14px;padding-left:6px}
.section-title{background:#FFF5F8;border:1px solid #FDECF3;border-radius:12px;padding:12px 16px;font-weight:700;color:#D6307A;margin:22px 0 14px;}
</style>
</head>
<body>
<div class="container-fluid"><div class="row">

<!-- LEFT SIDEBAR -->
<div class="col-md-2 sidebar">
  <div class="logo">Women & <span>Child Care</span><br><small>GURUGRAM • ADMIN PANEL</small></div>
  <div class="menu-label">MAIN MENU</div>
  <a href="/admin/dashboard" class="nav-link"><i class="fa-solid fa-border-all"></i> Dashboard</a>

  <div class="menu-label">WEBSITE</div>
  <button onclick="togglePages(this)" class="nav-link active"><i class="fa-solid fa-layer-group"></i> All Pages <span class="ms-auto" id="pagesArrow" style="font-size:11px;transition:.3s">▼</span></button>
  <div id="pagesDropdown" class="dropdown-sub" style="display:block">
    <a href="/admin/pages/home" class="nav-link {{ $page->slug=='home' ? 'active' : '' }}"><i class="fa-solid fa-house"></i> Home Page</a>
    <a href="/admin/pages/about" class="nav-link {{ $page->slug=='about' ? 'active' : '' }}"><i class="fa-solid fa-circle-info"></i> About Page</a>
    <a href="/admin/pages/doctor" class="nav-link {{ $page->slug=='doctor' ? 'active' : '' }}"><i class="fa-solid fa-user-doctor"></i> Doctor Page</a>
    <a href="/admin/pages/services" class="nav-link {{ $page->slug=='services' ? 'active' : '' }}"><i class="fa-solid fa-stethoscope"></i> Services Page</a>
    <a href="/admin/pages/contact" class="nav-link {{ $page->slug=='contact' ? 'active' : '' }}"><i class="fa-solid fa-phone"></i> Contact Page</a>
    <a href="/admin/settings" class="nav-link"><i class="fa-solid fa-gear"></i> Header / Footer</a>
  </div>

  <div class="menu-label">GENERAL</div>
  <a href="/" target="_blank" class="nav-link"><i class="fa-solid fa-globe"></i> View Website</a>
  <a href="/admin/logout" class="nav-link" style="color:#D63031"><i class="fa-solid fa-right-from-bracket" style="background:#FFF1F1;color:#D63031"></i> Logout</a>

  <div class="mt-4 p-3" style="background:linear-gradient(135deg,#E84393,#FD79A8);border-radius:16px;color:#fff">
    <div style="font-size:22px">👩‍⚕️</div>
    <p class="mb-1 fw-bold" style="font-size:13px">Need Help?</p>
    <p class="mb-0" style="font-size:12px;opacity:.9">Call: +91 90155 98903<br>Mon - Sat, 10 AM - 7 PM</p>
  </div>
</div>

<!-- RIGHT SIDE -->
<div class="col-md-10 p-3 p-md-4">
  <div class="topbar d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
    <div><h4 class="fw-bold mb-0">Edit {{ $page->title }} ✏️</h4><p class="text-muted mb-0" style="font-size:13px">Edit here, click Save, it will update on website instantly.</p></div>
    <a href="/admin/dashboard" class="btn btn-light" style="border-radius:11px;border:1px solid #FDECF3"><i class="fa-solid fa-arrow-left me-2"></i> Back to Dashboard</a>
  </div>

  @if(session('success'))
    <div class="alert alert-success" style="border-radius:12px;background:#DFF7F0;border:1px solid #B8F0DD;color:#00997A">{{ session('success') }}</div>
  @endif

  <div class="card p-4">
    <form method="POST" action="{{ route('admin.pages.update', $page->slug) }}" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      {{-- ===== PAGE TITLE - SABKE LIYE ===== --}}
      <div class="mb-3">
        <label class="fw-bold mb-1">Page Title</label>
        <input type="text" name="title" value="{{ $page->title }}" class="form-control" placeholder="e.g. About Us">
      </div>

      {{-- ================= HOME PAGE START ================= --}}
      @if($page->slug == 'home')

      <div class="section-title">🏠 HERO SECTION - Home Page ka Banner</div>
      <div class="mb-3">
        <label class="fw-bold mb-1">Hero - Trusted Text <small class="text-muted">(Upar wala chota text)</small></label>
        <input type="text" name="hero_trusted" value="{{ $page->hero_trusted ?? 'Trusted by 50,000+ patients' }}" class="form-control" placeholder="Trusted by 50,000+ patients">
      </div>
      <div class="mb-3">
        <label class="fw-bold mb-1">Hero - Bada Heading</label>
        <input type="text" name="hero_title" value="{{ $page->hero_title ?? $page->title }}" class="form-control" placeholder="Care for Every Woman Care for Every Child">
      </div>
      <div class="mb-3">
        <label class="fw-bold mb-1">Hero - Chota Text</label>
        <textarea name="hero_text" rows="3" class="form-control" placeholder="From pregnancy to motherhood...">{{ $page->hero_text ?? $page->content }}</textarea>
      </div>
      <div class="mb-3">
        <label class="fw-bold mb-1">Hero - Banner Image</label>
        @if($page->hero_image)
          <div class="mb-2"><img src="{{ asset($page->hero_image) }}" style="height:90px;border-radius:10px;border:1px solid #FDECF3;"></div>
        @endif
        <input type="file" name="hero_image" class="form-control" accept="image/*">
        <small class="text-muted">Khali chhodo to purani image hi rahegi.</small>
      </div>

      <div class="section-title">📞 HERO - Neeche wala Feature Box</div>
      <div class="row">
        <div class="col-md-4 mb-3"><label class="fw-bold mb-1">Phone</label><input type="text" name="hero_phone" value="{{ $page->hero_phone ?? '+91-90 15 59 8903' }}" class="form-control"></div>
        <div class="col-md-4 mb-3"><label class="fw-bold mb-1">Timing Line 1</label><input type="text" name="hero_timing" value="{{ $page->hero_timing ?? 'Mon - Fri: 8:00AM - 7:00PM' }}" class="form-control"></div>
        <div class="col-md-4 mb-3"><label class="fw-bold mb-1">Timing Line 2</label><input type="text" name="hero_timing2" value="{{ $page->hero_timing2 ?? 'Sat - Sun: Closed' }}" class="form-control"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Address Line 1</label><input type="text" name="hero_address" value="{{ $page->hero_address ?? 'Location-: H.No-211,' }}" class="form-control"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Address Line 2</label><input type="text" name="hero_address2" value="{{ $page->hero_address2 ?? 'Sector-31, Gurgaon, Haryana India' }}" class="form-control"></div>
      </div>

      <div class="section-title">📝 Page Content</div>
      <div class="mb-3"><label class="fw-bold mb-1">Main Content</label><textarea name="content" rows="8" class="form-control" placeholder="Write main text of this page here...">{{ $page->content }}</textarea></div>
      <div class="mb-3"><label class="fw-bold mb-1">Second Content</label><textarea name="content2" rows="5" class="form-control" placeholder="Write extra text here...">{{ $page->content2 }}</textarea></div>

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

      <h3>Why Choose Us Section</h3>
      <input type="text" name="wcu_subtitle" value="{{ $page->wcu_subtitle }}" placeholder="Why Choose Us Sub Title" class="form-control mb-2">
      <input type="text" name="wcu_title" value="{{ $page->wcu_title }}" placeholder="Why Choose Us Title" class="form-control mb-2">
      <textarea name="wcu_text" class="form-control mb-2" placeholder="Why Choose Us Text">{{ $page->wcu_text }}</textarea>
      @for($i=1; $i<=3; $i++)
        <input type="text" name="wcu_acc{{$i}}_title" value="{{ $page->{'wcu_acc'.$i.'_title'} }}" placeholder="Accordion {{$i}} Title" class="form-control mb-1">
        <textarea name="wcu_acc{{$i}}_text" class="form-control mb-2" placeholder="Accordion {{$i}} Text">{{ $page->{'wcu_acc'.$i.'_text'} }}</textarea>
      @endfor
      <input type="text" name="wcu_info_title" value="{{ $page->wcu_info_title }}" placeholder="Info Box Title" class="form-control mb-2">
      @for($i=1; $i<=6; $i++)
        <input type="text" name="wcu_list{{$i}}" value="{{ $page->{'wcu_list'.$i} }}" placeholder="List {{$i}}" class="form-control mb-1">
      @endfor
      <label>Why Choose Us Image</label><input type="file" name="wcu_image" class="form-control mb-2">

      <h3>Funfact / Counter Section</h3>
      @for($i=1; $i<=4; $i++)
        <div class="row">
          <div class="col-md-3"><input type="text" name="funfact{{$i}}_number" value="{{ $page->{'funfact'.$i.'_number'} }}" placeholder="Counter {{$i}} Number - jaise 10" class="form-control mb-1"></div>
          <div class="col-md-3"><input type="text" name="funfact{{$i}}_suffix" value="{{ $page->{'funfact'.$i.'_suffix'} }}" placeholder="Suffix - jaise + / K / M" class="form-control mb-1"></div>
          <div class="col-md-6"><input type="text" name="funfact{{$i}}_text" value="{{ $page->{'funfact'.$i.'_text'} }}" placeholder="Counter {{$i}} Text" class="form-control mb-1"></div>
        </div>
      @endfor

      <h3>Working / Achievements Section</h3>
      <input type="text" name="working_subtitle" value="{{ $page->working_subtitle }}" placeholder="Subtitle - jaise Our Achievements" class="form-control mb-1">
      <input type="text" name="working_title" value="{{ $page->working_title }}" placeholder="Title - jaise Trusted Care For Mother & Child" class="form-control mb-1">
      <textarea name="working_text1" placeholder="Text 1" class="form-control mb-1">{{ $page->working_text1 }}</textarea>
      <textarea name="working_text2" placeholder="Text 2" class="form-control mb-1">{{ $page->working_text2 }}</textarea>
      <input type="text" name="working_btn_text" value="{{ $page->working_btn_text }}" placeholder="Button Text - jaise Book a consultation" class="form-control mb-1">
      <input type="text" name="working_success_title" value="{{ $page->working_success_title }}" placeholder="Success Title - jaise Our Care Success Rate" class="form-control mb-1">
      <label>Background Image</label><input type="file" name="working_image" class="form-control mb-1">
      @for($i=1; $i<=4; $i++)
        <div class="row">
          <div class="col-md-8"><input type="text" name="working_bar{{$i}}_title" value="{{ $page->{'working_bar'.$i.'_title'} }}" placeholder="Bar {{$i}} Title - jaise Antenatal Care" class="form-control mb-1"></div>
          <div class="col-md-4"><input type="text" name="working_bar{{$i}}_percent" value="{{ $page->{'working_bar'.$i.'_percent'} }}" placeholder="Percent - sirf number jaise 98" class="form-control mb-1"></div>
        </div>
      @endfor

      <h3>Testimonial Section</h3>
      <input type="text" name="testi_subtitle" value="{{ $page->testi_subtitle }}" placeholder="Subtitle - jaise Testimonial" class="form-control mb-1">
      <input type="text" name="testi_title" value="{{ $page->testi_title }}" placeholder="Title - jaise Real stories from happy mothers" class="form-control mb-1">
      <div class="row">
        <div class="col-md-4"><input type="text" name="testi_rating" value="{{ $page->testi_rating }}" placeholder="Rating - jaise 4.8" class="form-control mb-1"></div>
        <div class="col-md-8"><input type="text" name="testi_rating_text" value="{{ $page->testi_rating_text }}" placeholder="Rating Text - jaise From 3k Members, Reviewed by Google" class="form-control mb-1"></div>
      </div>
      <label>Right Side Badi Image</label><input type="file" name="testi_side_image" class="form-control mb-2">
      @for($i=1; $i<=3; $i++)
        <h5>Review {{$i}}</h5>
        <textarea name="testi{{$i}}_text" placeholder="Review {{$i}} Text" class="form-control mb-1">{{ $page->{'testi'.$i.'_text'} }}</textarea>
        <div class="row">
          <div class="col-md-4"><input type="text" name="testi{{$i}}_name" value="{{ $page->{'testi'.$i.'_name'} }}" placeholder="Name - jaise Priya Sharma" class="form-control mb-1"></div>
          <div class="col-md-4"><input type="text" name="testi{{$i}}_role" value="{{ $page->{'testi'.$i.'_role'} }}" placeholder="Role - jaise New Mother" class="form-control mb-1"></div>
          <div class="col-md-4"><input type="file" name="testi{{$i}}_image" class="form-control mb-1"></div>
        </div>
      @endfor

      <h3>Team Section</h3>
      <input type="text" name="team_subtitle" value="{{ $page->team_subtitle }}" placeholder="Subtitle - jaise Team" class="form-control mb-1">
      <input type="text" name="team_title" value="{{ $page->team_title }}" placeholder="Title - jaise The team caring for mother & child" class="form-control mb-1">
      @for($i=1; $i<=3; $i++)
        <h5>Doctor {{$i}}</h5>
        <div class="row">
          <div class="col-md-4"><input type="text" name="team{{$i}}_name" value="{{ $page->{'team'.$i.'_name'} }}" placeholder="Name - jaise Dr. Devendra Agarwal" class="form-control mb-1"></div>
          <div class="col-md-4"><input type="text" name="team{{$i}}_role" value="{{ $page->{'team'.$i.'_role'} }}" placeholder="Role - jaise MBBS, MD - Pediatrics" class="form-control mb-1"></div>
          <div class="col-md-4"><input type="file" name="team{{$i}}_image" class="form-control mb-1"></div>
        </div>
      @endfor

      <h3>Contact / Appointment Section</h3>
      <input type="text" name="contact_left_title" value="{{ $page->contact_left_title }}" placeholder="Left Title - jaise Mother & Child Questions Answered." class="form-control mb-1">
      <input type="text" name="contact_email_label" value="{{ $page->contact_email_label }}" placeholder="Email Label - jaise Drop Us Email" class="form-control mb-1">
      <input type="text" name="contact_email" value="{{ $page->contact_email }}" placeholder="Email - jaise info@womenandchildcare.com" class="form-control mb-1">
      <input type="text" name="contact_subtitle" value="{{ $page->contact_subtitle }}" placeholder="Subtitle - jaise Contact us" class="form-control mb-1">
      <input type="text" name="contact_title" value="{{ $page->contact_title }}" placeholder="Title - jaise Book appointment today!" class="form-control mb-1">
      <input type="text" name="contact_btn_text" value="{{ $page->contact_btn_text }}" placeholder="Button Text - jaise Book Appointment" class="form-control mb-1">
      <label>Left Side Image</label><input type="file" name="contact_left_image" class="form-control mb-1">
      <label>Right Side Background Image</label><input type="file" name="contact_bg_image" class="form-control mb-1">

      <h3>Blog Section</h3>
      <input type="text" name="blog_subtitle" value="{{ $page->blog_subtitle }}" placeholder="Subtitle - jaise Our Blog" class="form-control mb-1">
      <input type="text" name="blog_title" value="{{ $page->blog_title }}" placeholder="Title - jaise Checkout latest news update & articles" class="form-control mb-1">
      @for($i=1; $i<=3; $i++)
        <h5>Blog {{$i}}</h5>
        <div class="row">
          <div class="col-md-2"><input type="text" name="blog{{$i}}_date" value="{{ $page->{'blog'.$i.'_date'} }}" placeholder="Date - jaise 06" class="form-control mb-1"></div>
          <div class="col-md-4"><input type="text" name="blog{{$i}}_title" value="{{ $page->{'blog'.$i.'_title'} }}" placeholder="Title" class="form-control mb-1"></div>
          <div class="col-md-4"><textarea name="blog{{$i}}_excerpt" placeholder="Short Description" class="form-control mb-1">{{ $page->{'blog'.$i.'_excerpt'} }}</textarea></div>
          <div class="col-md-2"><input type="file" name="blog{{$i}}_image" class="form-control mb-1"></div>
        </div>
      @endfor

      <h3>CTA / Footer Top Section</h3>
      <div class="row">
        <div class="col-md-4"><h5>Box 1 - Address</h5><input type="text" name="cta1_title" value="{{ $page->cta1_title }}" placeholder="Title - jaise Address" class="form-control mb-1"><textarea name="cta1_text" placeholder="Address - 2 line ke liye Enter dabao" class="form-control mb-1">{{ $page->cta1_text }}</textarea></div>
        <div class="col-md-4"><h5>Box 2 - Timing</h5><input type="text" name="cta2_title" value="{{ $page->cta2_title }}" placeholder="Title - jaise Available Hour" class="form-control mb-1"><input type="text" name="cta2_text1" value="{{ $page->cta2_text1 }}" placeholder="Line 1 - jaise Fri - The: 10:00- 24:00" class="form-control mb-1"><input type="text" name="cta2_text2" value="{{ $page->cta2_text2 }}" placeholder="Line 2 - jaise Sat - Mon: 01:00- 12:00" class="form-control mb-1"></div>
        <div class="col-md-4"><h5>Box 3 - Contact</h5><input type="text" name="cta3_title" value="{{ $page->cta3_title }}" placeholder="Title - jaise Contact Us" class="form-control mb-1"><input type="text" name="cta3_text1" value="{{ $page->cta3_text1 }}" placeholder="Email" class="form-control mb-1"><input type="text" name="cta3_text2" value="{{ $page->cta3_text2 }}" placeholder="Phone" class="form-control mb-1"></div>
      </div>
      <label>CTA Background Image</label><input type="file" name="cta_bg_image" class="form-control mb-1">

      @endif
      {{-- ================= HOME PAGE END ================= --}}

      {{-- ================= ABOUT PAGE START ================= --}}
      @if($page->slug == 'about')

      <div class="section-title">ℹ️ ABOUT PAGE - Hero / Banner Section</div>
      <div class="row">
        <div class="col-md-6">
          <label class="fw-bold mb-1">Banner Title</label>
          <input type="text" name="about_banner_title" value="{{ $page->about_banner_title }}" placeholder="jaise About" class="form-control mb-2">
          <label class="fw-bold mb-1">Breadcrumb Text</label>
          <input type="text" name="about_banner_breadcrumb" value="{{ $page->about_banner_breadcrumb }}" placeholder="jaise About" class="form-control mb-2">
        </div>
        <div class="col-md-6">
          <label class="fw-bold mb-1">Banner Background Image</label>
          @if($page->about_banner_image)<div class="mb-2"><img src="{{ asset($page->about_banner_image) }}" style="height:60px;border-radius:8px"></div>@endif
          <input type="file" name="about_banner_image" class="form-control mb-1">
        </div>
      </div>

      <div class="section-title">📝 Page Content</div>
      <div class="mb-3"><label class="fw-bold mb-1">Main Content</label><textarea name="content" rows="8" class="form-control" placeholder="Write main text of this page here...">{{ $page->content }}</textarea></div>
      <div class="mb-3"><label class="fw-bold mb-1">Second Content</label><textarea name="content2" rows="5" class="form-control" placeholder="Write extra text here...">{{ $page->content2 }}</textarea></div>

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

      <h3>Why Choose Us Section</h3>
      <input type="text" name="wcu_subtitle" value="{{ $page->wcu_subtitle }}" placeholder="Why Choose Us Sub Title" class="form-control mb-2">
      <input type="text" name="wcu_title" value="{{ $page->wcu_title }}" placeholder="Why Choose Us Title" class="form-control mb-2">
      <textarea name="wcu_text" class="form-control mb-2" placeholder="Why Choose Us Text">{{ $page->wcu_text }}</textarea>
      @for($i=1; $i<=3; $i++)
        <input type="text" name="wcu_acc{{$i}}_title" value="{{ $page->{'wcu_acc'.$i.'_title'} }}" placeholder="Accordion {{$i}} Title" class="form-control mb-1">
        <textarea name="wcu_acc{{$i}}_text" class="form-control mb-2" placeholder="Accordion {{$i}} Text">{{ $page->{'wcu_acc'.$i.'_text'} }}</textarea>
      @endfor
      <input type="text" name="wcu_info_title" value="{{ $page->wcu_info_title }}" placeholder="Info Box Title" class="form-control mb-2">
      @for($i=1; $i<=6; $i++)
        <input type="text" name="wcu_list{{$i}}" value="{{ $page->{'wcu_list'.$i} }}" placeholder="List {{$i}}" class="form-control mb-1">
      @endfor
      <label>Why Choose Us Image</label><input type="file" name="wcu_image" class="form-control mb-2">

      <h3>Team Section</h3>
      <input type="text" name="team_subtitle" value="{{ $page->team_subtitle }}" placeholder="Subtitle - jaise Team" class="form-control mb-1">
      <input type="text" name="team_title" value="{{ $page->team_title }}" placeholder="Title - jaise The team caring for mother & child" class="form-control mb-1">
      @for($i=1; $i<=3; $i++)
        <h5>Doctor {{$i}}</h5>
        <div class="row">
          <div class="col-md-4"><input type="text" name="team{{$i}}_name" value="{{ $page->{'team'.$i.'_name'} }}" placeholder="Name - jaise Dr. Devendra Agarwal" class="form-control mb-1"></div>
          <div class="col-md-4"><input type="text" name="team{{$i}}_role" value="{{ $page->{'team'.$i.'_role'} }}" placeholder="Role - jaise MBBS, MD - Pediatrics" class="form-control mb-1"></div>
          <div class="col-md-4"><input type="file" name="team{{$i}}_image" class="form-control mb-1"></div>
        </div>
      @endfor

      @endif
      {{-- ================= ABOUT PAGE END ================= --}}

      {{-- ===== DOCTOR / SERVICES / CONTACT KE LIYE - SIRF CONTENT ===== --}}
      @if(!in_array($page->slug, ['home','about']))
      <div class="section-title">📝 Page Content</div>
      <div class="mb-3"><label class="fw-bold mb-1">Main Content</label><textarea name="content" rows="8" class="form-control" placeholder="Write main text of this page here...">{{ $page->content }}</textarea></div>
      <div class="mb-3"><label class="fw-bold mb-1">Second Content</label><textarea name="content2" rows="5" class="form-control" placeholder="Write extra text here...">{{ $page->content2 }}</textarea></div>
      @endif

{{-- DOCTOR START - Sirf Banner + Team --}}
@if($page->slug == 'doctor')

<h4>Doctor Banner</h4>
<input type="text" name="doctor_banner_title" class="form-control" value="{{ $page->doctor_banner_title }}">
<input type="text" name="doctor_banner_breadcrumb" class="form-control mt-2" value="{{ $page->doctor_banner_breadcrumb }}">
<input type="file" name="doctor_banner_image" class="form-control mt-2">
@if($page->doctor_banner_image)
<img src="{{ asset($page->doctor_banner_image) }}" width="200">
@endif

<hr>
<h4>Doctor Team - 3 Doctor</h4>
<input type="text" name="team_subtitle" class="form-control" placeholder="Subtitle" value="{{ $page->team_subtitle }}">
<input type="text" name="team_title" class="form-control mt-2" placeholder="Title" value="{{ $page->team_title }}">

<h5 class="mt-3">Doctor 1</h5>
<input type="text" name="team1_name" class="form-control" value="{{ $page->team1_name }}">
<input type="text" name="team1_role" class="form-control mt-2" value="{{ $page->team1_role }}">
<input type="file" name="team1_image" class="form-control mt-2">
@if($page->team1_image)<img src="{{ asset($page->team1_image) }}" width="120">@endif

<h5 class="mt-3">Doctor 2</h5>
<input type="text" name="team2_name" class="form-control" value="{{ $page->team2_name }}">
<input type="text" name="team2_role" class="form-control mt-2" value="{{ $page->team2_role }}">
<input type="file" name="team2_image" class="form-control mt-2">
@if($page->team2_image)<img src="{{ asset($page->team2_image) }}" width="120">@endif

<h5 class="mt-3">Doctor 3</h5>
<input type="text" name="team3_name" class="form-control" value="{{ $page->team3_name }}">
<input type="text" name="team3_role" class="form-control mt-2" value="{{ $page->team3_role }}">
<input type="file" name="team3_image" class="form-control mt-2">
@if($page->team3_image)<img src="{{ asset($page->team3_image) }}" width="120">@endif

@endif
{{-- DOCTOR END --}}

@if($page->slug == 'contact')
<h4>Contact Banner</h4>
<input type="text" name="contact_banner_title" class="form-control" value="{{ $page->contact_banner_title }}">
<input type="text" name="contact_banner_breadcrumb" class="form-control mt-2" value="{{ $page->contact_banner_breadcrumb }}">
<input type="file" name="contact_banner_image" class="form-control mt-2">
@if($page->contact_banner_image)<img src="{{ asset($page->contact_banner_image) }}" width="200">@endif

<hr>
<h4>Contact Details</h4>
<input type="text" name="contact_subtitle" class="form-control" placeholder="Subtitle" value="{{ $page->contact_subtitle }}">
<input type="text" name="contact_title" class="form-control mt-2" placeholder="Title - Get In Touch" value="{{ $page->contact_title }}">
<input type="text" name="contact_email" class="form-control mt-2" placeholder="Email" value="{{ $page->contact_email }}">
<input type="text" name="contact_phone" class="form-control mt-2" placeholder="Phone Number" value="{{ $page->contact_phone }}">
<input type="text" name="contact_address" class="form-control mt-2" placeholder="Address" value="{{ $page->contact_address }}">
<input type="text" name="contact_timing" class="form-control mt-2" placeholder="Timing - Mon-Sat 9am to 6pm" value="{{ $page->contact_timing }}">
<input type="text" name="contact_btn_text" class="form-control mt-2" placeholder="Button Text" value="{{ $page->contact_btn_text }}">

<hr>
<h4>Map</h4>
<textarea name="contact_map_embed" class="form-control" rows="4" placeholder="Google Map Embed Code ">{{ $page->contact_map_embed }}</textarea>
<small>Google Maps -> Share -> Embed a map -> </small>
@endif

      <button type="submit" class="btn-pink"><i class="fa-solid fa-floppy-disk me-2"></i> Save Page</button>
      <a href="/" target="_blank" class="btn btn-light ms-2" style="border-radius:10px;border:1px solid #FDECF3">View Website</a>
    </form>
  </div>
</div>
</div></div>

<script>
function togglePages(btn){
  let drop = document.getElementById('pagesDropdown');
  let arrow = document.getElementById('pagesArrow');
  if(drop.style.display === 'none'){ drop.style.display='block'; arrow.style.transform='rotate(180deg)'; }
  else { drop.style.display='none'; arrow.style.transform='rotate(0deg)'; }
}
</script>
</body>
</html>