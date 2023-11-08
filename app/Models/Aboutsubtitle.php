<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use  App\Models\About;
use App\Models\AboutsubTitleTranslation;

class Aboutsubtitle extends Model
{
    use HasFactory;
    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['content','sub_title'];
    protected $fillable = ['parent_id','image'];

        public function title()
        {
            return $this->belongsTo(About::class);
        }

        public function subtitleLangAll() {
            return $this->hasMany(AboutsubTitleTranslation::class, 'aboutsubtitle_id');
        }
}