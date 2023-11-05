<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use  App\Models\Management;
use App\Models\ManagementsubtitleTranslation;

class Managementsubtitle extends Model
{
    use HasFactory;
    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['content','sub_title'];
    protected $fillable = ['parent_id','image'];

        public function title()
        {
            return $this->belongsTo(Management::class);
        }

        public function subtitleLangAll() {
            return $this->hasMany(ManagementsubtitleTranslation::class, 'managementsubtitle_id');
        }
}