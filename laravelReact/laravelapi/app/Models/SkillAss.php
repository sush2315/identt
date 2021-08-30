<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillAss extends Model
{
    use HasFactory;
    protected $table = 'skillass';
    protected $fillable=[
        'tag',
        'comment',
        
    ];

}
