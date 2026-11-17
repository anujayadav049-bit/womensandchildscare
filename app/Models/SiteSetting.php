<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'phone',
        'email',
        'address',
        'timing',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'linkedin',
        'pinterest',
        'footer_about',
        'footer_about_2',
        'copyright',
    ];
}