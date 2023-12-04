<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Solution_subTitle;

class Solution_subTitleTranslation extends Model
{
    use HasFactory;


    public $timestamps = false;
    protected $fillable = ['sub_title','solution_sub_title_id', 'content'];

    public function subtitle() {
        return $this->belongsTo(Solution_subTitle::class);
    }
}
