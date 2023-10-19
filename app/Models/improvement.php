<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class improvement extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'id',
        'url',
        'name_ar',
        'name_en',
        'desc_ar',
        'desc_en',
        'keys_ar',
        'keys_en',
        'image',
    ];
}
