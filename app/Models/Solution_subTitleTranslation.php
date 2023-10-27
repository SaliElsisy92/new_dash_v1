<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solution_subTitleTranslation extends Model
{
    use HasFactory;


    public $timestamps = false;
    protected $fillable = ['title', 'content'];
}
