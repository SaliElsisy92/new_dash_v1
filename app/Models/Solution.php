<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Model\Solution_subTitle;

class Solution extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['title','content'];
    protected $fillable = ['image'];


        public function sub_title()
        {
            return $this->hasMany(Solution_subTitle::class);
        }

}