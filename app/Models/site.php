<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class site extends Model implements TranslatableContract
{

    use HasFactory,Translatable;
    public $translatedAttributes = ['about', 'vision','mission','last_updates','awards'];
    protected $fillable = ['keys'];
}
