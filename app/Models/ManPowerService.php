<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\ManPowerService_subTitle;



class ManPowerService extends Model
{
    use HasFactory;
    use Translatable;
    public $translatedAttributes = ['title','content'];
    protected $fillable = ['image'];


        public function sub_title()
        {
            return $this->hasMany(ManPowerService_subTitle::class,'parent_id');
        }
}