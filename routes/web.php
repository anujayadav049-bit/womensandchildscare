<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\ContactMessage;
use App\Models\Page;
use App\Http\Controllers\PageController;

// --- Public Pages ---
Route::get('/', function () {
    $page = Page::where('slug', 'home')->first();
    return view('home', compact('page'));
});

Route::get('/about', function () {
    $page = Page::where('slug', 'about')->first();
    return view('about', compact('page'));
});
Route::get('/doctor', function () {
    $page = Page::where('slug', 'doctor')->first();
    return view('doctor', compact('page'));
});

// Doctor Details - 3 Doctors, 1 hi file doctor-detail.blade.php se chalegi
// AB YE PAGE SE DYNAMIC HOGA - Doctor wali table ki zarurat nahi, koi nayi file nahi!
Route::get('/doctor/devendra-agarwal', function () {
    $page = Page::where('slug', 'doctor')->first();
    $doctor = (object)[
        'name' => $page->team1_name ?? $page->doctor_name,
        'designation' => $page->team1_role ?? $page->doctor_designation,
        'image' => $page->team1_image ?? $page->doctor_image,
        'tag' => $page->doctor_tag,
        'short_bio' => $page->doctor_short_bio,
        'experience' => $page->doctor_experience,
        'education' => $page->doctor_education,
        'phone' => $page->doctor_phone,
        'email' => $page->doctor_email,
        'address' => $page->doctor_address,
        'about' => $page->doctor_about,
        'expertise' => $page->doctor_expertise,
    ];
    return view('doctor-detail', compact('doctor', 'page'));
});
Route::get('/doctor/anubha-gupta', function () {
    $page = Page::where('slug', 'doctor')->first();
    $doctor = (object)[
        'name' => $page->team2_name,
        'designation' => $page->team2_role,
        'image' => $page->team2_image,
        'tag' => $page->doctor_tag,
        'short_bio' => $page->doctor_short_bio,
        'experience' => $page->doctor_experience,
        'education' => $page->doctor_education,
        'phone' => $page->doctor_phone,
        'email' => $page->doctor_email,
        'address' => $page->doctor_address,
        'about' => $page->doctor_about,
        'expertise' => $page->doctor_expertise,
    ];
    return view('doctor-detail', compact('doctor', 'page'));
});
Route::get('/doctor/anjali-gupta', function () {
    $page = Page::where('slug', 'doctor')->first();
    $doctor = (object)[
        'name' => $page->team3_name,
        'designation' => $page->team3_role,
        'image' => $page->team3_image,
        'tag' => $page->doctor_tag,
        'short_bio' => $page->doctor_short_bio,
        'experience' => $page->doctor_experience,
        'education' => $page->doctor_education,
        'phone' => $page->doctor_phone,
        'email' => $page->doctor_email,
        'address' => $page->doctor_address,
        'about' => $page->doctor_about,
        'expertise' => $page->doctor_expertise,
    ];
    return view('doctor-detail', compact('doctor', 'page'));
});

Route::get('/contact', function () {
    $page = Page::where('slug', 'contact')->first();
    return view('contact', compact('page'));
});
Route::get('/appointment', function () {
    $page = Page::where('slug', 'home')->first();
    return view('appointment', compact('page'));
});
Route::get('/child-growth', function () {
    $page = Page::where('slug', 'home')->first();
    return view('child-growth', compact('page'));
});
Route::get('/child-vaccination', function () {
    $page = Page::where('slug', 'home')->first();
    return view('child-vaccination', compact('page'));
});
Route::get('/general-pediatrics', function () {
    $page = Page::where('slug', 'home')->first();
    return view('general-pediatrics', compact('page'));
});
Route::get('/high-risk-pregnancy', function () {
    $page = Page::where('slug', 'home')->first();
    return view('high-risk-pregnancy', compact('page'));
});
Route::get('/newborn-care', function () {
    $page = Page::where('slug', 'home')->first();
    return view('newborn-care', compact('page'));
});
Route::get('/normal-delivery', function () {
    $page = Page::where('slug', 'home')->first();
    return view('normal-delivery', compact('page'));
});
Route::get('/womens-health', function () {
    $page = Page::where('slug', 'home')->first();
    return view('womens-health', compact('page'));
});
Route::get('/pregnancy-care', function () {
    $page = Page::where('slug', 'home')->first();
    return view('pregnancy-care', compact('page'));
});

// --- Forms Save ---
Route::post('/contact', function (Request $request) {
    $request->validate(['name'=>'required','message'=>'required']);
    ContactMessage::create($request->only(['name','phone','email','subject','message']));
    return back()->with('success', 'Thank you! Your message has been sent. We will call you back soon.');
});

// SIRF EK BAAR - Appointment wala, duplicate mat rakhna
Route::post('/appointment', function (Request $request) {
    $request->validate(['name'=>'required','phone'=>'required']);
    Appointment::create($request->only(['name','phone','email','doctor','service','age','date','time','message']));

    if ($request->submit_type == 'whatsapp') {
        $msg = "New Appointment Request\n\nName: {$request->name}\nPhone: {$request->phone}\nEmail: {$request->email}\nDoctor: {$request->doctor}\nService: {$request->service}\nAge: {$request->age}\nDate: {$request->date}\nTime: {$request->time}\nMessage: {$request->message}";
        return redirect()->away('https://wa.me/919015598903?text='.urlencode($msg));
    }
    if ($request->submit_type == 'email') {
        return redirect()->away('mailto:info@womenandchildcare.com?subject='.urlencode('Appointment Request - '.$request->name));
    }
    return back()->with('success', 'Thank you! Your appointment request has been received. We will call you to confirm.');
});

// --- Admin ---
Route::get('/admin/login', function () { return view('admin.login'); })->name('admin.login');
Route::post('/admin/login', function (Request $request) {
    if ($request->email === 'admin@womenandchildcare.com' && $request->password === 'admin123') {
        session(['is_admin' => true]);
        return redirect('/admin');
    }
    return back()->with('error', 'Wrong email or password');
});
Route::get('/admin/logout', function () { session()->forget('is_admin'); return redirect('/admin/login'); });

Route::post('/admin/delete-appointment/{id}', function ($id) {
    if (!session('is_admin')) return redirect('/admin/login');
    Appointment::find($id)?->delete();
    return back();
});
Route::post('/admin/delete-message/{id}', function ($id) {
    if (!session('is_admin')) return redirect('/admin/login');
    ContactMessage::find($id)?->delete();
    return back();
});
Route::get('/admin', function () {
    if (!session('is_admin')) return redirect('/admin/login');
    $appointments = Appointment::latest()->get();
    $messages = ContactMessage::latest()->get();
    return view('admin.dashboard', compact('appointments','messages'));
});

Route::get('/admin/settings', [App\Http\Controllers\Admin\SiteSettingController::class, 'edit'])->name('admin.settings.edit');
Route::post('/admin/settings', [App\Http\Controllers\Admin\SiteSettingController::class, 'update'])->name('admin.settings.update');

// Admin Pages - SIRF YE WALA, neeche wala duplicate DELETE kar diya hai
Route::get('/admin/pages/{slug}', [App\Http\Controllers\Admin\PageController::class, 'edit'])->name('admin.pages.edit');
Route::match(['POST', 'PUT'], '/admin/pages/{slug}', [App\Http\Controllers\Admin\PageController::class, 'update'])->name('admin.pages.update');

// DoctorController wali line HATA DI HAI - ab koi nayi file nahi chahiye!