<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\ServicePage;
use Illuminate\Http\Request;

class ServicePageController extends Controller
{
    // 8 Services + unka prefix - jo blade me use kiya tha
    public static $services = [
        'pregnancy-care' => ['label'=>'Pregnancy Care','prefix'=>'pregnancy'],
        'normal-delivery' => ['label'=>'Safe Delivery','prefix'=>'delivery'],
        'high-risk-pregnancy' => ['label'=>'High-Risk Pregnancy','prefix'=>'highrisk'],
        'womens-health' => ['label'=>"Women's Health",'prefix'=>'women'],
        'newborn-care' => ['label'=>'Newborn Care','prefix'=>'newborn'],
        'child-vaccination' => ['label'=>'Child Vaccination','prefix'=>'vaccine'],
        'child-growth' => ['label'=>'Child Growth','prefix'=>'growth'],
        'general-pediatrics' => ['label'=>'General Pediatrics','prefix'=>'pedia'],
    ];

    // Har service ke andar ye 27 fields honge
    public static function fields($p){
        return [
            'title'=>'Page Title','banner'=>'Banner Image','help_title'=>'Help Title',
            'help_subtitle'=>'Help Subtitle','help_phone'=>'Help Phone','book_btn'=>'Book Button Text',
            'main_image'=>'Main Image','overview_title'=>'Overview Title','overview_p1'=>'Overview Para 1',
            'overview_p2'=>'Overview Para 2','support_title'=>'Support Title','support_text'=>'Support Text',
            'quote'=>'Quote','feature1_image'=>'Feature 1 Image','feature1_title'=>'Feature 1 Title',
            'feature1_text'=>'Feature 1 Text','feature2_image'=>'Feature 2 Image','feature2_title'=>'Feature 2 Title',
            'feature2_text'=>'Feature 2 Text','faq_title'=>'FAQ Title','faq_subtitle'=>'FAQ Subtitle',
            'faq1_q'=>'FAQ 1 Question','faq1_a'=>'FAQ 1 Answer','faq2_q'=>'FAQ 2 Question',
            'faq2_a'=>'FAQ 2 Answer','faq3_q'=>'FAQ 3 Question','faq3_a'=>'FAQ 3 Answer',
        ];
    }

    public function index(){
        $services = self::$services;
        $pages = ServicePage::all()->keyBy('slug');
        return view('admin.services.index', compact('services','pages'));
    }

    public function update(Request $request, $slug){
        $prefix = self::$services[$slug]['prefix'];
        $old = ServicePage::where('slug',$slug)->first();
        $data = $old?->data ?? [];

        foreach(self::fields($prefix) as $key => $label){
            $field = $prefix.'_'.$key;
            // Image hai to upload karo
            if(str_contains($key,'image') || $key=='banner'){
                if($request->hasFile($field)){
                    $path = $request->file($field)->store('uploads/services','public');
                    $data[$field] = 'storage/'.$path;
                }
            } else {
                if($request->has($field)) $data[$field] = $request->input($field);
            }
        }
        ServicePage::updateOrCreate(['slug'=>$slug], ['data'=>$data]);
        return back()->with('success','Saved! - '.self::$services[$slug]['label']);
    }
}