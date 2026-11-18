<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $table = 'site_settings';

    protected $fillable = [
        'logo','logo2','logo3','logo_alt',
        'menu1','menu2','menu3','menu4',
        'phone','email','address','timing',
        'twitter','facebook','youtube','linkedin','pinterest','instagram',
        'footer_twitter','footer_facebook','footer_about','footer_about_2','footer_contact_text',
        'footer_email','footer_address','footer_phone','copyright',
        'quick_link1_title','quick_link1_url',
        'quick_link2_title','quick_link2_url',
        'quick_link3_title','quick_link3_url',
        'quick_link4_title','quick_link4_url',
        'quick_link5_title','quick_link5_url',
        'quick_link6_title','quick_link6_url',
    ];
}