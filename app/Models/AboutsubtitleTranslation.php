<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AboutsubTitle;

class AboutsubtitleTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['aboutsubtitle_id','sub_title', 'content'];

    public function subtitle() {
        return $this->belongsTo(AboutsubTitle::class);
    }
}