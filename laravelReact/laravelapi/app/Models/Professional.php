<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    use HasFactory;
    protected $table = 'professional';
    protected $fillable=[
        'CompanyName',
        'url',
        'CurrentDesignation',
        'Annual',
        'Notice',
        'Majorrole',
        'Skills',
        'Industry',
        'Functional',
        'Designation',
        'PreviousDesignation',
        'PreviousCompany',
        'Performance',
    
    ];
}
