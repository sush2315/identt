<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    use HasFactory;
    protected $table = 'academic';
    protected $fillable=[
        'Firstname',
        'Lastname',
        'MiddleName',
        'Email',
        'Mobile',
        'Alternate',
        'PermanentAddress',
        'CurrentAddress',
        'State',
        'City',
        'Country',
        'Pincode',
    ];
}
