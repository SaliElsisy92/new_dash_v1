<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\website_dataTranslation;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;


class website_data extends Model implements TranslatableContract
{
    use HasFactory,Translatable;
    
    public $translatedAttributes = ['site_name', 'address'];
    protected $fillable = ['location','phone','fax','email1','email2','facebook','linkedin','instgram','twitter','whatsapp','logo'];
    public function files() {
        return $this->morphMany(\Dash\Models\FileManagerModel::class , 'file');
     }
}
