<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\ContactMessage;
use App\Models\Page;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\ServicePageController;
use App\Models\ServicePage;

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

// Doctor Details - 3 Doctors, 3 Alag-Alag File
Route::get('/doctor/devendra-agarwal', function () {
    $page = Page::where('slug', 'doctor')->first();
    $doctor = (object)[
        'name' => $page->team1_name,
        'designation' => $page->team1_role,
        'image' => $page->team1_image,
        'qualification' => $page->team1_qualification,
        'experience' => $page->team1_experience,
        'specialization' => $page->team1_specialization,
        'phone' => $page->team1_phone,
        'email' => $page->team1_email,
        'address' => $page->team1_address,
        'timing' => $page->team1_timing,
        'about' => $page->team1_about,
        'tag' => $page->doctor_tag,
        'short_bio' => $page->team1_about,
        'education' => $page->team1_qualification,
        'expertise' => $page->team1_specialization,
    ];
    return view('devendra-agarwal', compact('doctor', 'page'));
});
Route::get('/doctor/anubha-gupta', function () {
    $page = Page::where('slug', 'doctor')->first();
    $doctor = (object)[
        'name' => $page->team2_name,
        'designation' => $page->team2_role,
        'image' => $page->team2_image,
        'qualification' => $page->team2_qualification,
        'experience' => $page->team2_experience,
        'specialization' => $page->team2_specialization,
        'phone' => $page->team2_phone,
        'email' => $page->team2_email,
        'address' => $page->team2_address,
        'timing' => $page->team2_timing,
        'about' => $page->team2_about,
        'tag' => $page->doctor_tag,
        'short_bio' => $page->team2_about,
        'education' => $page->team2_qualification,
        'expertise' => $page->team2_specialization,
    ];
    return view('anubha-gupta', compact('doctor', 'page'));
});
Route::get('/doctor/anjali-gupta', function () {
    $page = Page::where('slug', 'doctor')->first();
    $doctor = (object)[
        'name' => $page->team3_name,
        'designation' => $page->team3_role,
        'image' => $page->team3_image,
        'qualification' => $page->team3_qualification,
        'experience' => $page->team3_experience,
        'specialization' => $page->team3_specialization,
        'phone' => $page->team3_phone,
        'email' => $page->team3_email,
        'address' => $page->team3_address,
        'timing' => $page->team3_timing,
        'about' => $page->team3_about,
        'tag' => $page->doctor_tag,
        'short_bio' => $page->team3_about,
        'education' => $page->team3_qualification,
        'expertise' => $page->team3_specialization,
    ];
    return view('anjali-gupta', compact('doctor', 'page'));
});

Route::get('/contact', function () {
    $page = Page::where('slug', 'contact')->first();
    return view('contact', compact('page'));
});
Route::get('/appointment', function () {
    $page = Page::where('slug', 'home')->first();
    return view('appointment', compact('page'));
});

// --- 8 SERVICE PAGES - FIXED! Ab ServicePage se data aayega ---
Route::get('/child-growth', function () {
    $page = ServicePage::forPage('child-growth');
    return view('child-growth', compact('page'));
});
Route::get('/child-vaccination', function () {
    $page = ServicePage::forPage('child-vaccination');
    return view('child-vaccination', compact('page'));
});
Route::get('/general-pediatrics', function () {
    $page = ServicePage::forPage('general-pediatrics');
    return view('general-pediatrics', compact('page'));
});
Route::get('/high-risk-pregnancy', function () {
    $page = ServicePage::forPage('high-risk-pregnancy');
    return view('high-risk-pregnancy', compact('page'));
});
Route::get('/newborn-care', function () {
    $page = ServicePage::forPage('newborn-care');
    return view('newborn-care', compact('page'));
});
Route::get('/normal-delivery', function () {
    $page = ServicePage::forPage('normal-delivery');
    return view('normal-delivery', compact('page'));
});
Route::get('/womens-health', function () {
    $page = ServicePage::forPage('womens-health');
    return view('womens-health', compact('page'));
});
Route::get('/pregnancy-care', function () {
    $page = ServicePage::forPage('pregnancy-care');
    return view('pregnancy-care', compact('page'));
});

// --- Forms Save ---
Route::post('/contact', function (Request $request) {
    $request->validate(['name'=>'required','message'=>'required']);
    ContactMessage::create($request->only(['name','phone','email','subject','message']));
    return back()->with('success', 'Thank you! Your message has been sent. We will call you back soon.');
});

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
Route::get('/admin/pages/{slug}', [App\Http\Controllers\Admin\PageController::class, 'edit'])->name('admin.pages.edit');
Route::match(['POST', 'PUT'], '/admin/pages/{slug}', [App\Http\Controllers\Admin\PageController::class, 'update'])->name('admin.pages.update');

// --- Admin Services - Yahi se Edit hoga - UPAR wale /{slug} ko DELETE kar diya ---
Route::get('/admin/services', [ServicePageController::class,'index'])->name('admin.services');
Route::post('/admin/services/{slug}', [ServicePageController::class,'update'])->name('admin.services.update');

// NOTE: Neeche wala Route::get('/{slug}') DELETE kar diya hai - wahi problem kar raha tha!