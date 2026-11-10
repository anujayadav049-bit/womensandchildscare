<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard - Women & Child Care</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">
<style>
:root{
  --pink:#E84393; --pink-dark:#D6307A; --pink-light:#FDECF3; --pink-soft:#FFF5F8;
  --green:#00B894; --green-dark:#00997A; --green-light:#DFF7F0; --green-soft:#E8FFF8;
  --bg:#FFF9FB; --card:#FFFFFF; --border:#FDECF3; --text:#2D3436; --muted:#636E72; --purple:#6C5CE7; --purple-light:#EDEBFF;
}
*{ -webkit-font-smoothing:antialiased; }
body{background:var(--bg);font-family:'Inter',sans-serif;color:var(--text);font-size:14px}
h1,h2,h3,h4,h5{font-family:'Poppins',sans-serif}
.sidebar{background:#fff;min-height:100vh;padding:28px 18px;position:sticky;top:0;border-right:1px solid #FDECF3}
.sidebar .logo{font-family:'Poppins',sans-serif;font-weight:800;font-size:20px;line-height:1.15;letter-spacing:-.3px}
.sidebar .logo span{color:var(--pink)}
.sidebar .logo small{font-family:'Inter',sans-serif;font-size:10px;font-weight:700;letter-spacing:1.2px;color:var(--muted)}
.sidebar .menu-label{font-size:11px;font-weight:700;letter-spacing:1px;color:#B2BEC3;margin:18px 0 8px 10px}
.sidebar .nav-link{color:#636E72;border-radius:12px;padding:12px 12px;margin-bottom:4px;font-weight:600;font-size:13.5px;cursor:pointer;border:0;background:transparent;width:100%;text-align:left;text-decoration:none;display:flex;align-items:center;gap:10px;transition:.2s}
.sidebar .nav-link i{width:32px;height:32px;border-radius:9px;background:#FFF0F5;color:var(--pink);display:flex;align-items:center;justify-content:center;font-size:14px;flex-shrink:0}
.sidebar .nav-link:hover{background:var(--pink-soft);color:var(--pink-dark)}
.sidebar .nav-link.active{background:var(--pink);color:#fff;box-shadow:0 8px 20px rgba(232,67,147,.35)}
.sidebar .nav-link.active i{background:rgba(255,255,255,.25);color:#fff}
.sidebar .count-badge{background:var(--pink-light);color:var(--pink-dark);font-size:11px;padding:4px 9px;border-radius:20px;font-weight:700;margin-left:auto}
.sidebar .nav-link.active .count-badge{background:#fff;color:var(--pink)}
.topbar{background:#fff;border:1px solid #FDECF3;border-radius:16px;padding:16px 20px;box-shadow:0 2px 12px rgba(232,67,147,.05)}
.topbar h4{font-size:20px;letter-spacing:-.3px}
.stat-card{background:#fff;border:1px solid #FDECF3;border-radius:18px;padding:20px;box-shadow:0 2px 12px rgba(0,0,0,.03);cursor:pointer;transition:.2s;position:relative;overflow:hidden}
.stat-card:before{content:'';position:absolute;left:0;top:0;bottom:0;width:4px;background:var(--pink)}
.stat-card.green:before{background:var(--green)}
.stat-card.purple:before{background:var(--purple)}
.stat-card:hover{transform:translateY(-3px);box-shadow:0 12px 28px rgba(232,67,147,.10)}
.stat-card h2{font-size:32px;letter-spacing:-.5px}
.stat-icon{width:52px;height:52px;border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:20px}
.card{border:1px solid #FDECF3;border-radius:18px;box-shadow:0 2px 12px rgba(0,0,0,.03);overflow:hidden;background:#fff}
.card-header{background:#fff!important;border-bottom:1px solid #FDECF3;padding:18px 20px}
.table th{background:#FFF5F8;color:#636E72;font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.8px;white-space:nowrap;padding:14px 14px;border:0}
.table td{font-size:13.5px;vertical-align:middle;padding:14px;border-color:#FFF0F3}
.avatar{width:38px;height:38px;border-radius:50%;background:var(--pink-light);color:var(--pink-dark);display:flex;align-items:center;justify-content:center;font-weight:800;font-size:14px;flex-shrink:0}
.avatar-green{background:var(--green-light);color:var(--green-dark)}
.badge-doc{background:var(--purple-light);color:var(--purple);font-weight:600;padding:5px 11px;border-radius:20px;font-size:12px}
.badge-time{background:var(--green-light);color:var(--green-dark);font-weight:600;padding:5px 11px;border-radius:20px;font-size:12px}
.btn-view{background:var(--pink);color:#fff;border:0;padding:7px 13px;border-radius:9px;font-weight:600;font-size:12.5px}
.btn-view:hover{background:var(--pink-dark);color:#fff}
.btn-view-green{background:var(--green);color:#fff;border:0;padding:7px 13px;border-radius:9px;font-weight:600;font-size:12.5px}
.btn-view-green:hover{background:var(--green-dark);color:#fff}
.btn-wa{background:#25D366;color:#fff;border:0;padding:7px 11px;border-radius:9px;text-decoration:none;display:inline-block}
.btn-del{background:#FFF1F1;color:#D63031;border:0;padding:7px 11px;border-radius:9px}
.btn-del:hover{background:#FFE3E3}
.btn-pink{background:var(--pink);color:#fff;border:0;padding:9px 16px;border-radius:10px;font-weight:600;font-size:13px}
.search-box{border:1px solid #FDCEDF;border-radius:11px;padding:9px 13px;font-size:13px;background:#FFF9FB}
.search-box:focus{border-color:var(--pink);box-shadow:0 0 0 4px #FDECF3;outline:none;background:#fff}
.section{display:none}
.section.show{display:block;animation:fade .25s ease}
@keyframes fade{from{opacity:0;transform:translateY(6px)}to{opacity:1;transform:translateY(0)}}
.detail-card{background:#fff;border:1px solid #FDECF3;border-radius:18px;padding:26px;box-shadow:0 2px 14px rgba(0,0,0,.03)}
.detail-row{display:flex;justify-content:space-between;gap:16px;padding:12px 0;border-bottom:1px dashed #FDECF3;font-size:14px}
.detail-row b{color:#636E72;font-weight:600}
.detail-label{font-size:11px;font-weight:700;letter-spacing:.8px;color:#B2BEC3;text-transform:uppercase;margin-bottom:6px}
.profile-head{background:linear-gradient(135deg,#E84393 0%,#FD79A8 100%);border-radius:16px;padding:20px;color:#fff;display:flex;align-items:center;gap:16px}
.profile-head.green{background:linear-gradient(135deg,#00B894 0%,#55EFC4 100%)}
.profile-head .p-avatar{width:56px;height:56px;border-radius:50%;background:rgba(255,255,255,.25);display:flex;align-items:center;justify-content:center;font-size:22px;font-weight:800;flex-shrink:0}
@media(max-width:768px){.sidebar{min-height:auto;position:static}}
</style>
</head>
<body>
<div class="container-fluid"><div class="row">

<!-- LEFT SIDEBAR -->
<div class="col-md-2 sidebar">
  <div class="logo">Women & <span>Child Care</span><br><small>GURUGRAM • ADMIN PANEL</small></div>
  <div class="menu-label">MAIN MENU</div>
  <button onclick="showSection('dashboard',this)" class="nav-link active"><i class="fa-solid fa-border-all"></i> Dashboard</button>
  <button onclick="showSection('appointments',this)" class="nav-link"><i class="fa-solid fa-calendar-check"></i> Appointments <span class="count-badge">{{ $appointments->count() }}</span></button>
  <button onclick="showSection('messages',this)" class="nav-link"><i class="fa-solid fa-envelope"></i> Messages <span class="count-badge">{{ $messages->count() }}</span></button>
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
    <div><h4 class="fw-bold mb-0">Good Morning, Doctor 👋</h4><p class="text-muted mb-0" style="font-size:13px" id="pageSubtitle">Here is what is happening today at your clinic.</p></div>
    <div class="d-flex align-items-center gap-2">
      <span class="badge p-2 px-3" style="background:var(--green-light);color:var(--green-dark);font-size:12px"><span style="width:7px;height:7px;background:var(--green);border-radius:50%;display:inline-block;margin-right:6px"></span> System Live</span>
      <span class="badge p-2 px-3 bg-light text-dark" style="font-size:12px">{{ now()->format('d M Y, h:i A') }}</span>
    </div>
  </div>

  <!-- DASHBOARD -->
  <div id="section-dashboard" class="section show">
    <div class="row g-3 mb-4">
      <div class="col-md-4"><div class="stat-card d-flex justify-content-between align-items-center" onclick="showSection('appointments')"><div><p class="text-muted mb-1" style="font-size:12px;font-weight:600;letter-spacing:.5px">TOTAL APPOINTMENTS</p><h2>{{ $appointments->count() }}</h2><small style="color:var(--pink);font-weight:700">View All →</small></div><div class="stat-icon" style="background:var(--pink-light);color:var(--pink)"><i class="fa-solid fa-calendar-check"></i></div></div></div>
      <div class="col-md-4"><div class="stat-card green d-flex justify-content-between align-items-center" onclick="showSection('messages')"><div><p class="text-muted mb-1" style="font-size:12px;font-weight:600;letter-spacing:.5px">TOTAL MESSAGES</p><h2>{{ $messages->count() }}</h2><small style="color:var(--green);font-weight:700">View All →</small></div><div class="stat-icon" style="background:var(--green-light);color:var(--green)"><i class="fa-solid fa-envelope"></i></div></div></div>
      <div class="col-md-4"><div class="stat-card purple d-flex justify-content-between align-items-center"><div><p class="text-muted mb-1" style="font-size:12px;font-weight:600;letter-spacing:.5px">TODAY'S APPOINTMENTS</p><h2>{{ $appointments->where('created_at','>=',now()->startOfDay())->count() }}</h2><small class="text-muted">Received today</small></div><div class="stat-icon" style="background:var(--purple-light);color:var(--purple)"><i class="fa-solid fa-clock"></i></div></div></div>
    </div>
    <div class="card"><div class="card-header d-flex justify-content-between align-items-center"><h5 class="fw-bold mb-0" style="font-size:16px">Recent Appointments</h5><button class="btn-pink btn-sm" onclick="showSection('appointments')">View All</button></div>
      <div class="table-responsive"><table class="table mb-0"><thead><tr><th>Patient</th><th>Phone</th><th>Doctor</th><th>Date & Time</th><th>Status</th></tr></thead><tbody>
      @forelse($appointments->take(5) as $a)<tr><td><div class="d-flex align-items-center gap-2"><div class="avatar">{{ substr($a->name,0,1) }}</div><b>{{ $a->name }}</b></div></td><td>{{ $a->phone }}</td><td>{{ $a->doctor }}</td><td>{{ $a->date ?? '-' }} • {{ $a->time ?? '-' }}</td><td><span class="badge-time">New</span></td></tr>@empty<tr><td colspan="5" class="text-center py-4 text-muted">No appointments yet</td></tr>@endforelse
      </tbody></table></div>
    </div>
  </div>

  <!-- APPOINTMENTS LIST -->
  <div id="section-appointments" class="section">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-2">
        <h5 class="fw-bold mb-0" style="font-size:16px">Appointment Requests <span class="badge" style="background:var(--pink-light);color:var(--pink-dark)">{{ $appointments->count() }}</span></h5>
        <input type="text" id="searchAppt" class="search-box" style="width:250px" placeholder="Search by name, phone, doctor...">
      </div>
      <div class="table-responsive"><table class="table table-hover mb-0">
        <thead><tr><th>Patient</th><th>Contact</th><th>Doctor / Service</th><th>Date & Time</th><th>Message</th><th>Received</th><th>Action</th></tr></thead>
        <tbody id="apptBody">
        @forelse($appointments as $i => $a)<tr>
          <td><div class="d-flex align-items-center gap-2"><div class="avatar">{{ substr($a->name,0,1) }}</div><div><b>{{ $a->name }}</b><br><small class="text-muted">Age: {{ $a->age ?? '-' }}</small></div></div></td>
          <td>{{ $a->phone }}<br><small class="text-muted">{{ $a->email ?? '-' }}</small></td>
          <td><span class="badge-doc">{{ $a->doctor }}</span><br><small class="text-muted">{{ $a->service ?? '-' }}</small></td>
          <td><b>{{ $a->date ?? '-' }}</b><br><span class="badge-time">{{ $a->time ?? '-' }}</span></td>
          <td style="max-width:190px" class="text-muted">{{ Str::limit($a->message ?? '-', 45) }}</td>
          <td><small class="text-muted">{{ $a->created_at?->format('d M, h:i A') }}</small></td>
          <td style="white-space:nowrap">
            <button class="btn-view btn-sm" onclick="viewAppointment(this)" data-id="{{ $a->id }}" data-name="{{ $a->name }}" data-age="{{ $a->age ?? '-' }}" data-phone="{{ $a->phone }}" data-email="{{ $a->email ?? '-' }}" data-doctor="{{ $a->doctor }}" data-service="{{ $a->service ?? '-' }}" data-date="{{ $a->date ?? '-' }}" data-time="{{ $a->time ?? '-' }}" data-message="{{ $a->message ?? 'No message' }}" data-created="{{ $a->created_at?->format('d M Y, h:i A') }}" data-delete="/admin/delete-appointment/{{ $a->id }}"><i class="fa-solid fa-eye me-1"></i> View</button>
            <form action="/admin/delete-appointment/{{ $a->id }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this appointment?')">@csrf<button class="btn-del btn-sm" title="Delete"><i class="fa-solid fa-trash"></i></button></form>
          </td>
        </tr>@empty<tr><td colspan="7" class="text-center py-4 text-muted">No appointments received yet.</td></tr>@endforelse
        </tbody></table></div>
    </div>
  </div>

  <!-- MESSAGES LIST -->
  <div id="section-messages" class="section">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-2">
        <h5 class="fw-bold mb-0" style="font-size:16px">Contact Messages <span class="badge" style="background:var(--green-light);color:var(--green-dark)">{{ $messages->count() }}</span></h5>
        <input type="text" id="searchMsg" class="search-box" style="width:250px" placeholder="Search by name, subject...">
      </div>
      <div class="table-responsive"><table class="table table-hover mb-0">
        <thead><tr><th>Name</th><th>Contact</th><th>Subject</th><th>Message</th><th>Received</th><th>Action</th></tr></thead>
        <tbody id="msgBody">
        @forelse($messages as $i => $m)<tr>
          <td><div class="d-flex align-items-center gap-2"><div class="avatar avatar-green">{{ substr($m->name,0,1) }}</div><b>{{ $m->name }}</b></div></td>
          <td>{{ $m->phone ?? '-' }}<br><small class="text-muted">{{ $m->email ?? '-' }}</small></td>
          <td><b>{{ $m->subject ?? '-' }}</b></td>
          <td style="max-width:240px" class="text-muted">{{ Str::limit($m->message, 45) }}</td>
          <td><small class="text-muted">{{ $m->created_at?->format('d M, h:i A') }}</small></td>
          <td style="white-space:nowrap">
            <button class="btn-view-green btn-sm" onclick="viewMessage(this)" data-id="{{ $m->id }}" data-name="{{ $m->name }}" data-phone="{{ $m->phone ?? '-' }}" data-email="{{ $m->email ?? '-' }}" data-subject="{{ $m->subject ?? '-' }}" data-message="{{ $m->message }}" data-created="{{ $m->created_at?->format('d M Y, h:i A') }}" data-delete="/admin/delete-message/{{ $m->id }}"><i class="fa-solid fa-eye me-1"></i> View</button>
            <form action="/admin/delete-message/{{ $m->id }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this message?')">@csrf<button class="btn-del btn-sm"><i class="fa-solid fa-trash"></i></button></form>
          </td>
        </tr>@empty<tr><td colspan="6" class="text-center py-4 text-muted">No messages received yet.</td></tr>@endforelse
        </tbody></table></div>
    </div>
  </div>

  <!-- APPOINTMENT DETAIL - RIGHT SIDE -->
  <div id="section-appt-detail" class="section">
    <button class="btn btn-light mb-3" style="border-radius:11px;border:1px solid #FDECF3" onclick="showSection('appointments')"><i class="fa-solid fa-arrow-left me-2"></i> Back to Appointments</button>
    <div class="detail-card">
      <div class="profile-head mb-4"><div class="p-avatar" id="dApptAvatar">P</div><div><h5 class="fw-bold mb-0" id="dApptName">Patient Name</h5><small style="opacity:.9" id="dApptMeta">Doctor • Date</small></div><span class="badge bg-white text-dark ms-auto" id="dApptId">#1</span></div>
      <div class="row"><div class="col-md-6"><div class="detail-label">Contact Details</div><div class="detail-row"><b>Phone</b><span id="dApptPhone">-</span></div><div class="detail-row"><b>Email</b><span id="dApptEmail">-</span></div><div class="detail-row"><b>Age</b><span id="dApptAge">-</span></div></div>
      <div class="col-md-6"><div class="detail-label">Appointment Details</div><div class="detail-row"><b>Doctor</b><span id="dApptDoctor">-</span></div><div class="detail-row"><b>Service</b><span id="dApptService">-</span></div><div class="detail-row"><b>Date & Time</b><span id="dApptDateTime">-</span></div></div></div>
      <div class="mt-4"><div class="detail-label">Full Message</div><div class="p-3" style="background:var(--pink-soft);border:1px solid #FDECF3;border-radius:12px;line-height:1.7" id="dApptMessage">-</div></div>
      <p class="text-muted small mt-3 mb-0" id="dApptCreated">-</p>
      <div class="d-flex gap-2 mt-4 flex-wrap">
        <a href="#" id="dApptWhatsApp" target="_blank" class="btn btn-success" style="border-radius:11px;background:#25D366;border:0"><i class="fa-brands fa-whatsapp me-1"></i> WhatsApp Patient</a>
        <a href="#" id="dApptCall" class="btn btn-dark" style="border-radius:11px"><i class="fa-solid fa-phone me-1"></i> Call Patient</a>
        <form id="dApptDeleteForm" method="POST" onsubmit="return confirm('Are you sure you want to delete this appointment?')">@csrf<button class="btn btn-outline-danger" style="border-radius:11px"><i class="fa-solid fa-trash me-1"></i> Delete</button></form>
      </div>
    </div>
  </div>

  <!-- MESSAGE DETAIL - RIGHT SIDE -->
  <div id="section-msg-detail" class="section">
    <button class="btn btn-light mb-3" style="border-radius:11px;border:1px solid #FDECF3" onclick="showSection('messages')"><i class="fa-solid fa-arrow-left me-2"></i> Back to Messages</button>
    <div class="detail-card">
      <div class="profile-head green mb-4"><div class="p-avatar" id="dMsgAvatar">M</div><div><h5 class="fw-bold mb-0" id="dMsgName">Name</h5><small style="opacity:.9" id="dMsgMeta">Subject</small></div><span class="badge bg-white text-dark ms-auto" id="dMsgId">#1</span></div>
      <div class="row"><div class="col-md-6"><div class="detail-label">Contact Details</div><div class="detail-row"><b>Phone</b><span id="dMsgPhone">-</span></div><div class="detail-row"><b>Email</b><span id="dMsgEmail">-</span></div></div>
      <div class="col-md-6"><div class="detail-label">Message Info</div><div class="detail-row"><b>Subject</b><span id="dMsgSubject">-</span></div><div class="detail-row"><b>Received</b><span id="dMsgCreated2">-</span></div></div></div>
      <div class="mt-4"><div class="detail-label">Full Message</div><div class="p-3" style="background:var(--green-soft);border:1px solid #DFF7F0;border-radius:12px;line-height:1.7" id="dMsgMessage">-</div></div>
      <p class="text-muted small mt-3 mb-0" id="dMsgCreated">-</p>
      <div class="d-flex gap-2 mt-4 flex-wrap">
        <a href="#" id="dMsgCall" class="btn btn-dark" style="border-radius:11px"><i class="fa-solid fa-phone me-1"></i> Call</a>
        <form id="dMsgDeleteForm" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?')">@csrf<button class="btn btn-outline-danger" style="border-radius:11px"><i class="fa-solid fa-trash me-1"></i> Delete</button></form>
      </div>
    </div>
  </div>

</div>
</div></div>

<script>
function showSection(name, btn){
  document.querySelectorAll('.section').forEach(s=>s.classList.remove('show'));
  document.getElementById('section-'+name).classList.add('show');
  document.querySelectorAll('.sidebar .nav-link').forEach(l=>l.classList.remove('active'));
  if(btn) btn.classList.add('active');
  else { let map={'dashboard':0,'appointments':1,'messages':2}; document.querySelectorAll('.sidebar .nav-link')[map[name]]?.classList.add('active'); }
  let titles={'dashboard':'Here is what is happening today at your clinic.','appointments':'All appointment requests - Click View to see full details.','messages':'All contact messages - Click View to see full details.','appt-detail':'Appointment full details - Right side view.','msg-detail':'Message full details - Right side view.'};
  document.getElementById('pageSubtitle').innerText = titles[name] || titles.dashboard;
  window.scrollTo({top:0,behavior:'smooth'});
}
function viewAppointment(btn){
  let d = btn.dataset;
  document.getElementById('dApptAvatar').innerText = d.name.charAt(0).toUpperCase();
  document.getElementById('dApptName').innerText = d.name;
  document.getElementById('dApptMeta').innerText = d.doctor + ' • ' + d.date + ' • ' + d.time;
  document.getElementById('dApptId').innerText = '#'+d.id;
  document.getElementById('dApptPhone').innerText = d.phone;
  document.getElementById('dApptEmail').innerText = d.email;
  document.getElementById('dApptAge').innerText = d.age;
  document.getElementById('dApptDoctor').innerText = d.doctor;
  document.getElementById('dApptService').innerText = d.service;
  document.getElementById('dApptDateTime').innerText = d.date + ' • ' + d.time;
  document.getElementById('dApptMessage').innerText = d.message;
  document.getElementById('dApptCreated').innerText = 'Received: '+d.created;
  document.getElementById('dApptWhatsApp').href = 'https://wa.me/91'+d.phone+'?text='+encodeURIComponent('Hello '+d.name+', This is Women & Child Care. We would like to confirm your appointment.');
  document.getElementById('dApptCall').href = 'tel:'+d.phone;
  document.getElementById('dApptDeleteForm').action = d.delete;
  showSection('appt-detail');
}
function viewMessage(btn){
  let d = btn.dataset;
  document.getElementById('dMsgAvatar').innerText = d.name.charAt(0).toUpperCase();
  document.getElementById('dMsgName').innerText = d.name;
  document.getElementById('dMsgMeta').innerText = d.subject;
  document.getElementById('dMsgId').innerText = '#'+d.id;
  document.getElementById('dMsgPhone').innerText = d.phone;
  document.getElementById('dMsgEmail').innerText = d.email;
  document.getElementById('dMsgSubject').innerText = d.subject;
  document.getElementById('dMsgMessage').innerText = d.message;
  document.getElementById('dMsgCreated').innerText = 'Received: '+d.created;
  document.getElementById('dMsgCreated2').innerText = d.created;
  document.getElementById('dMsgCall').href = 'tel:'+d.phone;
  document.getElementById('dMsgDeleteForm').action = d.delete;
  showSection('msg-detail');
}
document.getElementById('searchAppt')?.addEventListener('input', function(){ let q=this.value.toLowerCase(); document.querySelectorAll('#apptBody tr').forEach(tr=>{ tr.style.display = tr.innerText.toLowerCase().includes(q) ? '' : 'none'; }); });
document.getElementById('searchMsg')?.addEventListener('input', function(){ let q=this.value.toLowerCase(); document.querySelectorAll('#msgBody tr').forEach(tr=>{ tr.style.display = tr.innerText.toLowerCase().includes(q) ? '' : 'none'; }); });
</script>
</body>
</html>