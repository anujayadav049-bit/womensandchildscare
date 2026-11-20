<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function edit($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, $slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();

        $data = $request->only([
            'title','content','content2',
            'hero_trusted','hero_title','hero_text','hero_phone','hero_timing','hero_timing2','hero_address','hero_address2',
            'about_subtitle','about_title','about_text','about_feature1','about_feature2','about_point1','about_point2','about_point3',
            'services_subtitle','services_title',
            'service1_title','service1_text','service2_title','service2_text','service3_title','service3_text','service4_title','service4_text',
            'service5_title','service5_text','service6_title','service6_text','service7_title','service7_text','service8_title','service8_text',
            // Why Choose Us
            'wcu_subtitle','wcu_title','wcu_text','wcu_info_title',
            'wcu_acc1_title','wcu_acc1_text','wcu_acc2_title','wcu_acc2_text','wcu_acc3_title','wcu_acc3_text',
            'wcu_list1','wcu_list2','wcu_list3','wcu_list4','wcu_list5','wcu_list6',
            // Funfact / Counter - NAYA ADDED
            'funfact1_number','funfact1_suffix','funfact1_text',
            'funfact2_number','funfact2_suffix','funfact2_text',
            'funfact3_number','funfact3_suffix','funfact3_text',
            'funfact4_number','funfact4_suffix','funfact4_text',

            // Working / Achievements - NAYA
'working_subtitle','working_title','working_text1','working_text2','working_btn_text','working_success_title',
'working_bar1_title','working_bar1_percent','working_bar2_title','working_bar2_percent',
'working_bar3_title','working_bar3_percent','working_bar4_title','working_bar4_percent',

// Testimonial - NAYA
'testi_subtitle','testi_title','testi_rating','testi_rating_text',
'testi1_text','testi1_name','testi1_role',
'testi2_text','testi2_name','testi2_role',
'testi3_text','testi3_name','testi3_role',

// Team - NAYA
'team_subtitle','team_title',
'team1_name','team1_role',
'team2_name','team2_role',
'team3_name','team3_role',

// Contact - NAYA
'contact_left_title','contact_email_label','contact_email','contact_subtitle','contact_title','contact_btn_text',

// Blog - NAYA
'blog_subtitle','blog_title',
'blog1_date','blog1_title','blog1_excerpt',
'blog2_date','blog2_title','blog2_excerpt',
'blog3_date','blog3_title','blog3_excerpt',

// CTA - NAYA
'cta1_title','cta1_text','cta2_title','cta2_text1','cta2_text2','cta3_title','cta3_text1','cta3_text2',
        ]);





        // Hero Image - purana wala
        if ($request->hasFile('hero_image')) {
            $file = $request->file('hero_image');
            $name = 'hero-'.time().'.'.$file->getClientOriginalExtension();
            $destination = public_path('images/banner');
            if (!is_dir($destination)) mkdir($destination, 0777, true);
            copy($file->getRealPath(), $destination.'/'.$name);
            $data['hero_image'] = 'images/banner/'.$name;
        }

        // About Images
        foreach(['about_image1','about_image2'] as $field){
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $name = $field.'-'.time().'.'.$file->getClientOriginalExtension();
                $destination = public_path('images/resource');
                if (!is_dir($destination)) mkdir($destination, 0777, true);
                copy($file->getRealPath(), $destination.'/'.$name);
                $data[$field] = 'images/resource/'.$name;
            }
        }

        // Why Choose Us Image
        if ($request->hasFile('wcu_image')) {
            $file = $request->file('wcu_image');
            $name = 'wcu-'.time().'.'.$file->getClientOriginalExtension();
            $destination = public_path('images/resource');
            if (!is_dir($destination)) mkdir($destination, 0777, true);
            copy($file->getRealPath(), $destination.'/'.$name);
            $data['wcu_image'] = 'images/resource/'.$name;
        }

        // Working Image - NAYA
if ($request->hasFile('working_image')) {
    $file = $request->file('working_image');
    $name = 'working-'.time().'.'.$file->getClientOriginalExtension();
    $destination = public_path('images/resource');
    if (!is_dir($destination)) mkdir($destination, 0777, true);
    copy($file->getRealPath(), $destination.'/'.$name);
    $data['working_image'] = 'images/resource/'.$name;
}


// Testimonial Images - NAYA
foreach(['testi_side_image','testi1_image','testi2_image','testi3_image'] as $field){
    if ($request->hasFile($field)) {
        $file = $request->file($field);
        $name = $field.'-'.time().'.'.$file->getClientOriginalExtension();
        $destination = public_path('images/resource');
        if (!is_dir($destination)) mkdir($destination, 0777, true);
        copy($file->getRealPath(), $destination.'/'.$name);
        $data[$field] = 'images/resource/'.$name;
    }
}


// Team Images - NAYA
foreach(['team1_image','team2_image','team3_image'] as $field){
    if ($request->hasFile($field)) {
        $file = $request->file($field);
        $name = $field.'-'.time().'.'.$file->getClientOriginalExtension();
        $destination = public_path('images/resource');
        if (!is_dir($destination)) mkdir($destination, 0777, true);
        copy($file->getRealPath(), $destination.'/'.$name);
        $data[$field] = 'images/resource/'.$name;
    }
}


// Contact Images - NAYA
foreach(['contact_left_image','contact_bg_image'] as $field){
    if ($request->hasFile($field)) {
        $file = $request->file($field);
        $name = $field.'-'.time().'.'.$file->getClientOriginalExtension();
        $destination = public_path('images/resource');
        if (!is_dir($destination)) mkdir($destination, 0777, true);
        copy($file->getRealPath(), $destination.'/'.$name);
        $data[$field] = 'images/resource/'.$name;
    }
}


// Blog Images - NAYA
foreach(['blog1_image','blog2_image','blog3_image'] as $field){
    if ($request->hasFile($field)) {
        $file = $request->file($field);
        $name = $field.'-'.time().'.'.$file->getClientOriginalExtension();
        $destination = public_path('images/resource');
        if (!is_dir($destination)) mkdir($destination, 0777, true);
        copy($file->getRealPath(), $destination.'/'.$name);
        $data[$field] = 'images/resource/'.$name;
    }
}


// CTA Image - NAYA
if ($request->hasFile('cta_bg_image')) {
    $file = $request->file('cta_bg_image');
    $name = 'cta_bg_image-'.time().'.'.$file->getClientOriginalExtension();
    $destination = public_path('images/background');
    if (!is_dir($destination)) mkdir($destination, 0777, true);
    copy($file->getRealPath(), $destination.'/'.$name);
    $data['cta_bg_image'] = 'images/background/'.$name;
}


        $page->update($data);
        return back()->with('success', 'Page Updated!');
    }
}