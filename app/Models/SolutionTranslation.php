<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Solution;

class SolutionTranslation extends Model
{
    use HasFactory;


    public $timestamps = false;
    protected $fillable = ['title', 'content'];

    public function title() {
        return $this->belongsTo(Solution::class);
    }
}