<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function edit($slug)
    {
        $page = Page::firstOrCreate(
            ['slug' => $slug],
            ['title' => ucwords(str_replace('-', ' ', $slug))]
        );
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, $slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();

        $data = $request->only([
            'title','content','content2',
            'hero_trusted','hero_title','hero_text','hero_phone','hero_timing','hero_timing2','hero_address','hero_address2',
            'about_banner_title','about_banner_breadcrumb',
            'about_subtitle','about_title','about_text','about_feature1','about_feature2','about_point1','about_point2','about_point3',
            'services_subtitle','services_title',
            'service1_title','service1_text','service2_title','service2_text','service3_title','service3_text','service4_title','service4_text',
            'service5_title','service5_text','service6_title','service6_text','service7_title','service7_text','service8_title','service8_text',
            'wcu_subtitle','wcu_title','wcu_text','wcu_info_title',
            'wcu_acc1_title','wcu_acc1_text','wcu_acc2_title','wcu_acc2_text','wcu_acc3_title','wcu_acc3_text',
            'wcu_list1','wcu_list2','wcu_list3','wcu_list4','wcu_list5','wcu_list6',
            'funfact1_number','funfact1_suffix','funfact1_text',
            'funfact2_number','funfact2_suffix','funfact2_text',
            'funfact3_number','funfact3_suffix','funfact3_text',
            'funfact4_number','funfact4_suffix','funfact4_text',
            'working_subtitle','working_title','working_text1','working_text2','working_btn_text','working_success_title',
            'working_bar1_title','working_bar1_percent','working_bar2_title','working_bar2_percent',
            'working_bar3_title','working_bar3_percent','working_bar4_title','working_bar4_percent',
            'testi_subtitle','testi_title','testi_rating','testi_rating_text',
            'testi1_text','testi1_name','testi1_role',
            'testi2_text','testi2_name','testi2_role',
            'testi3_text','testi3_name','testi3_role',
            'team_subtitle','team_title',
            'team1_name','team1_role','team1_qualification','team1_experience','team1_specialization','team1_phone','team1_email','team1_address','team1_timing','team1_about',
            'team2_name','team2_role','team2_qualification','team2_experience','team2_specialization','team2_phone','team2_email','team2_address','team2_timing','team2_about',
            'team3_name','team3_role','team3_qualification','team3_experience','team3_specialization','team3_phone','team3_email','team3_address','team3_timing','team3_about',
            'contact_left_title','contact_email_label','contact_email','contact_subtitle','contact_title','contact_btn_text',
            'blog_subtitle','blog_title',
            'blog1_date','blog1_title','blog1_excerpt',
            'blog2_date','blog2_title','blog2_excerpt',
            'blog3_date','blog3_title','blog3_excerpt',
            'cta1_title','cta1_text','cta2_title','cta2_text1','cta2_text2','cta3_title','cta3_text1','cta3_text2',
            'doctor_banner_title','doctor_banner_breadcrumb',
            'contact_banner_title','contact_banner_breadcrumb',
            'contact_email','contact_phone','contact_address','contact_timing','contact_map_embed',
            'contact_title','contact_subtitle','contact_btn_text',
            'doctor_name','doctor_designation','doctor_tag','doctor_short_bio',
            'doctor_experience','doctor_education','doctor_phone','doctor_email',
            'doctor_address','doctor_about','doctor_expertise',
            // ===== APPOINTMENT - NAYA ADDED =====
            'appt_title','appt_subtitle','appt_heading','appt_text',
            'appt_doctor1_name','appt_doctor1_spec','appt_doctor1_time',
            'appt_doctor2_name','appt_doctor2_spec','appt_doctor2_time',
            'appt_address_title','appt_address',
            'appt_phone_title','appt_phone',
            'appt_email_title','appt_email',
            'appt_form_title','appt_form_subtitle','appt_whatsapp_btn','appt_email_btn','appt_form_note',
            // ===== PREGNANCY CARE =====
            'preg_title','preg_help_title','preg_help_subtitle','preg_help_phone','preg_book_btn',
            'preg_overview_title','preg_overview_p1','preg_overview_p2',
            'preg_support_title','preg_support_text','preg_quote',
            'preg_feature1_title','preg_feature1_text',
            'preg_feature2_title','preg_feature2_text',
            'preg_faq_title','preg_faq_subtitle',
            'preg_faq1_q','preg_faq1_a','preg_faq2_q','preg_faq2_a','preg_faq3_q','preg_faq3_a',
            // ===== NORMAL DELIVERY =====
            'delivery_title','delivery_help_title','delivery_help_subtitle','delivery_help_phone','delivery_book_btn',
            'delivery_overview_title','delivery_overview_p1','delivery_overview_p2',
            'delivery_support_title','delivery_support_text','delivery_quote',
            'delivery_feature1_title','delivery_feature1_text',
            'delivery_feature2_title','delivery_feature2_text',
            'delivery_faq_title','delivery_faq_subtitle',
            'delivery_faq1_q','delivery_faq1_a','delivery_faq2_q','delivery_faq2_a','delivery_faq3_q','delivery_faq3_a',
            // ===== HIGH-RISK PREGNANCY =====
            'highrisk_title','highrisk_help_title','highrisk_help_subtitle','highrisk_help_phone','highrisk_book_btn',
            'highrisk_overview_title','highrisk_overview_p1','highrisk_overview_p2',
            'highrisk_support_title','highrisk_support_text','highrisk_quote',
            'highrisk_feature1_title','highrisk_feature1_text',
            'highrisk_feature2_title','highrisk_feature2_text',
            'highrisk_faq_title','highrisk_faq_subtitle',
            'highrisk_faq1_q','highrisk_faq1_a','highrisk_faq2_q','highrisk_faq2_a','highrisk_faq3_q','highrisk_faq3_a',
            // ===== WOMENS HEALTH =====
            'women_title','women_help_title','women_help_subtitle','women_help_phone','women_book_btn',
            'women_overview_title','women_overview_p1','women_overview_p2',
            'women_support_title','women_support_text','women_quote',
            'women_feature1_title','women_feature1_text',
            'women_feature2_title','women_feature2_text',
            'women_faq_title','women_faq_subtitle',
            'women_faq1_q','women_faq1_a','women_faq2_q','women_faq2_a','women_faq3_q','women_faq3_a',
            // ===== NEWBORN CARE =====
            'newborn_title','newborn_help_title','newborn_help_subtitle','newborn_help_phone','newborn_book_btn',
            'newborn_overview_title','newborn_overview_p1','newborn_overview_p2',
            'newborn_support_title','newborn_support_text','newborn_quote',
            'newborn_feature1_title','newborn_feature1_text',
            'newborn_feature2_title','newborn_feature2_text',
            'newborn_faq_title','newborn_faq_subtitle',
            'newborn_faq1_q','newborn_faq1_a','newborn_faq2_q','newborn_faq2_a','newborn_faq3_q','newborn_faq3_a',
            // ===== CHILD VACCINATION =====
            'vaccine_title','vaccine_help_title','vaccine_help_subtitle','vaccine_help_phone','vaccine_book_btn',
            'vaccine_overview_title','vaccine_overview_p1','vaccine_overview_p2',
            'vaccine_support_title','vaccine_support_text','vaccine_quote',
            'vaccine_feature1_title','vaccine_feature1_text',
            'vaccine_feature2_title','vaccine_feature2_text',
            'vaccine_faq_title','vaccine_faq_subtitle',
            'vaccine_faq1_q','vaccine_faq1_a','vaccine_faq2_q','vaccine_faq2_a','vaccine_faq3_q','vaccine_faq3_a',
            // ===== CHILD GROWTH =====
            'growth_title','growth_help_title','growth_help_subtitle','growth_help_phone','growth_book_btn',
            'growth_overview_title','growth_overview_p1','growth_overview_p2',
            'growth_support_title','growth_support_text','growth_quote',
            'growth_feature1_title','growth_feature1_text',
            'growth_feature2_title','growth_feature2_text',
            'growth_faq_title','growth_faq_subtitle',
            'growth_faq1_q','growth_faq1_a','growth_faq2_q','growth_faq2_a','growth_faq3_q','growth_faq3_a',
            // ===== GENERAL PEDIATRICS =====
            'pedia_title','pedia_help_title','pedia_help_subtitle','pedia_help_phone','pedia_book_btn',
            'pedia_overview_title','pedia_overview_p1','pedia_overview_p2',
            'pedia_support_title','pedia_support_text','pedia_quote',
            'pedia_feature1_title','pedia_feature1_text',
            'pedia_feature2_title','pedia_feature2_text',
            'pedia_faq_title','pedia_faq_subtitle',
            'pedia_faq1_q','pedia_faq1_a','pedia_faq2_q','pedia_faq2_a','pedia_faq3_q','pedia_faq3_a',
        ]);

        // --- Helper: Image Upload ---
        $upload = function($field, $folder, $prefix) use ($request, &$data) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $name = $prefix.'-'.time().'.'.$file->getClientOriginalExtension();
                $destination = public_path($folder);
                if (!is_dir($destination)) mkdir($destination, 0777, true);
                copy($file->getRealPath(), $destination.'/'.$name);
                $data[$field] = $folder.'/'.$name;
            }
        };

        $upload('hero_image', 'images/banner', 'hero');
        $upload('about_banner_image', 'images/resource', 'about-banner');
        $upload('about_image1', 'images/resource', 'about_image1');
        $upload('about_image2', 'images/resource', 'about_image2');
        $upload('wcu_image', 'images/resource', 'wcu');
        $upload('working_image', 'images/resource', 'working');
        $upload('testi_side_image', 'images/resource', 'testi_side_image');
        $upload('testi1_image', 'images/resource', 'testi1_image');
        $upload('testi2_image', 'images/resource', 'testi2_image');
        $upload('testi3_image', 'images/resource', 'testi3_image');
        $upload('team1_image', 'images/resource', 'team1_image');
        $upload('team2_image', 'images/resource', 'team2_image');
        $upload('team3_image', 'images/resource', 'team3_image');
        $upload('contact_left_image', 'images/resource', 'contact_left_image');
        $upload('contact_bg_image', 'images/resource', 'contact_bg_image');
        $upload('blog1_image', 'images/resource', 'blog1_image');
        $upload('blog2_image', 'images/resource', 'blog2_image');
        $upload('blog3_image', 'images/resource', 'blog3_image');
        $upload('cta_bg_image', 'images/background', 'cta_bg_image');
        $upload('doctor_banner_image', 'images/resource', 'doctor-banner');
        $upload('contact_banner_image', 'images/resource', 'contact-banner');
        $upload('doctor_image', 'images/resource', 'doctor-detail');

        // ===== APPOINTMENT IMAGE - NAYA =====
        $upload('appt_banner', 'images/resource', 'appt_banner');

        // ===== PREGNANCY CARE IMAGES =====
        $upload('preg_banner', 'images/resource', 'preg_banner');
        $upload('preg_main_image', 'images/resource', 'preg_main_image');
        $upload('preg_feature1_image', 'images/resource', 'preg_feature1_image');
        $upload('preg_feature2_image', 'images/resource', 'preg_feature2_image');
        // ===== NORMAL DELIVERY IMAGES =====
        $upload('delivery_banner', 'images/resource', 'delivery_banner');
        $upload('delivery_main_image', 'images/resource', 'delivery_main_image');
        $upload('delivery_feature1_image', 'images/resource', 'delivery_feature1_image');
        $upload('delivery_feature2_image', 'images/resource', 'delivery_feature2_image');
        // ===== HIGH-RISK IMAGES =====
        $upload('highrisk_banner', 'images/resource', 'highrisk_banner');
        $upload('highrisk_main_image', 'images/resource', 'highrisk_main_image');
        $upload('highrisk_feature1_image', 'images/resource', 'highrisk_feature1_image');
        $upload('highrisk_feature2_image', 'images/resource', 'highrisk_feature2_image');
        // ===== WOMENS HEALTH IMAGES =====
        $upload('women_banner', 'images/resource', 'women_banner');
        $upload('women_main_image', 'images/resource', 'women_main_image');
        $upload('women_feature1_image', 'images/resource', 'women_feature1_image');
        $upload('women_feature2_image', 'images/resource', 'women_feature2_image');
        // ===== NEWBORN IMAGES =====
        $upload('newborn_banner', 'images/resource', 'newborn_banner');
        $upload('newborn_main_image', 'images/resource', 'newborn_main_image');
        $upload('newborn_feature1_image', 'images/resource', 'newborn_feature1_image');
        $upload('newborn_feature2_image', 'images/resource', 'newborn_feature2_image');
        // ===== VACCINE IMAGES =====
        $upload('vaccine_banner', 'images/resource', 'vaccine_banner');
        $upload('vaccine_main_image', 'images/resource', 'vaccine_main_image');
        $upload('vaccine_feature1_image', 'images/resource', 'vaccine_feature1_image');
        $upload('vaccine_feature2_image', 'images/resource', 'vaccine_feature2_image');
        // ===== GROWTH IMAGES =====
        $upload('growth_banner', 'images/resource', 'growth_banner');
        $upload('growth_main_image', 'images/resource', 'growth_main_image');
        $upload('growth_feature1_image', 'images/resource', 'growth_feature1_image');
        $upload('growth_feature2_image', 'images/resource', 'growth_feature2_image');
        // ===== PEDIA IMAGES =====
        $upload('pedia_banner', 'images/resource', 'pedia_banner');
        $upload('pedia_main_image', 'images/resource', 'pedia_main_image');
        $upload('pedia_feature1_image', 'images/resource', 'pedia_feature1_image');
        $upload('pedia_feature2_image', 'images/resource', 'pedia_feature2_image');

        $page->update($data);
        return back()->with('success', 'Page Updated!');
    }
}