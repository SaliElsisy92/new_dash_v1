<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siteTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['about', 'vision','mission','last_updates','awards'];
}
