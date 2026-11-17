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
.sidebar .nav-link{color:#636E72;border-radius:12px;padding:12px;margin-bottom:4px;font-weight:600;font-size:13.5px;text-decoration:none;display:flex;align-items:center;gap:10px}
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
</style>
</head>
<body>
<div class="container-fluid"><div class="row">

<!-- LEFT SIDEBAR - SAME AS DASHBOARD -->
<div class="col-md-2 sidebar">
  <div class="logo">Women & <span>Child Care</span><br><small>GURUGRAM • ADMIN PANEL</small></div>
  <div class="menu-label">MAIN MENU</div>
  <a href="/admin/dashboard" class="nav-link"><i class="fa-solid fa-border-all"></i> Dashboard</a>

  <div class="menu-label">PAGES</div>
  <a href="/admin/pages/home" class="nav-link {{ $page->slug=='home' ? 'active' : '' }}"><i class="fa-solid fa-house"></i> Home Page</a>
  <a href="/admin/pages/about" class="nav-link {{ $page->slug=='about' ? 'active' : '' }}"><i class="fa-solid fa-circle-info"></i> About Page</a>
  <a href="/admin/pages/services" class="nav-link {{ $page->slug=='services' ? 'active' : '' }}"><i class="fa-solid fa-stethoscope"></i> Services Page</a>
  <a href="/admin/pages/contact" class="nav-link {{ $page->slug=='contact' ? 'active' : '' }}"><i class="fa-solid fa-phone"></i> Contact Page</a>
  <a href="/admin/settings" class="nav-link"><i class="fa-solid fa-gear"></i> Header / Footer</a>

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
    <div><h4 class="fw-bold mb-0">{{ $page->title }} Edit Karo ✏️</h4><p class="text-muted mb-0" style="font-size:13px">Yaha se badlo, Save dabao, website pe turant badal jayega.</p></div>
    <a href="/admin/dashboard" class="btn btn-light" style="border-radius:11px;border:1px solid #FDECF3"><i class="fa-solid fa-arrow-left me-2"></i> Back to Dashboard</a>
  </div>

  @if(session('success'))
    <div class="alert alert-success" style="border-radius:12px;background:#DFF7F0;border:1px solid #B8F0DD;color:#00997A">{{ session('success') }}</div>
  @endif

  <div class="card p-4">
    <form method="POST" action="{{ route('admin.pages.update', $page->slug) }}">
      @csrf
      <div class="mb-3">
        <label class="fw-bold mb-1">Page Title</label>
        <input type="text" name="title" value="{{ $page->title }}" class="form-control" placeholder="Jaise - About Us">
      </div>

      <div class="mb-3">
        <label class="fw-bold mb-1">Main Content</label>
        <textarea name="content" rows="8" class="form-control" placeholder="Is page ka main text yaha likho...">{{ $page->content }}</textarea>
      </div>

      <div class="mb-3">
        <label class="fw-bold mb-1">Second Content (Agar ho to)</label>
        <textarea name="content2" rows="5" class="form-control" placeholder="Aur extra text yaha...">{{ $page->content2 }}</textarea>
      </div>

      <button type="submit" class="btn-pink"><i class="fa-solid fa-floppy-disk me-2"></i> Save Page</button>
      <a href="/" target="_blank" class="btn btn-light ms-2" style="border-radius:10px;border:1px solid #FDECF3">View Website</a>
    </form>
  </div>
</div>

</div></div>
</body>
</html>