<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'firstname',
        'lastname',
        'company_name',
        'industry',
        'company_address',
        'website_url',
        'logo',
        'cover_photo',
        'about',
        'contact_number',
        'contact_email',
        'socialmedia_link',
        'testimonials/reviews',
        'projects/casestudies'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
