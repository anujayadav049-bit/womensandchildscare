<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Header / Footer - Women & Child Care</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">
<style>
:root{ --pink:#E84393; --pink-dark:#D6307A; --pink-light:#FDECF3; --pink-soft:#FFF5F8; --bg:#FFF9FB; --text:#2D3436; }
body{background:var(--bg);font-family:'Inter',sans-serif;color:var(--text);font-size:14px}
h1,h2,h3,h4,h5{font-family:'Poppins',sans-serif}
.sidebar{background:#fff;min-height:100vh;padding:28px 18px;position:sticky;top:0;border-right:1px solid #FDECF3}
.sidebar .logo{font-family:'Poppins',sans-serif;font-weight:800;font-size:20px;line-height:1.15}
.sidebar .logo span{color:var(--pink)}
.sidebar .logo small{font-family:'Inter',sans-serif;font-size:10px;font-weight:700;letter-spacing:1.2px;color:#636E72}
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
.btn-pink{background:var(--pink);color:#fff;border:0;padding:11px 25px;border-radius:10px;font-weight:600}
.btn-pink:hover{background:var(--pink-dark);color:#fff}
.dropdown-sub{border-left:3px solid var(--pink-light);margin-left:14px;padding-left:6px}
.section-title{background:linear-gradient(135deg,#E84393,#FD79A8);color:#fff;padding:10px 16px;border-radius:12px;font-weight:700;margin:22px 0 14px;font-size:14px}
.sub-title{background:#FFF5F8;border:1px dashed #FDCEDF;padding:8px 12px;border-radius:10px;font-weight:700;font-size:13px;margin:14px 0 10px;color:#D6307A}
.logo-box{background:#FFF9FB;border:1px dashed #FDCEDF;border-radius:12px;padding:14px;text-align:center}
.logo-box img{height:60px;object-fit:contain;max-width:100%}
.logo-box.dark{background:#2D3436}
</style>
</head>
<body>
<div class="container-fluid"><div class="row">
<div class="col-md-2 sidebar">
  <div class="logo">Women & <span>Child Care</span><br><small>GURUGRAM • ADMIN PANEL</small></div>
  <div class="menu-label">MAIN MENU</div>
  <a href="/admin/dashboard" class="nav-link"><i class="fa-solid fa-border-all"></i> Dashboard</a>
  <div class="menu-label">WEBSITE</div>
  <button onclick="togglePages(this)" class="nav-link active"><i class="fa-solid fa-layer-group"></i> All Pages <span class="ms-auto" id="pagesArrow" style="font-size:11px;transition:.3s">▼</span></button>
  <div id="pagesDropdown" class="dropdown-sub" style="display:block">
    <a href="/admin/pages/home" class="nav-link"><i class="fa-solid fa-house"></i> Home Page</a>
    <a href="/admin/pages/about" class="nav-link"><i class="fa-solid fa-circle-info"></i> About Page</a>
    <a href="/admin/pages/doctor" class="nav-link"><i class="fa-solid fa-user-doctor"></i> Doctor Page</a>
    <a href="/admin/pages/services" class="nav-link"><i class="fa-solid fa-stethoscope"></i> Services Page</a>
    <a href="/admin/pages/contact" class="nav-link"><i class="fa-solid fa-phone"></i> Contact Page</a>
    <a href="/admin/settings" class="nav-link active"><i class="fa-solid fa-gear"></i> Header / Footer</a>
  </div>
  <div class="menu-label">GENERAL</div>
  <a href="/" target="_blank" class="nav-link"><i class="fa-solid fa-globe"></i> View Website</a>
  <a href="/admin/logout" class="nav-link" style="color:#D63031"><i class="fa-solid fa-right-from-bracket" style="background:#FFF1F1;color:#D63031"></i> Logout</a>
</div>
<div class="col-md-10 p-3 p-md-4">
  <div class="topbar d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
    <div><h4 class="fw-bold mb-0">Header / Footer Settings ⚙️</h4></div>
    <a href="/admin/dashboard" class="btn btn-light" style="border-radius:11px;border:1px solid #FDECF3"><i class="fa-solid fa-arrow-left me-2"></i> Back</a>
  </div>
  @if(session('success'))<div class="alert alert-success" style="border-radius:12px">{{ session('success') }}</div>@endif
  @if($errors->any())<div class="alert alert-danger" style="border-radius:12px">@foreach($errors->all() as $e) {{ $e }}<br> @endforeach</div>@endif
  <div class="card p-4">
    <form method="POST" action="/admin/settings" enctype="multipart/form-data">
      @csrf

      {{-- 1. HEADER LOGO --}}
      <div class="section-title">1. Header Logo </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label class="fw-bold mb-1">Header Logo</label>
          <div class="logo-box mb-2"><img src="{{ asset($settings->logo ?? 'images/logo1.jpeg') }}" onerror="this.src='{{ asset('images/logo1.jpeg') }}'"><div style="font-size:12px;color:#636E72" class="mt-1">Current Header Logo</div></div>
          <input type="file" name="logo" class="form-control" accept="image/*" onchange="previewLogo(this,'preview1')">
          <img id="preview1" style="height:60px;margin-top:8px;display:none;border:1px solid #FDECF3;border-radius:8px;padding:4px">
          <small class="text-muted">JPG / PNG - Best size: 220 x 70</small>
        </div>
        <div class="col-md-6 mb-3">
          <label class="fw-bold mb-1">Mobile / Sticky Logo</label>
          <div class="logo-box mb-2"><img src="{{ asset($settings->logo2 ?? 'images/logo5.jpg') }}" onerror="this.src='{{ asset('images/logo5.jpg') }}'"><div style="font-size:12px;color:#636E72" class="mt-1">Current Mobile / Sticky Logo</div></div>
          <input type="file" name="logo2" class="form-control" accept="image/*" onchange="previewLogo(this,'preview2')">
          <img id="preview2" style="height:60px;margin-top:8px;display:none;border:1px solid #FDECF3;border-radius:8px;padding:4px">
          <small class="text-muted">JPG / PNG - Best size: 220 x 70</small>
        </div>
        <div class="col-md-12 mb-3"><label class="fw-bold mb-1">Logo Alt Text</label><input type="text" name="logo_alt" value="{{ $settings->logo_alt ?? 'Women & Child Care' }}" class="form-control"></div>
      </div>

      {{-- 2. MENU --}}
      <div class="section-title">2. Header Menu</div>
      <div class="row">
        <div class="col-md-3 mb-3"><label class="fw-bold mb-1">Menu 1</label><input type="text" name="menu1" value="{{ $settings->menu1 ?? 'Home' }}" class="form-control"></div>
        <div class="col-md-3 mb-3"><label class="fw-bold mb-1">Menu 2</label><input type="text" name="menu2" value="{{ $settings->menu2 ?? 'About' }}" class="form-control"></div>
        <div class="col-md-3 mb-3"><label class="fw-bold mb-1">Menu 3</label><input type="text" name="menu3" value="{{ $settings->menu3 ?? 'Doctors' }}" class="form-control"></div>
        <div class="col-md-3 mb-3"><label class="fw-bold mb-1">Menu 4</label><input type="text" name="menu4" value="{{ $settings->menu4 ?? 'Contact' }}" class="form-control"></div>
      </div>

      {{-- 3. CONTACT --}}
      <div class="section-title">3. Contact Details - </div>
      <div class="row">
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Phone Number</label><input type="text" name="phone" value="{{ $settings->phone ?? '+91-90 15 59 8903' }}" class="form-control"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Email Address</label><input type="text" name="email" value="{{ $settings->email ?? 'info@womenandchildcare.com' }}" class="form-control"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Address</label><input type="text" name="address" value="{{ $settings->address ?? 'H.No-211, Sector-31, Gurgaon, Haryana India' }}" class="form-control"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Timing</label><input type="text" name="timing" value="{{ $settings->timing ?? 'Mon - Sat 8:00 - 6:30, Sunday - CLOSED' }}" class="form-control"></div>
      </div>

      {{-- 4. HEADER SOCIAL ICONS --}}
      <div class="section-title">4. Header Social Icons </div>
      <div class="row">
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1"><i class="fa-brands fa-twitter me-1"></i> Twitter Link (Header)</label><input type="text" name="twitter" value="{{ $settings->twitter ?? '' }}" class="form-control" placeholder="https://twitter.com/..."></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1"><i class="fa-brands fa-facebook-f me-1"></i> Facebook Link (Header)</label><input type="text" name="facebook" value="{{ $settings->facebook ?? '' }}" class="form-control" placeholder="https://facebook.com/..."></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1"><i class="fa-brands fa-youtube me-1"></i> Youtube Link (Header)</label><input type="text" name="youtube" value="{{ $settings->youtube ?? '' }}" class="form-control" placeholder="https://youtube.com/..."></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1"><i class="fa-brands fa-linkedin-in me-1"></i> Linkedin Link (Header)</label><input type="text" name="linkedin" value="{{ $settings->linkedin ?? '' }}" class="form-control" placeholder="https://linkedin.com/..."></div>
      </div>

      {{-- 5. FOOTER --}}
      <div class="section-title">5. Footer - Logo, About, Quick Link, Icons, Contact, Copyright </div>
      <div class="row">
        <div class="col-md-12 mb-3">
          <label class="fw-bold mb-1">Footer Logo - Upload</label>
          <div class="logo-box dark mb-2"><img src="{{ asset($settings->logo3 ?? $settings->logo ?? 'images/logo1.jpeg') }}" onerror="this.src='{{ asset('images/logo1.jpeg') }}'"><div style="font-size:12px;color:#fff" class="mt-1">Current Footer Logo </div></div>
          <input type="file" name="logo3" class="form-control" accept="image/*" onchange="previewLogo(this,'preview3')">
          <img id="preview3" style="height:60px;margin-top:8px;display:none;border:1px solid #FDECF3;border-radius:8px;padding:4px;background:#2D3436">
          <small class="text-muted">JPG / PNG - Best size: 220 x 70</small>
        </div>
        <div class="col-md-12 mb-3"><label class="fw-bold mb-1">Footer About - Left Side </label><textarea name="footer_about" rows="3" class="form-control">{{ $settings->footer_about ?? 'Complete, safe and caring treatment for mother and child — from pregnancy to delivery and childhood, all under one roof.' }}</textarea></div>

        <div class="col-md-12"><div class="sub-title">Footer Social Icons </div></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1"><i class="fa-brands fa-twitter me-1"></i> Twitter Link (Footer)</label><input type="text" name="footer_twitter" value="{{ $settings->footer_twitter ?? $settings->twitter ?? '' }}" class="form-control" placeholder="https://twitter.com/..."></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1"><i class="fa-brands fa-facebook-f me-1"></i> Facebook Link (Footer)</label><input type="text" name="footer_facebook" value="{{ $settings->footer_facebook ?? $settings->facebook ?? '' }}" class="form-control" placeholder="https://facebook.com/..."></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1"><i class="fa-brands fa-pinterest me-1"></i> Pinterest Link (Footer)</label><input type="text" name="pinterest" value="{{ $settings->pinterest ?? '' }}" class="form-control" placeholder="https://pinterest.com/..."></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1"><i class="fa-brands fa-instagram me-1"></i> Instagram Link (Footer)</label><input type="text" name="instagram" value="{{ $settings->instagram ?? '' }}" class="form-control" placeholder="https://instagram.com/..."></div>

        <div class="col-md-12"><div class="sub-title">Footer Quick Links </div></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Quick Link 1 - Naam</label><input type="text" name="quick_link1_title" value="{{ $settings->quick_link1_title ?? 'Pregnancy Care' }}" class="form-control"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Quick Link 1 - Link (URL)</label><input type="text" name="quick_link1_url" value="{{ $settings->quick_link1_url ?? '/pregnancy-care' }}" class="form-control" placeholder="/pregnancy-care"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Quick Link 2 - Naam</label><input type="text" name="quick_link2_title" value="{{ $settings->quick_link2_title ?? 'Safe Delivery' }}" class="form-control"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Quick Link 2 - Link (URL)</label><input type="text" name="quick_link2_url" value="{{ $settings->quick_link2_url ?? '/normal-delivery' }}" class="form-control" placeholder="/normal-delivery"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Quick Link 3 - Naam</label><input type="text" name="quick_link3_title" value="{{ $settings->quick_link3_title ?? 'Child Vaccination' }}" class="form-control"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Quick Link 3 - Link (URL)</label><input type="text" name="quick_link3_url" value="{{ $settings->quick_link3_url ?? '/child-vaccination' }}" class="form-control" placeholder="/child-vaccination"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Quick Link 4 - Naam</label><input type="text" name="quick_link4_title" value="{{ $settings->quick_link4_title ?? 'General Pediatrics' }}" class="form-control"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Quick Link 4 - Link (URL)</label><input type="text" name="quick_link4_url" value="{{ $settings->quick_link4_url ?? '/general-pediatrics' }}" class="form-control" placeholder="/general-pediatrics"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Quick Link 5 - Naam</label><input type="text" name="quick_link5_title" value="{{ $settings->quick_link5_title ?? "Women's Health" }}" class="form-control"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Quick Link 5 - Link (URL)</label><input type="text" name="quick_link5_url" value="{{ $settings->quick_link5_url ?? '/womens-health' }}" class="form-control" placeholder="/womens-health"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Quick Link 6 - Naam</label><input type="text" name="quick_link6_title" value="{{ $settings->quick_link6_title ?? 'Newborn Care' }}" class="form-control"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Quick Link 6 - Link (URL)</label><input type="text" name="quick_link6_url" value="{{ $settings->quick_link6_url ?? '/newborn-care' }}" class="form-control" placeholder="/newborn-care"></div>

        <div class="col-md-12"><div class="sub-title">Footer Contact Box - Email, Address, Phone</div></div>
        <div class="col-md-12 mb-3"><label class="fw-bold mb-1">Footer Contact Short Text</label><input type="text" name="footer_contact_text" value="{{ $settings->footer_contact_text ?? 'Visit us for mother and child care, or call us to book your appointment today.' }}" class="form-control"></div>
        <div class="col-md-12 mb-3"><label class="fw-bold mb-1">Footer Email</label><input type="text" name="footer_email" value="{{ $settings->footer_email ?? $settings->email ?? 'info@womenandchildcare.com' }}" class="form-control" placeholder="info@womenandchildcare.com"></div>
        <div class="col-md-12 mb-3"><label class="fw-bold mb-1">Footer Address</label><input type="text" name="footer_address" value="{{ $settings->footer_address ?? $settings->address ?? 'H.No-211, Sector-31, Gurgaon, Haryana India' }}" class="form-control" placeholder="H.No-211, Sector-31, Gurgaon..."></div>
        <div class="col-md-12 mb-3"><label class="fw-bold mb-1">Footer Phone Number</label><input type="text" name="footer_phone" value="{{ $settings->footer_phone ?? $settings->phone ?? '+91-90 15 59 8903' }}" class="form-control" placeholder="+91-90 15 59 8903"></div>

        <div class="col-md-12"><div class="sub-title">Footer About Us Box + Copyright</div></div>
        <div class="col-md-12 mb-3"><label class="fw-bold mb-1">Footer About 2 - Right Side (About Us Box)</label><textarea name="footer_about_2" rows="3" class="form-control">{{ $settings->footer_about_2 ?? 'We provide trusted care for every mother and child with personal attention, safety and love.' }}</textarea></div>
        <div class="col-md-12 mb-3"><label class="fw-bold mb-1">Copyright Text</label><input type="text" name="copyright" value="{{ $settings->copyright ?? '© Copyright 2026 by womenandchildcare.com' }}" class="form-control"></div>
      </div>

      <button type="submit" class="btn-pink"><i class="fa-solid fa-floppy-disk me-2"></i> Save Header / Footer</button>
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
function previewLogo(input, id){
  if(input.files && input.files[0]){
    let reader = new FileReader();
    reader.onload = function(e){
      let img = document.getElementById(id);
      img.src = e.target.result;
      img.style.display = 'block';
    }
    reader.readAsDataURL(input.files[0]);
  }
}
</script>
</body>
</html>