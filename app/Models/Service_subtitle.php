<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use  App\Models\Service;
use App\Models\Service_subTitleTranslation;

class Service_subtitle extends Model
{
    use HasFactory;
    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['content','sub_title'];
    protected $fillable = ['parent_id','image'];

        public function title()
        {
            return $this->belongsTo(Service::class);
        }

        public function subtitleLangAll() {
            return $this->hasMany(Service_subTitleTranslation::class, 'service_subtitle_id');
        }

        public function files() {
        	return $this->morphMany(\Dash\Models\FileManagerModel::class , 'file');
        }

}
