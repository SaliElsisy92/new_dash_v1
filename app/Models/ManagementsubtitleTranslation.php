<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Managementsubtitle;
class ManagementsubtitleTranslation extends Model
{
    use HasFactory;


    public $timestamps = false;
    protected $fillable = ['managementsubtitle_id','sub_title', 'content'];

    public function subtitle() {
        return $this->belongsTo(Managementsubtitle::class);
    }
}
