<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\Managementsubtitle;
use App\Models\ManagementTranslation;

class Management extends Model
{
    use HasFactory;
    use Translatable;
    public $translatedAttributes = ['title','content'];
    protected $fillable = ['image'];


        public function sub_title()
        {
            return $this->hasMany(Managementsubtitle::class,'parent_id');
        }

        public function titleLangAll() {
            return $this->hasMany(ManagementTranslation::class, 'management_id');
        }
}