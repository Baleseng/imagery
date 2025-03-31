<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageStat extends Model
{
    use HasFactory;

    protected $fillable = [
        'track_id',
        'view_count',
        'click_count',
    ];

    public function track_status(){
        return $this->belongsTo('App\Models\Track');
    }
}
