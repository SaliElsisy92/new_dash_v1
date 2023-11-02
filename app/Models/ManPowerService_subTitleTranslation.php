<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManPowerService_subTitleTranslation extends Model
{
    use HasFactory;

    protected $table="man_power_service_sub_titles_translations";
    public $timestamps = false;
    protected $fillable = ['man_power_service_sub_title_id','sub_title', 'content'];

}