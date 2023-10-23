<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class setting extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'id',
        'key',
        'about_ar',
        'about_en',
        'vision_ar',
        'vision_en',
        'mission_ar',
        'mission_en',
        'last_updates_ar',
        'last_updates_en',
        'awards_ar',
        'awards_ar',
    ];
}
