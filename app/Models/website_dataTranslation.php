<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\website_data;

class website_dataTranslation extends Model
{
    use HasFactory;


    public $timestamps = false;
    protected $fillable = ['site_name', 'address'];
}
