<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\AboutsubTitle;
use  App\Models\AboutTranslation;

class About extends Model
{
    use HasFactory;
    use Translatable;
    public $translatedAttributes = ['title','content'];
    protected $fillable = ['image'];


        public function sub_title()
        {
            return $this->hasMany(AboutsubTitle::class,'parent_id');
        }

        public function titleLangAll() {
            return $this->hasMany(AboutTranslation::class, 'about_id');
        }
}