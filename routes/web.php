<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\ContactMessage;

// --- Public Pages ---
Route::get('/', function () { return view('home'); });
Route::get('/about', function () { return view('about'); });
Route::get('/doctor', function () { return view('doctor'); });
Route::get('/contact', function () { return view('contact'); });
Route::get('/appointment', function () { return view('appointment'); });
Route::get('/doctor/anubha-gupta', function () { return view('anubha-gupta'); });
Route::get('/doctor/devendra-agarwal', function () { return view('devendra-agarwal'); });
Route::get('/child-growth', function () { return view('child-growth'); });
Route::get('/child-vaccination', function () { return view('child-vaccination'); });
Route::get('/general-pediatrics', function () { return view('general-pediatrics'); });
Route::get('/high-risk-pregnancy', function () { return view('high-risk-pregnancy'); });
Route::get('/newborn-care', function () { return view('newborn-care'); });
Route::get('/normal-delivery', function () { return view('normal-delivery'); });
Route::get('/womens-health', function () { return view('womens-health'); });
Route::get('/pregnancy-care', function () { return view('pregnancy-care'); });

// --- Forms Save ---
Route::post('/contact', function (Request $request) {
    $request->validate(['name'=>'required','message'=>'required']);
    ContactMessage::create($request->only(['name','phone','email','message']));
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
Route::post('/contact', function (Request $request) {
    $request->validate(['name'=>'required','message'=>'required']);
    ContactMessage::create($request->only(['name','phone','email','subject','message']));
    return back()->with('success', 'Thank you! Your message has been sent. We will call you back soon.');
});