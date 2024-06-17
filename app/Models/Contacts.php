<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\ContactMail;

class Contacts extends Model
{
    use HasFactory;
    protected $table = 'contact';
    public $fillable = ['name', 'email', 'mobile', 'requirement', 'massage'];
    public static function boot() {  
        parent::boot();
        static::created(function ($item) {
            $adminEmail = "mahendra@codeyiizen.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });

    }
}
