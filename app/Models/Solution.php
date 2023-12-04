<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\Solution_subTitle;
use App\Models\SolutionTranslation;
use App\Models\Solution_subTitleTranslation;


class Solution extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['title','content'];
    protected $fillable = ['image'];


        public function sub_title()
        {
            return $this->hasMany(Solution_subTitle::class,'parent_id');
        }

        public function titleLangAll() {
            return $this->hasMany(SolutionTranslation::class, 'solution_id');
        }

        public function subtitles() {
            return $this->hasManyThrough(
                Solution_subTitleTranslation::class ,
                Solution_subTitle::class ,
                'parent_id',
                'solution_sub_title_id',


            );
       }



}