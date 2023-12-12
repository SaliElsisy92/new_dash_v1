<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use  App\Models\Solution;
use App\Models\Solution_subTitleTranslation;


class Solution_subTitle extends Model
{


    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['content','sub_title'];
    protected $fillable = ['parent_id','image'];

        public function title()
        {
            return $this->belongsTo(Solution::class);
        }

        public function subtitleLangAll() {
            return $this->hasMany(Solution_subTitleTranslation::class, 'solution_sub_title_id');
        }

       public function files() {
        	return $this->morphMany(\Dash\Models\FileManagerModel::class , 'file');
        }






}