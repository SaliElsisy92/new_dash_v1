<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use  App\Models\ManPowerService;


class ManPowerService_subTitle extends Model
{
    use HasFactory;
    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['content','sub_title'];
    protected $fillable = ['parent_id','image'];

        public function title()
        {
            return $this->belongsTo(ManPowerService::class);
        }


        public function subtitleLangAll() {
            return $this->hasMany(ManPowerService_subTitleTranslation::class, 'man_power_service_sub_title_id');
        }
}