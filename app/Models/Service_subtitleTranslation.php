<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Service_subTitle;

class Service_subtitleTranslation extends Model
{
    use HasFactory;



    public $timestamps = false;
    protected $fillable = ['service_subtitle_id','sub_title', 'content'];

    public function subtitle() {
        return $this->belongsTo(Service_subTitle::class);
    }
}