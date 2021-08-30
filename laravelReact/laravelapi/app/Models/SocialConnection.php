<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialConnection extends Model
{
    use HasFactory;
    protected $table = 'socialconnection';
    protected $fillable=[
        'Facebook',
        'FacebookID',
        'LinkedinID',
        'Linkedinurl',
        'Blog',
        'Work',
        'Github',
        'Linkedin',
        'Other',
    
    ];
}
