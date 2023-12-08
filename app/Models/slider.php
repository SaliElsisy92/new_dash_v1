<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\sliderTranslation;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class slider extends Model implements TranslatableContract
{
    use HasFactory,Translatable;

    public $translatedAttributes = ['title', 'desc'];
    protected $fillable = ['file'];




}
