<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use  App\Models\Solution;


class Solution_subTitle extends Model
{
    use HasFactory;

    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['content','title'];
    protected $fillable = ['id_parent,image'];

        public function title()
        {
            return $this->belongsTo(Solution::class);
        }



}