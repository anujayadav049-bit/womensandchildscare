<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Home Page - Women & Child Care</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">
<style>
:root{ --pink:#E84393; --pink-dark:#D6307A; --pink-light:#FDECF3; --pink-soft:#FFF5F8; --bg:#FFF9FB; --text:#2D3436; --muted:#636E72; }
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
.btn-pink{background:var(--pink);color:#fff;border:0;padding:11px 25px;border-radius:10px;font-weight:600}
.btn-pink:hover{background:var(--pink-dark);color:#fff}
.dropdown-sub{border-left:3px solid var(--pink-light);margin-left:14px;padding-left:6px}
.section-title{background:linear-gradient(135deg,#E84393,#FD79A8);color:#fff;padding:10px 16px;border-radius:12px;font-weight:700;margin:22px 0 14px;font-size:14px}
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
    <a href="/admin/pages/home" class="nav-link active"><i class="fa-solid fa-house"></i> Home Page</a>
    <a href="/admin/pages/about" class="nav-link"><i class="fa-solid fa-circle-info"></i> About Page</a>
    <a href="/admin/pages/doctor" class="nav-link"><i class="fa-solid fa-user-doctor"></i> Doctor Page</a>
    <a href="/admin/pages/services" class="nav-link"><i class="fa-solid fa-stethoscope"></i> Services Page</a>
    <a href="/admin/pages/contact" class="nav-link"><i class="fa-solid fa-phone"></i> Contact Page</a>
    <a href="/admin/settings" class="nav-link"><i class="fa-solid fa-gear"></i> Header / Footer</a>
  </div>
  <div class="menu-label">GENERAL</div>
  <a href="/" target="_blank" class="nav-link"><i class="fa-solid fa-globe"></i> View Website</a>
  <a href="/admin/logout" class="nav-link" style="color:#D63031"><i class="fa-solid fa-right-from-bracket" style="background:#FFF1F1;color:#D63031"></i> Logout</a>
</div>

<div class="col-md-10 p-3 p-md-4">
  <div class="topbar d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
    <div><h4 class="fw-bold mb-0">Edit Home Page 🏠</h4><p class="text-muted mb-0" style="font-size:13px">Banner, About, Why Choose Us - sab yaha se badlo.</p></div>
    <div class="d-flex gap-2">
      <a href="/" target="_blank" class="btn btn-light" style="border-radius:11px;border:1px solid #FDECF3">View Live Page</a>
      <a href="/admin/dashboard" class="btn btn-light" style="border-radius:11px;border:1px solid #FDECF3"><i class="fa-solid fa-arrow-left me-2"></i> Back</a>
    </div>
  </div>

  @if(session('success'))<div class="alert alert-success" style="border-radius:12px">{{ session('success') }}</div>@endif

  <div class="card p-4">
    <form method="POST" action="/admin/pages/{{ $page->slug ?? 'home' }}">
      @csrf @method('PUT')

      <div class="section-title">1. Banner Section - Upar wala bada part</div>
      <div class="row">
        <div class="col-md-12 mb-3"><label class="fw-bold mb-1">Banner Small Text (Trusted by...)</label><input type="text" name="banner_small" value="{{ $page->banner_small ?? 'Trusted by 50,000+ patients' }}" class="form-control"></div>
        <div class="col-md-12 mb-3"><label class="fw-bold mb-1">Banner Title (Bada Heading)</label><input type="text" name="title" value="{{ $page->title ?? 'Care for Every Woman Care for Every Child' }}" class="form-control"></div>
        <div class="col-md-12 mb-3"><label class="fw-bold mb-1">Banner Description</label><textarea name="banner_text" rows="3" class="form-control">{{ $page->banner_text ?? 'From pregnancy to motherhood, and from newborn to growing child — complete, gentle and expert care under one roof, at every stage of life.' }}</textarea></div>
        <div class="col-md-4 mb-3"><label class="fw-bold mb-1">Phone (Banner me)</label><input type="text" name="phone" value="{{ $page->phone ?? '+91-90 15 59 8903' }}" class="form-control"></div>
        <div class="col-md-4 mb-3"><label class="fw-bold mb-1">Timing</label><input type="text" name="timing" value="{{ $page->timing ?? 'Mon - Fri: 8:00AM - 7:00PM' }}" class="form-control"></div>
        <div class="col-md-4 mb-3"><label class="fw-bold mb-1">Location</label><input type="text" name="address" value="{{ $page->address ?? 'H.No-211, Sector-31, Gurgaon, Haryana India' }}" class="form-control"></div>
      </div>

      <div class="section-title">2. About Section - Who We Are</div>
      <div class="row">
        <div class="col-md-12 mb-3"><label class="fw-bold mb-1">About Heading</label><input type="text" name="about_title" value="{{ $page->about_title ?? 'Care That Grows With Your Family' }}" class="form-control"></div>
        <div class="col-md-12 mb-3"><label class="fw-bold mb-1">About Text</label><textarea name="about_text" rows="4" class="form-control">{{ $page->about_text ?? 'Women and Child Care Clinic me hum sirf ilaaj nahi karte, hum har maa aur har bacche ke saath ek lamba rishta banate hain.' }}</textarea></div>
      </div>

      <div class="section-title">3. Why Choose Us</div>
      <div class="row">
        <div class="col-md-12 mb-3"><label class="fw-bold mb-1">Why Choose Us Heading</label><input type="text" name="why_title" value="{{ $page->why_title ?? 'Why Families Trust Us?' }}" class="form-control"></div>
        <div class="col-md-12 mb-3"><label class="fw-bold mb-1">Why Choose Us Text</label><textarea name="why_text" rows="3" class="form-control">{{ $page->why_text ?? 'From pregnancy to childhood, we provide complete, safe and caring treatment for mother and child — all under one roof, with personal attention.' }}</textarea></div>
      </div>

      <div class="section-title">4. Contact / CTA Section</div>
      <div class="row">
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">Contact Email</label><input type="text" name="email" value="{{ $page->email ?? 'info@womenandchildcare.com' }}" class="form-control"></div>
        <div class="col-md-6 mb-3"><label class="fw-bold mb-1">CTA Heading</label><input type="text" name="cta_title" value="{{ $page->cta_title ?? 'Mother & Child Questions Answered.' }}" class="form-control"></div>
        <div class="col-md-12 mb-3"><label class="fw-bold mb-1">Full Content (SEO / Extra)</label><textarea name="content" rows="5" class="form-control">{{ $page->content ?? '' }}</textarea></div>
      </div>

      <button type="submit" class="btn-pink"><i class="fa-solid fa-floppy-disk me-2"></i> Save Home Page</button>
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