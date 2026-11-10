<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['name','phone','email','doctor','service','age','date','time','message','is_read'];
}