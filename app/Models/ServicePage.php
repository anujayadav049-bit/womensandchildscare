<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ServicePage extends Model
{
    protected $fillable = ['slug','data'];
    protected $casts = ['data' => 'array'];

    // Frontend blade me $page->women_title jaisa chale isliye
    public static function forPage($slug){
        $row = self::where('slug',$slug)->first();
        return (object) ($row?->data ?? []);
    }
}