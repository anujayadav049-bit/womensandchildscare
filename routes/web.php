<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\ContactMessage;
use App\Models\Page;
use App\Models\Doctor;
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

// Doctor Details - Naam same, 3 alag route
Route::get('/doctor/devendra-agarwal', function () {
    $doctor = Doctor::where('slug', 'devendra-agarwal')->firstOrFail();
    return view('devendra-agarwal', compact('doctor'));
});
Route::get('/doctor/anubha-gupta', function () {
    $doctor = Doctor::where('slug', 'anubha-gupta')->firstOrFail();
    return view('anubha-gupta', compact('doctor'));
});
Route::get('/doctor/anjali-gupta', function () {
    $doctor = Doctor::where('slug', 'anjali-gupta')->firstOrFail();
    return view('anjali-gupta', compact('doctor'));
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

// Admin Pages - SIRF YE WALA, neeche wala duplicate hata diya hai
Route::get('/admin/pages/{slug}', [App\Http\Controllers\Admin\PageController::class, 'edit'])->name('admin.pages.edit');
Route::match(['POST', 'PUT'], '/admin/pages/{slug}', [App\Http\Controllers\Admin\PageController::class, 'update'])->name('admin.pages.update');

