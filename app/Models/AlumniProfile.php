<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumniProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'firstname',
        'lastname',
        'gender',
        'graduation_year',
        'major',
        'bio',
        'profile_picture',
        'website_portfolio_url',
        'linkedin_url',
        'socialmedia_link',
        'phonenumber'
    ];
    //accessor for displaying full name
public function getFullNameAttribute()
{
    return $this->firstname . ' ' . $this->lastname;
}

    //relationships
    public function user(){
        return $this->belongsTo(User::class);
    }
}
